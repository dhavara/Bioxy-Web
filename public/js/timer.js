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

window.onload = function() {
    let duration = 60
    let display = document.querySelector('#time');
    timer(duration, display);
}