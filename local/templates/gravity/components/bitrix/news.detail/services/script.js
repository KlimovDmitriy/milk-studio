$(document).ready(function (){
    function showQuestion(e) {
        var activeNow = document.querySelector(".question_trigger.active");
        activeNow.classList.remove("active");
        e.target.classList.add("active");
    }

    var questionsTriggers = document.querySelectorAll(".question_trigger");
    for (var i = 0; i < questionsTriggers.length; i++) {
        questionsTriggers[i].addEventListener("click", showQuestion);
    }

})