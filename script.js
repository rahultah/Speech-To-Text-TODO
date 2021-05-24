var speechRecognition = window.webkitSpeechRecognition;
var recoginition  = new speechRecognition();
var textbox = $("#textbox");
var instructions = $("instructions");

var content = '';
recoginition.continuous = true;
recoginition.onstart = function()
{
    var inst = document.getElementById('instructions');
    inst.innerHTML = "The recording has started";
}
recoginition.onspeechend = function()
{
    var inst = document.getElementById('instructions');
    inst.innerHTML = "No activity";
}
recoginition.onerror = function()
{
    var inst = document.getElementById('instructions');
    inst.innerHTML = "ERROR";
}
recoginition.onresult = function(event)
{
    var current = event.resultIndex;
    var transcript = event.results[current][0].transcript;
    content += transcript;
    // textbox.val(content);
    // console.log(content);
    document.getElementById("cont").innerHTML = content;
}

$('#start').click(function(event)
{
    if(content.length)
    {
        content += '';
    }
    recoginition.start();
})
$('#stop').click(function(event)
{
    if(content.length)
    {
        content += '';
    }
    recoginition.stop();
    var inst = document.getElementById('instructions');

    inst.innerHTML = "The recording has been stopped";
})