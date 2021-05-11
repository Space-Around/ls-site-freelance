var interval = 4;
var intime = 0;
function timer() {
	if (intime == interval) {
		clearTimeout();
		alert("страница была загружена " + intime + " секунды назад");
    intime = 0;
	}
	else {
		intime += 1;
		setTimeout('timer()', 1000);
	}
}

