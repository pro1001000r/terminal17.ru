{header}
{navbar}

<script src="/template/js/VitVoice.js" type="text/javascript"></script>

<div class="container-fluid">
    <div class="row">

        <div class="col-10 offset-1">

            <div class="row">
                <div class="col text-center vit-color-0 h4">
                    <br>
                    <i class='bi bi-send'></i> Сообщения:
                    <input id='user' value = {$user} hidden = 'true'/>
                </div>
            </div>

            <br>
            <div id="messageV">
                {$messages}
            </div>

            <input type="text" id="page" name="page" value={$page} hidden=true>
        </div>
    </div>
    <div class="row fixed-bottom" style="margin-bottom: 4rem;">
        <div class="col text-center">
        
            {select table='users' value=$userfrom}
           
            <div class="input-group">
                <input type="text" class="form-control h3" id="message" name="message">
                <div class="input-group-append">
                    {button name="" classbtn="vit-outline-0" class="" onclick = "recognizeVit('message')" icon="bi-mic-fill"}
                    {button name="" classbtn="vit-outline-0" class="" onclick = "SendMessage($user)" icon="bi-send"}
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>

</div>

{literal}
    <script type="text/javascript">
        $(function() {
            setInterval(UpdateMessages, 2 * 1000);
        });

        function UpdateMessages() {
            //alert($('#page').val());
            if ($('#page').val() == '1') {
            //if (true) {
                //alert('hf,jnftn');

                var fd = new FormData();
                fd.append('operation', "UpdateMessages");
                fd.append('fromid', $('#users_id').val());
                fd.append('users_id', $('#user').val());
                $.ajax({
                    url: '/Message/Ajax/',
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data) {
                        SetMessages(data);
                    }
                });

            }
        }

        function SendMessage(user) {
            // alert($('#message').val());
            if ($('#message').val() != '') {

                var fd = new FormData();
                fd.append('operation', "SendMessage");
                fd.append('users_id', user);
                fd.append('fromtable', 'users');
                fd.append('fromid', $('#users_id').val());
                fd.append('message', $('#message').val());

                $('#message').val('');

                $.ajax({
                    url: '/Message/Ajax/',
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data) {
                        SetMessages(data);
                    }
                });
            }

        }

        //Показываем сообщения
        function SetMessages(msg) {
            $('#messageV').html(msg);
        };
    </script>
{/literal}


{footer}