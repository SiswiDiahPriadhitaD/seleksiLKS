function Scroll(){
	var top = document.getElementById('head');
	var ypos = window.pageYOffset;

	if (ypos > 0) {
		top.style.background="grey";
		top.style.transition=".9s";
		// top.style.color="#000";
	}else{
		top.style.background="transparent";
	}
}
window.addEventListener("scroll",Scroll);