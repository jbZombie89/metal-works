<div class="MM">
  <center><a href='http://127.0.0.1:8000/'><div class="MMS" id="home"><h2 id="mtxt">Home</h2></div></a>

  <a href='http://127.0.0.1:8000/gallery'><div class="MMS" id="gallery"><h2 id="mtxt">Gallery</h2></div></a>
  <a href='http://127.0.0.1:8000/services'><div class="MMS" id="MMS1"><h2 id="mtxt">Services</h2></div></a>

  <div class="MMS" id="MMS2"><h2 id="mtxt">Shop</h2></div>
    <div class="container MMS2">
    <a href='https://j-p-metal-works.myshopify.com/'><div class="Serv"><h3>All Items</h3></div></a>
    <a href='https://j-p-metal-works.myshopify.com/collections/military-items'><div class="Serv"><h3>Military</h3></div></a>
    <a href='https://j-p-metal-works.myshopify.com/collections/monograms'><div class="Serv"><h3>Monograms</h3></div></a>
    <a href='https://j-p-metal-works.myshopify.com/collections/home-decor-metal-art-great-for-gifts'><div class="Serv"><h3>Home Decor</h3></div></a>
    <a href='https://j-p-metal-works.myshopify.com/collections/americana'><div class="Serv"><h3>Americana</h3></div></a>
    <a href='https://www.etsy.com/shop/JandPMetalWorks'><div class="Serv"><h3>Shop on Etsy</h3></div></a>
  </div>

    <a href='http://127.0.0.1:8000/contact'><div class="MMS" id="MMS3"><h2 id="mtxt">Contact</h2></div></a></center>
</div>

<script>
$(document).on('click', '.MMS',function(){
    var id = $(this).attr('id');
    $("."+id).toggle();
  });

  $("#home").on("click", function() {
      $(this).css("background", "#b8e0ba");
      $("#gallery").css("background","#dee1e5");
      $("#MMS1").css("background","#dee1e5");
      $("#MMS2").css("background","#dee1e5");
      $("#MMS3").css("background","#dee1e5");
  });

  $("#gallery").on("click", function() {
      $(this).css("background", "#b8e0ba");
      $("#home").css("background","#dee1e5");
      $("#MMS1").css("background","#dee1e5");
      $("#MMS2").css("background","#dee1e5");
      $("#MMS3").css("background","#dee1e5");
  });

  $("#MMS1").on("click", function() {
      $(this).css("background", "#b8e0ba");
      $("#home").css("background","#dee1e5");
      $("#gallery").css("background","#dee1e5");
      $("#MMS2").css("background","#dee1e5");
      $("#MMS3").css("background","#dee1e5");
  });

  $("#MMS2").on("click", function() {
      $(this).css("background", "#b8e0ba");
      $("#home").css("background","#dee1e5");
      $("#MMS1").css("background","#dee1e5");
      $("#gallery").css("background","#dee1e5");
      $("#MMS3").css("background","#dee1e5");
  });

  $("#MMS3").on("click", function() {
      $(this).css("background", "#b8e0ba");
      $("#home").css("background","#dee1e5");
      $("#MMS1").css("background","#dee1e5");
      $("#MMS2").css("background","#dee1e5");
      $("#gallery").css("background","#dee1e5");
  });

</script>
