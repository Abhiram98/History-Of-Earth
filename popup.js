function togglePopup(id) {
    var popup = document.getElementById(id);
    popup.classList.toggle("show");
    //console.write(100);
}

function showPopup(id){
	var popup=document.getElementById(id);
	popup.classList.toggle("show",true);
	//popup.width= "10%";
}

function hidePopup(id){
	var popup=document.getElementById(id);
	popup.classList.toggle("show",false);
}