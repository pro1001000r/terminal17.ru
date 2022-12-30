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


function vExecCommand3() {

    var sel = window.getSelection();
    var vRange = sel.getRangeAt(0);

    var vStr = sel.toString();
    vRange.deleteContents();
    //let vNode = new DocumentFragment();
    //vNode.className = vClass;
    //let vNode = document.createDocumentFragment();
    //vNode.className = vClass;
    let vNode = document.createElement('div');

    vStr = '<blockquote class="blockquote text-right"><footer class="blockquote-footer">' +
        vStr +
        '</footer></blockquote>';
    alert(vStr);
    vNode.innerHTML = vStr;
    alert(vNode);
    vRange.insertNode(vNode);
    vRange.setStartAfter(vNode);
    vRange.setEndAfter(vNode);

    //alert(range);
    //range.deleteContents();
    sel.removeAllRanges();
    sel.addRange(vRange);


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

    console.log(vImgRange.src);
    console.log(vImgRange);

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

function vExecCommandImage(vStyle,vValue) {

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
            vImg.setAttribute(attr.name,attr.value);
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

vittext.onfocus = function() {
    var timerId;
    timerId = setInterval(function() {
        var vt = $('#vittext').html();
        $('#content').val(vt);
    }, 2000);
};