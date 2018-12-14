var firstButton = document.getElementById('firstButton')

var secondButton = document.getElementById('gameButton')

firstButton.innerHTML = '<button value="firstButton" id="startTimer">Click Me</button>'


firstButton.addEventListener('click', function () {
    var name = document.getElementById('name')
    var countClicks = 0;
    var bigman = 200
    secondButton.innerHTML = '<button value="SecondButton" id="disappear">click Me 15 times to win</button>';
    setTimeout(function () {
        secondButton.innerHTML = '<p>You have finished the Game</p>'
    }, 3000)

    secondButton.addEventListener('click', function () {
        countClicks= countClicks +1
        document.getElementById('resultedClicks').innerHTML = '<p>You Have clicked this button: </p>' + countClicks
    })

    document.getElementById('winnerOrLooser').innerHTML =''

    setTimeout(function () {
        if (countClicks >= 15) {
            document.getElementById('winnerOrLooser').innerHTML = '<p>You Have WON CONGRATULATIONS!!</p>'
        } else {
            document.getElementById('winnerOrLooser').innerHTML = '<p>You Have LOST YOU NOOB!</p>'
        }
    }, 4000)

    var seconds = 3;
    var Secs = document.getElementById('seconds-counter');

    function incrementSeconds() {
        seconds -= 1;
        Secs.innerText = "You have " + seconds + "    seconds LEFT.";
    }

    var cancelTime = setInterval(incrementSeconds, 1000);
    setTimeout(clearInterval(cancelTime),3000)
})





