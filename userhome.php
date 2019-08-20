
<html>

<title>User page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">


body{

	top: 2%;
	margin: 8%;
	background: #9de6e3;
	color: #fff;
	 font-family: courier;
background-image:url(4.jpg);
	background-size: cover;

}


@font-face
{
	src:url(assets/font.oft);
	 font-family: courier;
}

#uni
{
	position: absolute;
	width: 100%;
	min-height: 
	left: 0px;
	top: 0px;
	 font-family: courier;
}

   

#header
{

	width: 84%;
	height: 120px;
    background-color:#47c9af;
	font-size: 20px;
	color: black;
	 font-family: courier;
}

 h1{
  top:50px;
	font-family: Impact;
  font-size: 50px;
  left: 10px;
  color:#89e5dd;
  text-shadow: 2px 3px black;
}






#content
{
	border: 1px solid #443a3a;
	width: 1134px;
	padding: 9px;
	font-size: 25px;
	background: white;
	height: 500px;
}



.signin{
width: 60%;
height: 40%;
left:42%;
    top: 60%;
position: absolute;
padding: 10px 25px;
background-color: #bebed2;
transform: translateX(-50%) translateY(-50%);
border: 1px solid black;
	border-collapse: collapse;
}
span{
	color:black;
}

@import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu {
  width: 84%;
  border-bottom: 3px solid #443a3a;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu ul {
  background: #ffffff;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu.align-right > ul > li > a {
  margin-right: 0;
  margin-left: -4px;
}
#cssmenu > ul > li > a {
  z-index: 2;
  padding: 18px 25px 12px 25px;
  font-size: 15px;
  font-weight: 400;
  text-decoration: none;
  color: #443a3a;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  margin-right: -4px;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #ffffff;
}
#cssmenu > ul > li > a:after {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 84%;
  height: 120%;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  content: "";
  -webkit-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  -webkit-transform: perspective(5px) rotateX(2deg);
  -webkit-transform-origin: bottom;
  -moz-transform: perspective(5px) rotateX(2deg);
  -moz-transform-origin: bottom;
  transform: perspective(5px) rotateX(2deg);
  transform-origin: bottom;
}
#cssmenu > ul > li.active > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #443a3a;
}


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: white;
  font-size: 40px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
 font-family: Lucida Calligraphy;
 text-shadow: 3px 4px #000002;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
img{
 
  width: 100%;
  height: 90%;
}
.logo{
  width: 170px;
  height: 130px;
  padding: 20px;
}


img, h1 {display: inline-block; *display: inline; zoom: 1; vertical-align: top; }
</style>




<div id='uni'>
<?php
include('userpage.php');
?>
<div id="content">
<?php
if(isset($_GET['page']))
{
	$page= $_GET['page'];
	$display=$page.'.php';
	include($display);	
}
else
{
	echo "

<div class='slideshow-container'>

<div class='mySlides fade'>
  <div class='numbertext'>1 / 3</div>
  <img src='10.jpg' >
  <div class='text'>Memorial Garden Cemetery</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>2 / 3</div>
  <img src='12.jpg' >
  <div class='text'>Input Text</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>3 / 3</div>
  <img src='11.jpg'>
  <div class='text'>Caption Two</div>
</div></div>
    

<div style='text-align:center'>
  <span class='dot'></span> 
  <span class='dot'></span> 
  <span class='dot'></span> 
</div>";

	

};



?>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>


</div>
</html>