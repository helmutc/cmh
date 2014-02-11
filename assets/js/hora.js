function renderTime() {
	var currentTime = new Date();
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
	setTimeout('renderTime()',1000);
	if (h < 10) {
		h = "0" + h;
	}
	if (m < 10) {
		m = "0" + m;
	}
	if (s < 10) {
		s = "0" + s;
	}
    var myClock = document.getElementById('relogio');
	myClock.textContent = h + ":" + m + ":" + s;
	myClock.innerText = h + ":" + m + ":" + s;
}
renderTime();
