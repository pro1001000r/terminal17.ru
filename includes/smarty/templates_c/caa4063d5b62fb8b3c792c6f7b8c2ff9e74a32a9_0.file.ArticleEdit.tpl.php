<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-14 07:20:43
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Article/view/ArticleEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62cf999b191295_58024478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa4063d5b62fb8b3c792c6f7b8c2ff9e74a32a9' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Article/view/ArticleEdit.tpl',
      1 => 1657772413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cf999b191295_58024478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/function.CREDPanel.php','function'=>'smarty_function_CREDPanel',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>




<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col-12">
            <p class="h1 text-center">
                Новая статья
            </p>

            <form id="main" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group form-inline">
                    <?php echo smarty_function_CREDPanel(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']['value']),$_smarty_tpl);?>

                </div>
                <br>
                <input type="text" id="id" name="id" class="col-sm-10 form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id']['value'];?>
" readonly>
                <br>
                <div class="row">
                    <div class="col">

                        <div class="btn-toolbar" data-role="editor-toolbar" data-target="#vittext">

                            
                            <div class="btn-group">
                                <select id='vSelectFont' class="btn vit-color-0 vit-outline-0">
                                                                        <option selected disabled>Шрифты</option>
                                </select>
                            </div>

                            <div class=" btn-group vit-outline-0">
                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('bold')",'name'=>'','icon'=>'icon-bold','classbtn'=>'vit-outline-0','class'=>''),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('italic')",'name'=>'','icon'=>'icon-italic','classbtn'=>'vit-outline-0','class'=>''),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('strikethrough')",'name'=>'','icon'=>'icon-strikethrough','classbtn'=>'vit-outline-0','class'=>''),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('underline')",'name'=>'','icon'=>'icon-underline','classbtn'=>'vit-outline-0','class'=>''),$_smarty_tpl);?>

                            </div>


                            <div class="btn-group">
                                                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('undo')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"icon-undo"),$_smarty_tpl);?>

                                                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('redo')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"icon-repeat"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommandImage()",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"bi-activity"),$_smarty_tpl);?>

                            </div>
                            <br>
                            <div class="btn-group">

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('justifyLeft')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"icon-align-left"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('justifyCenter')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"icon-align-center"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('justifyRight')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"icon-align-right"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('justifyFull')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"icon-align-justify"),$_smarty_tpl);?>

                            </div>
                            <br>
                            <div class="btn-group">

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommandImage('float','Left')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"bi-justify-left"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommandImage('float','Right')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"bi-justify-right"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommandImage('width','50%')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"bi-image"),$_smarty_tpl);?>

                            </div>
                            <br>

                            <div class="btn-group">
                                <?php echo smarty_function_button(array('onclick'=>"vExecCommand('removeFormat')",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"bi-eraser"),$_smarty_tpl);?>

                                <?php echo smarty_function_button(array('onclick'=>"vExecCommandCode()",'classbtn'=>"vit-outline-0",'class'=>'','icon'=>"bi-braces"),$_smarty_tpl);?>

                            </div>
                        </div>

                        <div class="card p-2">
                            <div id="vittext" name="vittext" style="width: 100%; height: 50vh; overflow-y: scroll;"
                                contenteditable="true" onchange="copytext()">
                                Пробная запись для примера
                            </div>
                        </div>
                        <br>


                        <textarea id="content" name="content" style="width: 100%;"><?php echo $_smarty_tpl->tpl_vars['item']->value['content']['value'];?>
