

<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Слайдер для сайта на CSS и JavaScript</title>
        <style>
            /* стили для элемента body */
            body {
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                color: #fff;
                height: 3000px;
            }

            /* стили основного контейнера слайдера */
            .slider {
                position: relative;
                overflow: hidden;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
            }

            /* стили для обёртки, в которой заключены слайды */
            .slider__wrapper {
                position: relative;
                overflow: hidden;
            }

            /* стили для контейнера слайдов */
            .slider__items {
                display: flex;
                transition: transform 0.6s ease;
            }

            /* стили для слайдов */
            .slider__item {
                flex: 0 0 100%;
                max-width: 100%;
            }

            /* стили для кнопок "вперед" и "назад" */
            .slider__control {
                position: absolute;
                top: 50%;
                display: none;
                align-items: center;
                justify-content: center;
                width: 40px;
                color: #fff;
                text-align: center;
                opacity: 0.5;
                height: 50px;
                transform: translateY(-50%);
                background: rgba(0, 0, 0, 0.5);
            }

            .slider__control_show {
                display: flex;
            }

            .slider__control:hover,
            .slider__control:focus {
                color: #fff;
                text-decoration: none;
                outline: 0;
                opacity: 0.9;
            }

            .slider__control_prev {
                left: 0;
            }

            .slider__control_next {
                right: 0;
            }

            .slider__control::before {
                content: '';
                display: inline-block;
                width: 20px;
                height: 20px;
                background: transparent no-repeat center center;
                background-size: 100% 100%;
            }

            .slider__control_prev::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
            }

            .slider__control_next::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
            }

            /* стили для индикаторов */
            .slider__indicators {
                position: absolute;
                right: 0;
                bottom: 10px;
                left: 0;
                z-index: 15;
                display: flex;
                justify-content: center;
                padding-left: 0;
                margin-right: 15%;
                margin-left: 15%;
                list-style: none;
                margin-top: 0;
                margin-bottom: 0;
            }

            .slider__indicators li {
                box-sizing: content-box;
                flex: 0 1 auto;
                width: 30px;
                height: 4px;
                margin-right: 3px;
                margin-left: 3px;
                text-indent: -999px;
                cursor: pointer;
                background-color: rgba(255, 255, 255, 0.5);
                background-clip: padding-box;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
            }

            .slider__indicators li.active {
                background-color: #fff;
            }

            /* для стилизации текущего слайдера 
            .img-fluid {
                display: inline-block;
                height: auto;
                max-width: 100%;
            }*/
        </style>
    </head>

    <body>


        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__items">
                    <div class="slider__item">
                        <div style="height: 250px; background: orange;"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 250px; background: green;"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 250px; background: violet;"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 250px; background: coral;"></div>
                    </div>
                </div>
            </div>
            <a class="slider__control slider__control_prev" href="#" role="button"></a>
            <a class="slider__control slider__control_next" href="#" role="button"></a>
        </div>

        <script>
            'use strict';
            var slideShow = (function () {
                return function (selector, config) {
                    var
                            _slider = document.querySelector(selector), // основный элемент блока
                            _sliderContainer = _slider.querySelector('.slider__items'), // контейнер для .slider-item
                            _sliderItems = _slider.querySelectorAll('.slider__item'), // коллекция .slider-item
                            _sliderControls = _slider.querySelectorAll('.slider__control'), // элементы управления
                            _currentPosition = 0, // позиция левого активного элемента
                            _transformValue = 0, // значение транфсофрмации .slider_wrapper
                            _transformStep = 100, // величина шага (для трансформации)
                            _itemsArray = [], // массив элементов
                            _timerId,
                            _indicatorItems,
                            _indicatorIndex = 0,
                            _indicatorIndexMax = _sliderItems.length - 1,
                            _stepTouch = 50,
                            _config = {
                                isAutoplay: false, // автоматическая смена слайдов
                                directionAutoplay: 'next', // направление смены слайдов
                                delayAutoplay: 5000, // интервал между автоматической сменой слайдов
                                isPauseOnHover: true // устанавливать ли паузу при поднесении курсора к слайдеру
                            };

                    // настройка конфигурации слайдера в зависимости от полученных ключей
                    for (var key in config) {
                        if (key in _config) {
                            _config[key] = config[key];
                        }
                    }

                    // наполнение массива _itemsArray
                    for (var i = 0, length = _sliderItems.length; i < length; i++) {
                        _itemsArray.push({item: _sliderItems[i], position: i, transform: 0});
                    }

                    // переменная position содержит методы с помощью которой можно получить минимальный и максимальный индекс элемента, а также соответствующему этому индексу позицию
                    var position = {
                        getItemIndex: function (mode) {
                            var index = 0;
                            for (var i = 0, length = _itemsArray.length; i < length; i++) {
                                if ((_itemsArray[i].position < _itemsArray[index].position && mode === 'min') || (_itemsArray[i].position > _itemsArray[index].position && mode === 'max')) {
                                    index = i;
                                }
                            }
                            return index;
                        },
                        getItemPosition: function (mode) {
                            return _itemsArray[position.getItemIndex(mode)].position;
                        }
                    };

                    // функция, выполняющая смену слайда в указанном направлении
                    var _move = function (direction) {
                        var nextItem, currentIndicator = _indicatorIndex;
                        ;
                        if (direction === 'next') {
                            _currentPosition++;
                            if (_currentPosition > position.getItemPosition('max')) {
                                nextItem = position.getItemIndex('min');
                                _itemsArray[nextItem].position = position.getItemPosition('max') + 1;
                                _itemsArray[nextItem].transform += _itemsArray.length * 100;
                                _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
                            }
                            _transformValue -= _transformStep;
                            _indicatorIndex = _indicatorIndex + 1;
                            if (_indicatorIndex > _indicatorIndexMax) {
                                _indicatorIndex = 0;
                            }
                        } else {
                            _currentPosition--;
                            if (_currentPosition < position.getItemPosition('min')) {
                                nextItem = position.getItemIndex('max');
                                _itemsArray[nextItem].position = position.getItemPosition('min') - 1;
                                _itemsArray[nextItem].transform -= _itemsArray.length * 100;
                                _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
                            }
                            _transformValue += _transformStep;
                            _indicatorIndex = _indicatorIndex - 1;
                            if (_indicatorIndex < 0) {
                                _indicatorIndex = _indicatorIndexMax;
                            }
                        }
                        _sliderContainer.style.transform = 'translateX(' + _transformValue + '%)';
                        _indicatorItems[currentIndicator].classList.remove('active');
                        _indicatorItems[_indicatorIndex].classList.add('active');
                    };

                    // функция, осуществляющая переход к слайду по его порядковому номеру
                    var _moveTo = function (index) {
                        var i = 0, direction = (index > _indicatorIndex) ? 'next' : 'prev';
                        while (index !== _indicatorIndex && i <= _indicatorIndexMax) {
                            _move(direction);
                            i++;
                        }
                    };

                    // функция для запуска автоматической смены слайдов через промежутки времени
                    var _startAutoplay = function () {
                        if (!_config.isAutoplay) {
                            return;
                        }
                        _stopAutoplay();
                        _timerId = setInterval(function () {
                            _move(_config.directionAutoplay);
                        }, _config.delayAutoplay);
                    };

                    // функция, отключающая автоматическую смену слайдов
                    var _stopAutoplay = function () {
                        clearInterval(_timerId);
                    };

                    // функция, добавляющая индикаторы к слайдеру
                    var _addIndicators = function () {
                        var indicatorsContainer = document.createElement('ol');
                        indicatorsContainer.classList.add('slider__indicators');
                        for (var i = 0, length = _sliderItems.length; i < length; i++) {
                            var sliderIndicatorsItem = document.createElement('li');
                            if (i === 0) {
                                sliderIndicatorsItem.classList.add('active');
                            }
                            sliderIndicatorsItem.setAttribute("data-slide-to", i);
                            indicatorsContainer.appendChild(sliderIndicatorsItem);
                        }
                        _slider.appendChild(indicatorsContainer);
                        _indicatorItems = _slider.querySelectorAll('.slider__indicators > li')
                    };

                    var _isTouchDevice = function () {
                        return !!('ontouchstart' in window || navigator.maxTouchPoints);
                    };

                    // функция, осуществляющая установку обработчиков для событий 
                    var _setUpListeners = function () {
                        var _startX = 0;
                        if (_isTouchDevice()) {
                            _slider.addEventListener('touchstart', function (e) {
                                _startX = e.changedTouches[0].clientX;
                                _startAutoplay();
                            });
                            _slider.addEventListener('touchend', function (e) {
                                var
                                        _endX = e.changedTouches[0].clientX,
                                        _deltaX = _endX - _startX;
                                if (_deltaX > _stepTouch) {
                                    _move('prev');
                                } else if (_deltaX < -_stepTouch) {
                                    _move('next');
                                }
                                _startAutoplay();
                            });
                        } else {
                            for (var i = 0, length = _sliderControls.length; i < length; i++) {
                                _sliderControls[i].classList.add('slider__control_show');
                            }
                        }
                        _slider.addEventListener('click', function (e) {
                            if (e.target.classList.contains('slider__control')) {
                                e.preventDefault();
                                _move(e.target.classList.contains('slider__control_next') ? 'next' : 'prev');
                                _startAutoplay();
                            } else if (e.target.getAttribute('data-slide-to')) {
                                e.preventDefault();
                                _moveTo(parseInt(e.target.getAttribute('data-slide-to')));
                                _startAutoplay();
                            }
                        });
                        document.addEventListener('visibilitychange', function () {
                            if (document.visibilityState === "hidden") {
                                _stopAutoplay();
                            } else {
                                _startAutoplay();
                            }
                        }, false);
                        if (_config.isPauseOnHover && _config.isAutoplay) {
                            _slider.addEventListener('mouseenter', function () {
                                _stopAutoplay();
                            });
                            _slider.addEventListener('mouseleave', function () {
                                _startAutoplay();
                            });
                        }
                    };

                    // добавляем индикаторы к слайдеру
                    _addIndicators();
                    // установливаем обработчики для событий
                    _setUpListeners();
                    // запускаем автоматическую смену слайдов, если установлен соответствующий ключ
                    _startAutoplay();

                    return {
                        // метод слайдера для перехода к следующему слайду
                        next: function () {
                            _move('next');
                        },
                        // метод слайдера для перехода к предыдущему слайду          
                        left: function () {
                            _move('prev');
                        },
                        // метод отключающий автоматическую смену слайдов
                        stop: function () {
                            _config.isAutoplay = false;
                            _stopAutoplay();
                        },
                        // метод запускающий автоматическую смену слайдов
                        cycle: function () {
                            _config.isAutoplay = true;
                            _startAutoplay();
                        }
                    }
                }
            }());

            slideShow('.slider', {
                isAutoplay: true
            });
        </script>

    </body>

</html>							
