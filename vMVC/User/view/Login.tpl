{header}
{navbar}

<section>
    <div class="container-fluid vit-background-opacity">
        <div class="row">
            <div class="col-10 offset-1 text-center">

                {if ((isset($errors) && is_array($errors)))}
                <ul>
                {foreach $errors as $error}
                <li> {$error}</li>
                {/foreach}
                </ul>
                {/if}

                <div class="h3">
                    Вход в личный кабинет
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login" placeholder="Логин" value={$login}>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Пароль" value={$password}>
                    </div>
                    <div class="form-group">
                        {button name = "Вход" icon = 'bi-key-fill'}
                        {* {button name = "Регистрация" href = "/User/Register" icon = 'bi-magic'} *}
                    </div>
                </form>
                  
                <br>
                <br>
            </div>
        </div>
    </div>
</section>
{footer}