//Hides submit until a box is clicked
$(document).ready(function () {
    $("#OBTN").hide();
});

////disables user from clicking twice in a row
//sets innerHTML to X on click
var boxes = document.getElementsByClassName("box");
var userActions;
for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("click", addX);
}

function addX(event) {
    if (userActions === false) {
        return;
    }
    if (event.currentTarget.innerHTML === "O") {
        return;
    }
    event.currentTarget.innerHTML = "X";
    userActions = false;
//    $("#OBTN").show();
    $("#gameform").submit();
}

//sets hidden inputt value to box inner html
function setHiddenVal() {
    for (i = 1; i <= 9; i++) {
//        console.log("HI"),
        document.getElementById("input" + i).value = document.getElementById("box" + i).innerHTML;
    }
}
$("#gameform").submit(setHiddenVal);
//$('#OBTN').on('click', setHiddenVal);

      