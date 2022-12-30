<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 09:28:11
  from '/var/www/u1845303/data/www/terminal17.ru/vMVC/Message/view/MessageList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637ed6bbbd2a62_32819547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '502a7d5e72121779ed2ee92885322e8954a6e7a1' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vMVC/Message/view/MessageList.tpl',
      1 => 1658563544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ed6bbbd2a62_32819547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Select/function.select.php','function'=>'smarty_function_select',),3=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src="/template/js/VitVoice.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="container-fluid">
    <div class="row">

        <div class="col-10 offset-1">

            <div class="row">
                <div class="col text-center vit-color-0 h4">
                    <br>
                    <i class='bi bi-send'></i> Сообщения:
                    <input id='user' value = <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 hidden = 'true'/>
                </div>
            </div>

            <br>
            <div id="messageV">
                <?php echo $_smarty_tpl->tpl_vars['messages']->value;?>

            </div>

            <input type="text" id="page" name="page" value=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 hidden=true>
        </div>
    </div>
    <div class="row fixed-bottom" style="margin-bottom: 4rem;">
        <div class="col text-center">
        
            <?php echo smarty_function_select(array('table'=>'users','value'=>$_smarty_tpl->tpl_vars['userfrom']->value),$_smarty_tpl);?>

           
            <div class="input-group">
                <input type="text" class="form-control h3" id="message" name="message">
                <div class="input-group-append">
                    <?php echo smarty_function_button(array('name'=>'','classbtn'=>"vit-outline-0",'class'=>'','onclick'=>"recognizeVit('message')",'icon'=>"bi-mic-fill"),$_smarty_tpl);?>

                    <?php echo smarty_function_button(array('name'=>'','classbtn'=>"vit-outline-0",'class'=>'','onclick'=>"SendMessage(".((string)$_smarty_tpl->tpl_vars['user']->value).")",'icon'=>"bi-send"),$_smarty_tpl);?>

                </div>
            </div>

        </div>
    </div>
    <br>
    <br>

</div>


    <?php echo '<script'; ?>
 type="text/javascript">
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
    <?php echo '</script'; ?>
>



<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
