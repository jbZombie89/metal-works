<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('js/app.js')}}"></script>
        <title>J&P Metal Works Gallery</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="css/MasterStyle.css">
    </head>

<body>
<div class="main_body">
  <div class="slideShow">
    <img class="slides" src="../imgs/Ax.jpg"/>
    <img class="slides" src="../imgs/turtles.jpg"/>
    <img class="slides" src="../imgs/MainStreet.jpeg"/>
    <img class="slides" src="../imgs/Vino.jpeg"/>
    <img class="slides" src="../imgs/wingsOnPalett.jpeg"/>
    <img class="slides" src="../imgs/Octopus.png"/>
    <img class="slides" src="../imgs/bulldog.jpeg"/>
    <img class="slides" src="../imgs/compass.jpeg"/>
    <img class="slides" src="../imgs/Army.jpeg"/>
    <img class="slides" src="../imgs/SF.jpeg"/>
    <img class="slides" src="../imgs/Tree-of-Life.png"/>
    <img class="slides" src="../imgs/shield.jpg"/>
    <button id="btn1" onclick="plusDivs(-1)">&#10094;</button>
    <button id="btn2" onclick="plusDivs(1)">&#10095;</button>
  </div>

  <center><a href="https://j-p-metal-works.myshopify.com/"><button id="sl"><h2>> Visit our shop to see all of our products <</h2></button></a></center>

</div>
</body>
<script>
var slideIndex = 1;

function plusDivs(n) {
  showDivs(slideIndex += n);
}
showDivs(1);

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>


</html>
