function showSliderValue() {
    var x = document.getElementById("mainSlider");
    
    if(x.value==0){
    	document.querySelector("#Stage1").style.display='block';
    	document.querySelector("#Stage2").style.display='none';
    	document.querySelector("#Stage3").style.display='none';
    	document.querySelector("#Stage4").style.display='none';
    	document.getElementById("sliderValue").innerHTML = "335 Million Years Ago";
    		
    }
    else if(x.value==1) {
    	
    	document.querySelector("#Stage2").style.display='block';
    	document.querySelector("#Stage1").style.display='none';
    	document.querySelector("#Stage3").style.display='none';
    	document.querySelector("#Stage4").style.display='none';
    	document.getElementById("sliderValue").innerHTML = "225 Million Years Ago";
    }

    else if(x.value==2) {

    	document.querySelector("#Stage3").style.display='block';
    	document.querySelector("#Stage1").style.display='none';
    	document.querySelector("#Stage2").style.display='none';
    	document.querySelector("#Stage4").style.display='none';
    	document.getElementById("sliderValue").innerHTML = "100 Million Years Ago";

    }
    else if(x.value==3) {

    	document.querySelector("#Stage4").style.display='block';
    	document.querySelector("#Stage1").style.display='none';
    	document.querySelector("#Stage2").style.display='none';
    	document.querySelector("#Stage3").style.display='none';
    	
    	document.getElementById("sliderValue").innerHTML = "Earth Today";

    }
}


function nextFunc(){
	//Goes to next Phase
	var x=document.getElementById("mainSlider");
	x.value++;
/*
    var img2=document.querySelectorAll('div.container')[x.value-1].children[0];
    img2.style.opacity=1;
    var nID=setInterval(fade,100);
    var op_1=1;
    function fade(){
        if(op<=0){
            clearInterval(nID);
        }
        else{
            op_1-=0.1;
            img2.style.opacity=op_1;
        }
    }

*/
	showSliderValue();
    /*var img1=document.querySelectorAll('div.container')[x.value].children[0];
    img1.style.opacity=0;
    var ID=setInterval(frame,100);
    var op=0;
    function frame(){
        if(op>=1)
            clearInterval(ID);
        else{
            op+=0.1;
            img1.style.opacity=op;
        }   
    }*/
}

function prevFunc(){
	//Goes to previous phase
	var x=document.getElementById("mainSlider");
	x.value--;
	showSliderValue();

}

function playFunc(){
	//goes forward all phases
	var slider= document.getElementById("mainSlider");
	var x=slider.value;

	function callback(){x++;return nextFunc;}
	if(x==3){return;}
	setTimeout(callback(), 1000);
	if(x==3){return;}
	setTimeout(callback(), 2000);
	if(x==3){return;}
	setTimeout(callback(), 3000);

}


function gotoWindow(str){

	window.open(str+".html");

}

function Animate(){
    document.querySelectorAll('container');
}