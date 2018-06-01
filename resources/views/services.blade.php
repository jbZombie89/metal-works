
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('js/app.js')}}"></script>
        <title>J&P Metal Work Services</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/MasterStyle.css">
    </head>

@include("../headerMenu")
<div class="readingWelcome" id="rW">
  <div class="infoTitle" id="iTP"><h2 id="iT">Commercial Services</h2></div>
  <div class="infoText2 iTP"><h3>We offer the following metal work services:<br><br><center>
- CNC cutting (up to 1" thick steel)<br><br>
- Welding Services for automotive and fabrication needs <br><br>
- Business Sign design and manufacturing <br><br>
- Powder coating <br><br>
- Clear Coating<br><br>
- Commercial Fabrication<br>
(Stair planks, framing, etc.)<br><br>
and much more...<br><br></center>
Don't see what you're looking for?<br> Give us a call at <a href="tel:1-910-497-0104">910-497-0104</a> to see if we offer your desired service!
</h3></div>

  <div class="infoTitle" id="iTP2"><h2 id="iT">Signs, Gates, and Doors</h2></div>
  <div class="infoText2 iTP2"><h3><center><u>Signs</u></center><br>
- Make your business stand out!<br><br>
- Go BIG, up to 8' x 16'!<br>Large signs come in multiple pieces and are sure to catch customers attention!<br><br>
- Back lighting for additional customization <br><br>
- Powder coated to last in exterior or interior environments<br><br>
- Clear Coating to give a high gloss finish<br><br>
- Use your design or logo<br><br>
*some designs and logos require modification</br><br><br>
<center><u>Gates</u></center><br>
- Extremely durable!<br><br>
- Small gates for interior use<br>
(No more plastic gates your pets or children can destroy!)<br><br>
- Medium and Large gates for shops or exterior use<br>
(Employee Only areas, Fence Gates, etc.)<br><br><br>
<center><u>Doors</u></center><br>
- Easily attached to existing doors<br>
(Choose holes for screwing into door, or clean up the look by having bolts welded to the back of the deisgn)<br><br>
- Designs for double doors available<br><br>
- Have the entire door assembled and shipped to you!<br><br>
- Quality guarenteed!<br><br>

Don't see what you're looking for? Contact us by clicking <a href="tel:1-910-497-0104">HERE</a> to find out if we offer your desired service!
</h3></div>

  <div class="infoTitle" id="iTP3"><h2 id="iT">Fabrication Services</h2></div>
  <div class="infoText2 iTP3"><h3><u>Welding Services for:</u><br><br><center>
    - Automotive<br><br>
    - Motorcycles <br><br>
    - Custom Brackets <br><br>
    - Custom Containers<br><br>
    - Military ATV parts<br>
    and much more...<br><br></center>

    <u>Fabrication Services for:</u><br><br><center>
      - Car parts fabrication <br><br>
      - Motorcycle parts fabrication <br><br>
      - Stairs <br><br>
      - Stair Planks<br><br>
      - Steel Shooting Targets<br><br>
      - Truck Grills<br>and much more...<br><br>

    Don't see what you're looking for? Contact us by clicking <a href="tel:1-910-497-0104">HERE</a> to find out if we offer your desired service!
</h3></div>
</div>

<div class="nicePic" id="nP1"></div>
<div class="nicePic" id="nP2"></div>
<div class="nicePic" id="nP3"></div>

<script>
$(document).on('click', '.infoTitle',function(){
    var id = $(this).attr('id');
    $("."+id).toggle();
  });
</script>

</html>
