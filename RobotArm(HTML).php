<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Robot Arm</title>
<link rel="stylesheet" href="HTML5-CSS-Reset.css" type="text/css">
<link rel="stylesheet" href="Css.css" type ="text/css">
<link href="https://fonts.googleapis.com/css?family=Spartan:400,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<script src="javascript.js"></script>

<style>


//style slider

.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #3d4143;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background:  #9C8CC5;
  
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background:  #9C8CC5;

}


body {

background-image: url('robot.jpg');
background-repeat: no-repeat;
background-attachment: fixed;  
background-size: 100% 100%;
font-family:"Comic Sans MS", cursive, sans-serif;
margin: 0;
}


h1 {
color:#ff8a8a;
font-size:35px;	
font-family:"Comic Sans MS", cursive, sans-serif;
text-align:center;
line-height: 1.8;
}

h2 {
color:#ff8a8a;
font-size:25px;	
font-family:"Comic Sans MS", cursive, sans-serif;
text-align: center;
}

h3 {
color:inherit;
text-align:inherit;
font-size:18px;	
font-family:"Comic Sans MS", cursive, sans-serif;
}


p{
color:#000000;
font-size:20px;
padding:15px;
margin:30px;
font-family:"Comic Sans MS", cursive, sans-serif;
line-height: 1.5;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.column1, input[type=submit],input[type=reset] {
width: 100%;
margin-top:0;
}}

/*style the button*/
.button {
float: center;
display: inline-block;
padding: 15px 25px;
font-size: 16px;
cursor: pointer;
text-align: center;
text-decoration: none;
outline: none;
color: #fff;
background-color: #956a8c;
border: none;
border-radius: 15px;
box-shadow: 0 9px #999;
}

.button:hover {
  background-color: #d5aaab
  }

.button:active {
background-color: #87455c;
box-shadow: 0 5px #666;
transform: translateY(4px);
}

/* 
html5doctor.com Reset Stylesheet
v1.6.1
Last Updated: 2010-09-17
Author: Richard Clark - http://richclarkdesign.com 
Twitter: @rich_clark
*/

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video{
margin:0;
padding:0;
border:0;
outline:0;
font-size:100%;
vertical-align:baseline;
background:transparent;
}

body{
line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section{ 
display:block;
}

nav ul{
list-style:none;
}

blockquote, q{
quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after{
content:'';
content:none;
}

a{
margin:0;
padding:0;
font-size:100%;
vertical-align:baseline;
background:transparent;
}

/* change colours to suit your needs */
ins{
background-color:#ff9;
color:#000;
text-decoration:none;
}

/* change colours to suit your needs */
mark{
background-color:#ff9;
color:#000; 
font-style:italic;
font-weight:bold;
}

del{
text-decoration: line-through;
}

abbr[title], dfn[title]{
border-bottom:1px dotted;
cursor:help;
}

table{
border-collapse:collapse;
border-spacing:0;
}

/* change border colour to suit your needs */
hr{
display:block;
height:1px; 
border-top:1px solid #cccccc;
border: 2px solid #CC9999;
margin:1em 0;
padding:0;
}

input, select{
vertical-align:middle;
}
</style>

</head>
<body>
<svg width="1500" height="150">
<text x="50" y="100" >
<tspan style="fill:#9C8CC5; font-size:50px;"> Robot Arm Control </tspan>
<animate attributeName="x" from="0" to="360" dur="15s" fill="freeze" repeatCount="indefinite"/>
</text>
</svg>


<form action="robotarm(DB).php" method="POST">
<p>Engine 1</p>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange1" name="motor1">
  <p>Value: <span id="demo1"></span></p>
</div>

<script>
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>
<br>

<p>Engine 2</p>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange2" name="motor2">
  <p>Value: <span id="demo2"></span></p>
</div>

<script>
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
</script>
<br>

<p>Engine 3</p>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange3" name="motor3">
  <p>Value: <span id="demo3"></span></p>
</div>

<script>
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
</script>
<br>

<p>Engine 4</p>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange4" name="motor4">
  <p>Value: <span id="demo4"></span></p>
</div>

<script>
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
</script>
<br>

<p>Engine 5</p>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange5" name="motor5">
  <p>Value: <span id="demo5"></span></p>
</div>

<script>
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
</script>
<br>

<p>Engine 6</p>

<div class="slidecontainer">
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange6" name="motor6">
  <p>Value: <span id="demo6"></span></p>
</div>

<script>
var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}
</script>
<br>

<button type="submit" class="button" name="submit">SAVE</button>
<button class="button">RUN</button>

<script>
//massaege in home page
alert ("Page loaded successfully ... ");
//pupup for contant in contact us page
// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
</script>
</form>
</body>
</html>

