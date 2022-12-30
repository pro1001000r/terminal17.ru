<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
    <div class="navbar-header">
        {*button name = '' href = 'javascript: history.back()' icon = 'reply-fill'*}

        <a href="/" class='vit-color-0 vShadowT vit-font-1'>
            https://VJone.ru
        </a>
        {*button name = '' href = "tel: +79855327363" icon = 'telephone-fill'
        comment = 'Вы можете сразу нам позвонить нажав кнопочку или набрать +79855327363'}

        {button name = '' href = "/#R2" icon = 'envelope-fill'
        comment = 'обратная связь через почту: pro1001000r@ya.ru'*}
    </div>
    {find}
    {button name = '' href = "/Cart/View/" icon = 'bi-cart3'
                    comment = 'Корзина'}
    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#Vit-navbar-collapse"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Vit-navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

            <li class="navbar-item">
                {button name = '' href = "/Nomen/List/" icon = 'bi-box-seam'  comment = 'Каталог'}
                {button name = '' href = "Linksite" icon='bi-code-slash' comment = 'Полезные сайты'}
                {*<button type="button" class="btn vit-color-0" data-toggle="collapse" data-target="#Vit-cattree-collapse" aria-expanded="false">
                    <i class="bi bi-box-seam h2"></i>
                    <br>
                    <small>Каталог</small>
                </button>*}
            </li>

            {if ($userIsGuest)}
                <li class="navbar-item">
                    {button name = '' href = "/User/Login/" icon = 'bi-key-fill'
                                comment = 'Только для зарегистрированных пользователей. 
                    Мы регистрируем вручную без роботов и наши клиенты нас знают'}
                </li>
            {else}
                {if ($isAdmin)}
                    <li class="navbar-item">
                        {button name = 'Админка' href = "/admin/" icon = 'bi-gear-fill'}
                    </li>
                    <li class="navbar-item">
                        {button name='Добавить ссылку' href = "/Linksite/Edit/" icon = 'bi-plus-circle-fill'}
                    </li>
                {/if}
                <li class="navbar-item">
                    {button name = $userName href = "/Cabinet/" icon = 'bi-person-check-fill'
                                comment = 'Кабинет пользователя'}
                </li>
                <li class="navbar-item">
                    {button name = 'Выход' href = "/User/Logout/" icon = 'bi-door-open-fill'}
                </li>
            {/if}
        </ul>
    </div>
</nav>