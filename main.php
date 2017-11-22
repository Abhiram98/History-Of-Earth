<!DOCTYPE html>
<html>
<head>
	<title>History Of Planet Earth</title>
	<script src="main.js" type="text/javascript"></script>
	<script src="popup.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="popup.css"></link>
	<link rel="stylesheet" type="text/css" href="main.css"></link>
	<link rel="stylesheet" type="text/css" href="container.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="comment_css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>




<style type="text/css">
	

	#mainImage{
		height: 300px;
	}

</style>

<body>

<ul>
  <li><a href="main.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
  <li><a href="contact.html"><i class="fa fa-address-book" aria-hidden="true"></i>Contact</a></li>
  <li><a href="#addnewcomment"><i class="fa fa-commenting" aria-hidden="true"></i>Feedback</a></li>
</ul>


<h1 align="center">History Of Planet Earth</h1>

<div class="container" align="center" id="Stage1">
	<img id='mainImage'  src='Images/Stage1.png' >
	<div class='centered' onclick="gotoWindow('pangea')">
		<pre class='popup' onmouseover="togglePopup('pangea')" onmouseleave="togglePopup('pangea')">Pangea<span class='popuptext' id='pangea'>Pangaea was Earth's <br>supercontinent <br>335 million years ago!</span>
		</pre>
	</div>


</div>


<div class="container" id="Stage2">
	<img id='mainImage'  src='Images/Stage2.png' >
	<div class='mid-top' onclick="gotoWindow('laurasia')">
		<pre class='popup' onmouseover="togglePopup('laurasia')" onmouseleave="togglePopup('laurasia')">Laurasia<span class='popuptext' id='laurasia'>Northern Supercontinent<br> of Europe, Asia and <br>North America</span>
		</pre>
	</div>

	<div class='mid-bottom' onclick="gotoWindow('gondwana')">
		<pre class='popup' onmouseover="togglePopup('gondwana')" onmouseleave="togglePopup('gondwana')">Gondwana<span class='popuptext' id='gondwana'>Supercontinent of India,<br> Australia, South America</span>
		</pre>
	</div>
</div>

<div class="container" id="Stage3">
	<img id='mainImage'  src='Images/Stage3.png' >
	<div class='centered'>
		<pre class='popup' onmouseover="togglePopup('s3')" onmouseleave="togglePopup('s3')">Earth?!<span class='popuptext' id='s3'>Now, that's more like it!</span>
		</pre>
	</div>


</div>

<div class="container" id="Stage4">
	<img id='mainImage'  src='Images/Stage4.png' >
	<div class='africa' onclick="gotoWindow('africa')">
		<pre class='popup' onmouseover="togglePopup('africa')" onmouseleave="togglePopup('africa')">Africa<span class='popuptext' id='africa'>Africa</span>
		</pre>
	</div>
	<div class='europe' onclick="gotoWindow('europe')">
		<pre class='popup' onmouseover="togglePopup('europe')" onmouseleave="togglePopup('europe')">Europe<span class='popuptext' id='europe'>Europe</span>
		</pre>
	</div>
	<div class='southA' onclick="gotoWindow('southA')">
		<pre class='popup' onmouseover="togglePopup('southA')" onmouseleave="togglePopup('southA')">South America<span class='popuptext' id='southA'>South America</span>
		</pre>
	</div>
		<div class='northA' onclick="gotoWindow('northA')">
		<pre class='popup' onmouseover="togglePopup('northA')" onmouseleave="togglePopup('northA')">North America<span class='popuptext' id='northA'>North America</span>
		</pre>
	</div>
		<div class='asia' onclick="gotoWindow('asia')">
		<pre class='popup' onmouseover="togglePopup('asia')" onmouseleave="togglePopup('asia')">Asia<span class='popuptext' id='asia'>Asia</span>
		</pre>
	</div>
		<div class='india' onclick="gotoWindow('india')">
		<pre class='popup' onmouseover="togglePopup('india')" onmouseleave="togglePopup('india')">India<span class='popuptext' id='india'>India</span>
		</pre>
	</div>
		<div class='aus' onclick="gotoWindow('australia')">
		<pre class='popup' onmouseover="togglePopup('aus')" onmouseleave="togglePopup('aus')">Australia<span class='popuptext' id='aus'>Australia</span>
		</pre>
	</div>
		<div class='antartica' onclick="gotoWindow('antartica')">
		<pre class='popup' onmouseover="togglePopup('antartica')" onmouseleave="togglePopup('antartica')">Antartica<span class='popuptext' id='antartica'>Antartica</span>
		</pre>
	</div>

</div>



<br/>

<div align="center">
<input type="range" step="1" id="mainSlider" class="slider" value="0" min="0" max="3" step="0.1" onchange="showSliderValue()" ></input>
<p id="sliderValue">335 Million Years Ago</p>

<button id="prevButton" onclick="prevFunc()">
	<i class="fa fa-step-backward" aria-hidden="true"></i>
</button>
<button id="playButton" onclick="playFunc()">
	<i class="fa fa-play-circle" aria-hidden="true"></i>
</button>
<button id="nextButton" onclick="nextFunc()"><i class="fa fa-step-forward" aria-hidden="true"></i>
</button>
</div>

<br><br>

<form method="post" action="addComment.php" id="addnewcomment">
	Name<input type="text" name="user_name"><br>
	Comment<input type="text" name="user_comment"><br>
	<input type="submit" name="submit_button" value="Comment">
	
</form>

<div class="comment_section">
	<?php
		$contents= file("allComments.txt");

		for($i=0;$i<count($contents);$i++){
			$det=explode(",",$contents[$i]);
			echo "<div class='comment'>".$det[0]."-  \" ".$det[1]."\"</div>"."<br>"; 
		}

	?>
</div>

</div>

</body>
</html>