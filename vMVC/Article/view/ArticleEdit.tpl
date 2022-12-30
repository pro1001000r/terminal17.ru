{header}
{navbar}
{* <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script> *}
{* <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/inline/ckeditor.js"></script> *}

{* <script src="/includes/ckeditor/ckeditor.js" type="text/javascript"></script> *}

{* <script src="https://kit.fontawesome.com/820f0355a1.js" crossorigin="anonymous"></script> *}

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col-12">
            <p class="h1 text-center">
                Новая статья
            </p>

            <form id="main" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group form-inline">
                    {CREDPanel id=$item.id.value}
                </div>
                <br>
                <input type="text" id="id" name="id" class="col-sm-10 form-control" value="{$item.id.value}" readonly>
                <br>
                <div class="row">
                    <div class="col">

                        <div class="btn-toolbar" data-role="editor-toolbar" data-target="#vittext">

                            {* <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" id="vFonts"><i
                                        class="icon-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </div> *}

                            <div class="btn-group">
                                <select id='vSelectFont' class="btn vit-color-0 vit-outline-0">
                                    {* по умолчанию делаем первую кнопку выбора *}
                                    <option selected disabled>Шрифты</option>
                                </select>
                            </div>

                            <div class=" btn-group vit-outline-0">
                                {button  onclick="vExecCommand('bold')" name= "" icon='icon-bold' classbtn='vit-outline-0' class=''}
                                {button  onclick="vExecCommand('italic')" name= "" icon='icon-italic' classbtn='vit-outline-0' class=''}
                                {button  onclick="vExecCommand('strikethrough')" name= "" icon='icon-strikethrough' classbtn='vit-outline-0' class=''}
                                {button  onclick="vExecCommand('underline')" name= "" icon='icon-underline' classbtn='vit-outline-0' class=''}
                            </div>


                            <div class="btn-group">
                                {* <a class="btn vit-outline-0" onclick="vExecCommand('undo')" title="Undo (Ctrl/Cmd+Z)"><i
                                        class="icon-undo"></i></a> *}
                                {button onclick="vExecCommand('undo')" classbtn="vit-outline-0" class='' icon="icon-undo"}
                                {* <a class="btn vit-outline-0" onclick="vExecCommand('redo')" title="Redo (Ctrl/Cmd+Y)"><i
                                        class="icon-repeat"></i></a> *}
                                {button onclick="vExecCommand('redo')" classbtn="vit-outline-0" class='' icon="icon-repeat"}
                                {button onclick="vExecCommandImage()" classbtn="vit-outline-0" class='' icon="bi-activity"}
                            </div>
                            <br>
                            <div class="btn-group">

                                {button onclick="vExecCommand('justifyLeft')" classbtn="vit-outline-0" class='' icon="icon-align-left"}
                                {button onclick="vExecCommand('justifyCenter')" classbtn="vit-outline-0" class='' icon="icon-align-center"}
                                {button onclick="vExecCommand('justifyRight')" classbtn="vit-outline-0" class='' icon="icon-align-right"}
                                {button onclick="vExecCommand('justifyFull')" classbtn="vit-outline-0" class='' icon="icon-align-justify"}
                            </div>
                            <br>
                            <div class="btn-group">

                                {button onclick="vExecCommandImage('float','Left')" classbtn="vit-outline-0" class='' icon="bi-justify-left"}
                                {button onclick="vExecCommandImage('float','Right')" classbtn="vit-outline-0" class='' icon="bi-justify-right"}
                                {button onclick="vExecCommandImage('width','50%')" classbtn="vit-outline-0" class='' icon="bi-image"}
                            </div>
                            <br>

                            <div class="btn-group">
                                {button onclick="vExecCommand('removeFormat')" classbtn="vit-outline-0" class='' icon="bi-eraser"}
                                {button onclick="vExecCommandCode()" classbtn="vit-outline-0" class='' icon="bi-braces"}
                            </div>
                        </div>

                        <div class="card p-2">
                            <div id="vittext" name="vittext" style="width: 100%; height: 50vh; overflow-y: scroll;"
                                contenteditable="true" onchange="copytext()">
                                Пробная запись для примера
                            </div>
                        </div>
                        <br>


                        <textarea id="content" name="content" style="width: 100%;">{$item.content.value}</textarea>

                    </div>
                </div>

                {literal}
                    <script type="text/javascript">
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
                    </script>
                {/literal}
            </form>
        </div>
    </div>
</div>

{footer}