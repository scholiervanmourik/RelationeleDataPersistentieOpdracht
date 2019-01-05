var FindClass = document.getElementById('overlay');

function openClose(){
    if (FindClass.classList.contains('Closed') == true) {
        document.getElementById('overlay').style.width = "100%";
		document.getElementById('overlay').style.opacity = "1";
        document.getElementById('overlay').classList.remove("Closed");
        document.getElementById('toggle').classList.add("on");

    } else {
        document.getElementById('overlay').style.width = "0%";
        document.getElementById('overlay').style.opacity = "0";
        document.getElementById('overlay').classList.add("Closed");
        document.getElementById('toggle').classList.remove("on");
    }
}
