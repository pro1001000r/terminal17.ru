<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/VitVoice.js" type="text/javascript"></script>

<div class="row">
    <div class="col-10 offset-1">

        <p class='h3 vit-color-0'>По вопросам обращайтесь:</p>
        <form method="post" id="form" action="/componentsVit/VMail.php">

            <div class="form-group">
                <label for="phone" class="col-xs-3 col-form-label text-left">Телефон:</label>

                {*<input type="text" name="phone" maxlength="30" class="form-control" placeholder="Ваш телефон">*}
                <input type="tel" id="phone" name="phone" maxlength="30" class="form-control"
                    placeholder="+7(___)-___-__-__">
            </div>

            <div class="form-group">
                <label for="message" class="col-xs-3 col-form-label text-left">Кратко:</label>
                <textarea id="message" rows="7" cols="50" class="form-control" placeholder="Краткое описание"
                    name="message"></textarea>
            </div>
            <div class="form-group">
                {recaptcha}
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn vit-color-0 vit-outline-0">
                    <span class="glyphicon glyphicon-send"></span> Отправить
                </button>
                <button type="button" name="submit1" class="btn vit-color-0 vit-outline-0"
                    onclick="recognizeVit('message')">
                    <span class="bi bi-mic-fill"></span>
                </button>
                <button type="button" name="submit2" class="btn vit-color-0 vit-outline-0" onclick="speak('message')">
                    <span class="glyphicon glyphicon-volume-up"></span>
                </button>
                <br>
            </div>
            <p class="small">
                Нажимая на кнопку "Отправить", вы даете согласие
                на обработку персональных данных и соглашаетесь c
                <a href="/confidence/" target="_blank">политикой конфиденциальности</a>
            </p>
        </form>
    </div>
</div>