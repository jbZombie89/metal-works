<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('js/app.js')}}"></script>
        <title>J&P Metal Works</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/MasterStyle.css">

    </head>
      <div class="hmC">
        @include('../headerMenu')
      </div>
    <div class="readingWelcome" id="readingw2"><h2>J&P is dedicated to providing the best service and delivering the highest quality products. <br><br> If you have any questions please feel free to call us, or come down to the shop!<br><br>We look forward to providing you with the highest quality metal work, metal art, and metal services.</h2></div>

    <div class="cContainer">
    <center><a href="tel:1-910-497-0104"><div class="callUs"><h2 id="callUs"> Call<br> J&P</h2></div></a>
    <a href="mailto:joey@JandPMetalWorks.com?Subject=Request-for-Information"><div class="callUs"><h2 id="callUs">Email J&P</h2></div></a>
    </center>

  </div>






</html>
