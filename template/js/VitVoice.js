//var $voiceTrigger = $("#voice-trigger");
//var $searchForm = $("#search");
//var $searchInput = $("#search-field");
//var $result = $("#result");
let argVit = '';

/*  set Web Speech API for Chrome or Firefox */
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
/* Check if browser support Web Speech API, remove the voice trigger if not supported */
if (window.SpeechRecognition) {
    //alert("сработало в ветке");
    /* setup Speech Recognition */
    var recognition = new SpeechRecognition();
    recognition.interimResults = true;
    recognition.lang = 'ru-RU';
    recognition.addEventListener('result', _transcriptHandler);

    recognition.onerror = function (event) {
        console.log(event.error);

        /* Revert input and icon CSS if no speech is detected */
        if (event.error == 'no-speech') {
            $("#voice-trigger").removeClass('active');
            $("#search-field").attr("placeholder", "Поиск...");
        }
    }
} else {
    $("#voice-trigger").text('не сработало');
    //$voiceTrigger.remove();
}

$(function () {
    /* Trigger listen event when our trigger is clicked */

//    $("#voice-trigger").on('click', listenStart);
});

/* Our listen event */
function listenStart(e) {
    //alert('сработало клик');
    e.preventDefault();
    /* Update input and icon CSS to show that the browser is listening */
    //$("#search-field").attr("placeholder", "Говорите...");
    //$("#voice-trigger").addClass('active');
    /* Start voice recognition */
    recognition.start();
}

/* Parse voice input */
function _parseTranscript(e) {
    return Array.from(e.results).map(function (result) {
        return result[0]
    }).map(function (result) {
        return result.transcript
    }).join('')
}

/* Convert our voice input into text and submit the form */
function _transcriptHandler(e) {
    var speechOutput = _parseTranscript(e)
    var textV = document.getElementById(argVit);

    //textV.value = textV.value + ' ' + speechOutput;
    //$("#search-field").val(speechOutput);
    //alert("Найдено: "+textV.value);
    //$result.html(speechOutput);
    if (e.results[0].isFinal) {
        textV.value = textV.value + speechOutput + '. ';
        //$searchForm.submit();
    }

}

function recognizeVit(argVit1) {
    //alert("Передан id: "+argVit1);
    argVit = argVit1;
    listenStart(event);
}


function speak(argVit1, fraza = '') {
    let textvit = '';
    if (document.getElementById(argVit1) != null) {
        let evit = document.getElementById(argVit1);
        textvit = evit.value;
    } else {
        textvit = argVit1;
    }
    textvit = fraza + ' ' + textvit;
    speechSynthesis.speak(new SpeechSynthesisUtterance(textvit));
}
