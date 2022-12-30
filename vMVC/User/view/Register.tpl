{header}
{navbar}
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            {if ((isset($errors) && is_array($errors)))}
                <ul>
                    {foreach $errors as $error}
                        <li> - {$error}</li>
                    {/foreach}
                </ul>
            {/if}
            {literal}
                <script src="https://www.google.com/recaptcha/api.js"></script>
            {/literal}

            <h2>Регистрация на сайте</h2>
            <form action="#" method="post" id="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Имя" value={$name}>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Логин" value={$login}>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Пароль" value={$password}>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password2" placeholder="Подтвеждение пароля"
                        value={$password2}>
                </div>
                <div class="form-group">{*капча*}
                    <div class="g-recaptcha" data-sitekey="6Lfms0YgAAAAADKlLXQ8tAxPYPTvBHqsNB7mg1K1"></div>
                </div>
                <div class="form-group">
                    {button name = "Регистрация" href = "/User/Register" icon = 'bi-magic'}
                </div>
            </form>
            {*literal}
                <script>
                    $('#form').submit(function() {
                        var response = grecaptcha.getResponse();
                        if (response.length == 0) {
                            alert('Вы не прошли проверку CAPTCHA должным образом');
                            return false;
                        }
                    });
                </script>
            {/literal*}
        </div>
    </div>
</div>

{footer}