{literal}
    <script src="https://www.google.com/recaptcha/api.js"></script>
{/literal}

<div class="g-recaptcha" data-sitekey="6Lfms0YgAAAAADKlLXQ8tAxPYPTvBHqsNB7mg1K1" data-size="compact"></div>

{literal}
    <script>
        $('#form').submit(function() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert('Вы не прошли проверку CAPTCHA должным образом');
                return false;
            }
        });
    </script>
{/literal}