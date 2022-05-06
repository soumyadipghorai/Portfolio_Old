var alertHeight = 500;
var alerted = false;

window.onscroll = function() {
   if (window.scrollHeight >= alertHeight && !alerted) {
        alert("hello guys this ghorAI and its version 1, please send your feedback on this page by clicking the hire me button! THANKS");
      alerted = true;
   }
}
