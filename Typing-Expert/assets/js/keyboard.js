document.addEventListener('keypress', keypress);
var pressedKey;
var buttons = document.querySelectorAll("button");
var lessonwords = document.querySelector(".lessonwords");
var lw = lessonwords.innerText.trim().toUpperCase();
var inputCount = 0;
var correct = 0;
var incorrect = 0;
let displayMinutes;
let displaySeconds;
let timer;
let isRunning = false;
let seconds = 0;
let minutes = 0;
let hours = 0;
let Accuracy ,Wpm;


function checkresult(){
    if (inputCount == lw.length) {

        Accuracy = (correct / (correct+incorrect)) * 100;

        alert("Time : "+ displayMinutes + " Minutes And "+ displaySeconds+" Seconds." +"\n Accuracy : " +Accuracy+".");

        // window.location.href = `learning-level.php`;
    }
}

function checkInput(userInput) {

    lw[inputCount] = lw[inputCount].replace(/(\r\n|\n|\r)/gm, "");

    if (userInput === lw[inputCount] || (lw[inputCount] == false && userInput == false)) {
        inputCount++;
        // console.log('correct');
        var usedlw = "";
        var leftlw = "";
        for (i = 0; i < inputCount; i++) {
            usedlw += lw[i].toLowerCase();
        }
        for (i = inputCount; i < lw.length; i++) {

            if (i == inputCount) {
                leftlw += "<span class='c'>" + lw[i].toLowerCase() + "</span>";

            } else {
                leftlw += lw[i].toLowerCase();

            }
        }
        console.log(inputCount);
        var finalstring = "<span  class='used'>" + usedlw + "</span>" + leftlw;
        lessonwords.innerHTML = finalstring;

        correct++;
    } else {
        // console.log('Incorrect');
        incorrect++;

    }

    document.getElementById('correct').innerText = correct;
    document.getElementById('incorrect').innerText = incorrect;

    checkresult();
}

function keypress(e) {
    var keynum;

    if (window.e) {
        keynum = e.keyCode;
    } else if (e.which) {
        keynum = e.which;
    }

    pressedKey = String.fromCharCode(keynum).toUpperCase();

    buttons.forEach(function (button, index) {
        var buttonContent = button.innerText;
        if (buttonContent == pressedKey) {
            button.classList.toggle('click');
        } else {

            button.classList.remove('click');

        }
    });
    checkInput(pressedKey);
    pressedKey = null;
}

window.addEventListener("load", function() {
    alert("Press First Key Of Paraghraph To Start !!!");
  });

function startTimer() {
  if (!isRunning) {
    isRunning = true;
    timer = setInterval(updateTimer, 1000);
    document.getElementById("startStop").textContent = "Stop";
  }
}

function stopTimer() {
  clearInterval(timer);
  isRunning = false;
  document.getElementById("startStop").textContent = "Start";
}

function updateTimer() {
  seconds++;
  if (seconds === 60) {
    seconds = 0;
    minutes++;
  }

  displayMinutes = minutes < 10 ? "0" + minutes : minutes;
  displaySeconds = seconds < 10 ? "0" + seconds : seconds;

  document.getElementById("display").textContent = `${displayMinutes}:${displaySeconds}`;
}

document.addEventListener("keydown", function(event) {
    if (!isRunning) {
        startTimer();
    }
});

