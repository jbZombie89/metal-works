
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
<div class="MasterContainer">
      <div class="hpMIFirst"></div>
      <div class="infoContainer">
        <div class="infoTitle" id="itOne"><h3>> Are you looking for high quality metal art? <</h3></div>
        <div class="infoText itOne"><center><h3>Look no further! We specialize in making custom metal wall art and metal fabrication services.<br> Let’s work together to build a one of a kind masterpiece unique to you!<br><br>
Using advanced techniques for cutting, shaping and designing metals, we can achieve any design you want! <br>Adding powder coating and automotive clear ensures the longest life possible for our items.<br><br>
Our more popular designs include steel American Flags, rustic Vino decor, and outdoor business signage.</h3></center></div>

  <div class="infoTitle" id="itTwo"><h3>> Services provided by J&P Metal Works <</h3></div>
  <div class="infoText itTwo"><center><h3>We can service individual consumers and businesses alike! We can ship your items to you or you can pick them up at the shop.<br><br>
    Consumer Services:<br>
- Design new wall art<br>
- Vinyl cutting<br>
- Tumbler powder coating<br>
- 3D Printing!<br><br>
Business Services:<br>
- Design single sheet, 2D, and 3D signs (up to 4' X 8')<br>
- Manufacture hard to find parts<br>
- Large scale manufacturing<br>
- Welding Services</h3></center></div>

  <div class="infoTitle" id="itThree"><h3>> Why choose J&P Metal Works? <</h3></div>
  <div class="infoText itThree"><center><h3>All our products are made in the U.S.A.!<br><br>Our attention to detail, superior craftsmanship, and highest quality materials, make us the best company to hire for your metal work needs.<br><br>
  Our methods ensure that our items do nor warp over time or lose color and chip.<br><br> While no product is indestructible, we go the extra mile to make sure your product exceeds the stands of construction elsewhere.
  </h3></center></div>


  <div class="infoTitle" id="itFour"><h3>> How to order a custom item <</h3></div>

<div class="infoText itFour"><center><h3>Custom orders are processed via phone call, email, or in person to ensure we are able to perfectly deliver on your vision. <br><br> If you have an idea you want to discuss, call us at <a href="tel:1-910-497-0104">910-497-0104</a>.<br><br>If you have images you would like to show us attach them <a href="mailto:joey@JandPMetalWorks.com?Subject=Custom-Order-from-Website">HERE</a></center></div>

</div></center>


<div class="pC">
      <div class="hpMI" id="one">
        <a href='https://j-p-metal-works.myshopify.com/collections/military-items/products/us-army'><center><div class="buyNow"><h2 id="buy">Buy Now</h2></div></center></a>
      </div>

      <div class="hpMI" id="two">
        <a href='https://j-p-metal-works.myshopify.com/products/octopus'><center><div class="buyNow"><h2 id="buy">Buy Now</h2></div></center></a>
      </div>

      <div class="hpMI" id="three">
        <a href='https://j-p-metal-works.myshopify.com/products/tree-of-life'><center><div class="buyNow"><h2 id="buy">Buy Now</h2></div></center></a>
      </div>

      <div class="hpMI" id="four">
        <a href='https://j-p-metal-works.myshopify.com/products/vino-3d-metal-art'><center><div class="buyNow"><h2 id="buy">Buy Now</h2></div></center></a>
      </div>

      <div class="hpMI" id="five">
        <a href='https://j-p-metal-works.myshopify.com/products/deer-welcome-sign-metal'><center><div class="buyNow"><h2 id="buy">Buy Now</h2></center></div></center></a>
      </div>
    </div>
</div>

    <script>
    $(document).on('click', '.infoTitle',function(){
        var id = $(this).attr('id');
        $("."+id).toggle();
      });

    </script>
</html>
