
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('js/app.js')}}"></script>
        <script src="http://www.youtube.com/player_api"></script>
        <title>J&P Metal Works</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/MasterStyle.css">
    </head>
    <body>
<div class="hmC">
  @include('../headerMenu')
</div>

<div class="gM">
<center><div class="gMV"><h2 id="gMTitle">Videos</h2></div>
  <div class="gMV"><h2 class="gMTitle" id="P">Pictures</h2></div>
  <div class="gMV"><h2 class="gMTitle" id="R">Reading</h2></div></center>
</div>
<div class="MainContainer">
@include('../galleryTwo')
</div>

</body>
<script>
$(document).on('click', '#P',function(){
  var url="http://127.0.0.1:8000/pic"
      $('.MainContainer').empty();
      $('.MainContainer').load(url);
});
$(document).on('click', '#R',function(){
  var url="http://127.0.0.1:8000/reading"
      $('.MainContainer').empty();
      $('.MainContainer').load(url);
});
$(document).on('click', '#gMTitle',function(){
      location.reload();
});

$("#P").on("click", function() {
    $(this).css("background", "#b8e0ba");
    $("#gMTitle").css("background","#f2f4f7");
    $("#R").css("background","#f2f4f7");
});
$("#R").on("click", function() {
    $(this).css("background", "#b8e0ba");
    $("#gMTitle").css("background","#f2f4f7");
    $("#P").css("background","#f2f4f7");
});
$("#gMTitle").on("click", function() {
    $(this).css("background", "#b8e0ba");
    $("#R").css("background","#f2f4f7")
    $("#P").css("background","#f2f4f7");
});
</script>
</html>
