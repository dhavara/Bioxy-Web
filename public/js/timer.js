function timer(duration, display) {
    let timer = duration, minutes, seconds;
	setInterval(function () {
        if (--timer < 0) {
			timer = 0;
            document.querySelector('#times-up').submit();
		}
		minutes = parseInt((timer / 60) % 60, 10);
		seconds = parseInt(timer % 60, 10);

		minutes = minutes < 10 ? "0" + minutes : minutes;
		seconds = seconds < 10 ? "0" + seconds : seconds;

		display.innerHTML = minutes + ":" + seconds;
	}, 1000);
}

function obtainPhpVar() {
    let difficulty = document.querySelector("#difficulty").innerHTML;
    return parseInt(difficulty);
}

window.onload = function() {
    let difficulty = obtainPhpVar();
    let duration = 60;
    switch (difficulty) {
        case 1:
            duration = 60;
            document.querySelector("#time").innerHTML = "01:00";
            break;
        case 2:
            duration = 45;
            document.querySelector("#time").innerHTML = "00:45";
            break;
        case 3:
            duration = 30;
            document.querySelector("#time").innerHTML = "00:30";
            break;
        case 4:
            duration = 15;
            document.querySelector("#time").innerHTML = "00:15";
            break;
    }
    let display = document.querySelector('#time');
    timer(duration, display);
}