</textarea>

                    </div>
                </div>

                
                    <?php echo '<script'; ?>
 type="text/javascript">
                        ////////////////////////////////////////////////////////////////////////////////////////////////
                        $(function() {
                            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande',
                                    'Lucida Sans', 'Tahoma', 'Times',
                                    'Times New Roman', 'Verdana'
                                ],
                                fontTarget = $('#vSelectFont');

                            $.each(fonts, function(idx, fontName) {
                                fontTarget.append($('<option value = \'' + fontName +
                                    '\'<span style="font-family:\'' + fontName + '\'">' + fontName +
                                    '</span></option>'));
                            });

                            //var vt = $('#vittext').html();
                            var vt = $('#content').val();
                            document.getElementById('vittext').innerHTML = vt;
                        });


                        vSelectFont.onchange = function() {
                            var val1 = $('#vSelectFont').val();
                            //alert(val1);
                            vExecCommand("fontName", vf = false, val1);
                        };



                        function vExecCommand(vCommand, vf = false, vArg = null) {
                            // if ((vCommand == "fontName") or (vCommand == "fontSize") or(vCommand == "hiliteColor") or (vCommand == "foreColor")) {
                            if ((vCommand == "fontName") || (vCommand == "fontSize") || (vCommand == "hiliteColor") || (
                                    vCommand == "foreColor")) {
                                document.execCommand('styleWithCSS', false, true);
                                document.execCommand(vCommand, vf, vArg);
                                document.execCommand('styleWithCSS', false, false);
                            } else {
                                document.execCommand(vCommand, vf, vArg);
                            };

                        };

                        function vExecCommand2(vElem = 'span', vClass = 'vit-color-0') {

                            var sel = window.getSelection();
                            var vRange = sel.getRangeAt(0);
                            //alert(sel);
                            var vStr = sel.toString();
                            vRange.deleteContents();
                            let vNode = document.createElement(vElem);
                            vNode.className = vClass;
                            vNode.innerHTML = vStr;

                            vRange.insertNode(vNode);
                            vRange.setStartAfter(vNode);
                            vRange.setEndAfter(vNode);

                            //alert(range);
                            //range.deleteContents();
                            sel.removeAllRanges();
                            sel.addRange(vRange);


                        };


                        function vExecCommandCode() {

                            let vText = '123';
                            //Читаем буфер
                            navigator.clipboard.readText()
                                .then(text1 => {
                                    vText = text1;
                                   
                                    // Преобразуем техт
                                    //vText = escape_text(vText);

                                    // Ставим выделение
                                    var sel = window.getSelection();
                                    var vRange = sel.getRangeAt(0);

                                    var vStr = sel.toString();
                                    var vStr = vText;

                                    vRange.deleteContents();

                                    let vNode = document.createElement('div');
                                    vNode.style = "background-color: hsl(56, 100%, 50%);"
                                    vNode.style.width = "100%";

                                    vStr = '<pre><b>Код:</b><br> ' +
                                        vStr +
                                        '<br><b>КонецКода</b></pre>';
                                    //alert(vStr);
                                    //vNode.innerHTML = vStr;srcdoc=
                                    vNode.srcdoc = vStr;
                                    //alert(vNode);
                                    vRange.insertNode(vNode);
                                    vRange.setStartAfter(vNode);
                                    vRange.setEndAfter(vNode);

                                    sel.removeAllRanges();
                                    sel.addRange(vRange);

                                })
                                .catch(err => {
                                    console.log('Something went wrong', err);
                                    return 0;
                                })

                        };

                        function vExecCommandImageOld() {

                            var sel = window.getSelection();
                            var vRange = sel.getRangeAt(0);
                            console.log(vRange);
                            //var vImg = sel.querySelector('img');
                            var vImgRange = vRange.startContainer.childNodes[0];

                            console.log(vImgRange.src);
                            console.log(vImgRange);

                            let vImg = document.createElement('img');
                            var attrs = vImg.attributes;

                            // var attrSrc = document.createAttribute('src');
                            // attrSrc.value = vImgRange.src;
                            // vImg.setNamedItem(attrSrc);

                            vImg.src = vImgRange.src;
                            vRange.deleteContents();

                            // var attrStyle = document.createAttribute('style');
                            // присваиваем значение атрибуту с помощью свойства value 
                            // attrStyle.value = 'float: right;';
                            // устанавливаем атрибут элементу 
                            // vImg.setNamedItem(attrStyle);
                            vImg.style = 'float: right;';

                            vRange.insertNode(vImg);
                            vRange.setStartAfter(vImg);
                            vRange.setEndAfter(vImg);

                            //alert(range);
                            //range.deleteContents();
                            sel.removeAllRanges();
                            sel.addRange(vRange);

                        };

                        function vExecCommandImageLeft() {

                            var sel = window.getSelection();
                            var vRange = sel.getRangeAt(0);

                            var vImgRange = vRange.startContainer.childNodes[0];

                            let vImg = document.createElement('img');
                            //var attrs = vImg.attributes;

                            vImg.src = vImgRange.src;
                            vRange.deleteContents();

                            vImg.style = 'float: left;';

                            vRange.insertNode(vImg);
                            vRange.setStartAfter(vImg);
                            vRange.setEndAfter(vImg);

                            sel.removeAllRanges();
                            sel.addRange(vRange);

                        };

                        function vExecCommandImage(vStyle, vValue) {

                            var sel = window.getSelection();
                            var vRange = sel.getRangeAt(0);

                            var vImgRange = vRange.startContainer.childNodes[0];

                            if (vImgRange.hasAttribute('src') == 1) {
                                console.log(vImgRange.src);
                                console.log(vImgRange);

                                let vImg = document.createElement('img');
                                //var attrs = vImg.attributes;

                                for (let attr of vImgRange.attributes) { // (4) весь список
                                    //alert( `${attr.name} = ${attr.value}` );
                                    vImg.setAttribute(attr.name, attr.value);
                                }

                                vImg.src = vImgRange.src;
                                vRange.deleteContents();

                                //vImg.style.width = '50%';
                                //vImg.style.float = 'right';
                                vImg.style[vStyle] = vValue;

                                vRange.insertNode(vImg);
                                vRange.setStartAfter(vImg);
                                vRange.setEndAfter(vImg);

                                sel.removeAllRanges();
                                sel.addRange(vRange);
                            };
                        };

                        function escape_text(text) {
                            var map = {'&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;'};
                            return text.replace(/[&<>"']/g, function(m) {
                            return map[m];
                        });
                    };

                    // $('body').on('paste', '#vittext', function(e) {
                    //     e.preventDefault();
                    //     var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                    //     document.execCommand('insertHtml', false, escape_text(text));
                    // });

                    vittext.onfocus = function() {
                        var timerId;
                        timerId = setInterval(function() {
                            var vt = $('#vittext').html();
                            $('#content').val(vt);
                            }, 2000);
                        };
                    <?php echo '</script'; ?>
>
                
            </form>
        </div>
    </div>
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
