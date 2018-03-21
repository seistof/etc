for (var i = 0; i < 9; i++) {
    document.getElementById('game').innerHTML += '<div class="block"></div>';
}
var turn = 0;
var scoreX = document.getElementById('scoreX');
var valueX = 0;
var scoreO = document.getElementById('scoreO');
var valueO = 0;
var allBlocks = document.getElementsByClassName('block');

document.getElementById('game').onclick = function (event) {
    console.log(event);
    if (event.target.className === 'block') {
        if (turn % 2 == 0) {
            event.target.innerHTML = 'X';
        }
        else {
            event.target.innerHTML = 'O';

        }
        turn++;
        check();
    }

}

document.getElementById('reset').onclick = function () {
        scoreX.innerHTML = '0';
        scoreO.innerHTML = '0';
    }

function restart() {
    document.getElementById('result').innerHTML = 'Score';
    for (var i = 0; i < 9; i++) {
        allBlocks[i].innerHTML = '';
    }
}

function check() {
    if (allBlocks[0].innerHTML == 'X' && allBlocks[1].innerHTML == 'X' && allBlocks[2].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 1000);
    }
    if (allBlocks[3].innerHTML == 'X' && allBlocks[4].innerHTML == 'X' && allBlocks[5].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[6].innerHTML == 'X' && allBlocks[7].innerHTML == 'X' && allBlocks[8].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[0].innerHTML == 'X' && allBlocks[3].innerHTML == 'X' && allBlocks[6].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[1].innerHTML == 'X' && allBlocks[4].innerHTML == 'X' && allBlocks[7].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[2].innerHTML == 'X' && allBlocks[5].innerHTML == 'X' && allBlocks[8].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[0].innerHTML == 'X' && allBlocks[4].innerHTML == 'X' && allBlocks[8].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[2].innerHTML == 'X' && allBlocks[4].innerHTML == 'X' && allBlocks[6].innerHTML == 'X') {
        document.getElementById('result').innerHTML = 'X wins';
        valueX++;
        scoreX.innerHTML = valueX.toString();
        setTimeout("restart()", 3000);

    }
    if (allBlocks[0].innerHTML == 'O' && allBlocks[1].innerHTML == 'O' && allBlocks[2].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[3].innerHTML == 'O' && allBlocks[4].innerHTML == 'O' && allBlocks[5].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[6].innerHTML == 'O' && allBlocks[7].innerHTML == 'O' && allBlocks[8].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[0].innerHTML == 'O' && allBlocks[3].innerHTML == 'O' && allBlocks[6].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[1].innerHTML == 'O' && allBlocks[4].innerHTML == 'O' && allBlocks[7].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[2].innerHTML == 'O' && allBlocks[5].innerHTML == 'O' && allBlocks[8].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[0].innerHTML == 'O' && allBlocks[4].innerHTML == 'O' && allBlocks[8].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }
    if (allBlocks[2].innerHTML == 'O' && allBlocks[4].innerHTML == 'O' && allBlocks[6].innerHTML == 'O') {
        document.getElementById('result').innerHTML = 'O wins';
        valueO++;
        scoreO.innerHTML = valueO.toString();
        setTimeout("restart()", 3000);
    }

    //012
    //345
    //678

}