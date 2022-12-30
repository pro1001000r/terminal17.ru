<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
    <div class="navbar-header">
        {*button name = '' href = 'javascript: history.back()' icon = 'reply-fill'*}

        <a href="/" class='vit-color-0 vShadowT vit-font-1'>
            http://terminal17.ru
        </a>
        {*button name = '' href = "tel: +79855327363" icon = 'telephone-fill'
        comment = 'Вы можете сразу нам позвонить нажав кнопочку или набрать +79855327363'}

        {button name = '' href = "/#R2" icon = 'envelope-fill'
        comment = 'обратная связь через почту: pro1001000r@ya.ru'*}
    </div>
    {find}

    {button name = '' href = "/Nomen/List/" icon = 'bi-box-seam'  comment = 'Каталог'}

    {* {button name = '' href = "/Cart/View/" icon = 'bi-cart3' comment = 'Корзина'} *}

    {* {button name = '' href = "/Message/List/" icon = 'bi-bell-fill' comment = 'Сообщения'} *}

    {* <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#Vit-navbar-collapse"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Vit-navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

            <li class="navbar-item">

                {button name = '' href = "Linksite" icon='bi-code-slash' comment = 'Полезные сайты'}
                {if ($userIsGuest)}
                    {button name = '' href = "/User/Login/" icon = 'bi-key-fill'
                                                                        comment = 'Только для зарегистрированных пользователей. 
                    Мы регистрируем вручную без роботов и наши клиенты нас знают'}

                {else}
                    {if ($isAdmin)}
                        {button name ='' comment = 'Админка' href = "/Admin/View/" icon = 'bi-gear-fill'}
                        {button name='' comment = 'Добавить ссылку на сайт' href = "/Linksite/Edit/" icon = 'bi-code-slash' mode='new'}
                    {/if}
                    {button name = $userName href = "/Cabinet/" icon = 'bi-person-check-fill'
                                                                        comment = 'Кабинет пользователя'}
                    {button name ='' comment = 'Выход' href = "/User/Logout/" icon = 'bi-door-open-fill'}

                {/if}
            </li>
        </ul>
    </div> *}
</nav>

<nav class="navbar fixed-bottom navbar-light bg-light d-sm-block d-md-none d-lg-none d-xl-none" id="menu1">

    {button name = '' href = "/" icon = 'bi-house-door'  comment = 'Главная'}
    {button name = '' href = "/Find/View/" icon = 'bi-search'  comment = 'Поиск'}
    {* {button name = '' href = "/Message/List/" icon = 'bi-chat'  comment = 'Сообщения'} *}
    {button name = '' href = "/Nomen/List/" icon = 'bi-box-seam'  comment = 'Каталог'}
    {* {button name = '' href = "/Cart/View/" icon = 'bi-cart3' comment = 'Корзина'} *}
    {* {if (!$userIsGuest)}
        {button name = '' href = "/Cabinet/" icon = 'bi-person-check-fill' comment = 'Кабинет пользователя'}
    {/if} *}

</nav>