<!DOCTYPE html>
<html>
  <head>

    <title>Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
      #map 
      {
        height: 100%;
        z-index: 1;
      }
      #login-box
      {
          position: relative;
          top: 673px;
          z-index: 999999999999;
      }
      html, body 
      {
        height: 100%;
        margin: 0;
        padding: 0;
      }

    </style>

  </head>
  <body>
<!-------------------------Start Form --------------------->
  <div id="login-box">
    <div class="left-box">
      <form method="post" action="display.php" target="_blank">
      <p id="c"> </p>
      <pre><label for="username"><span style="color:rgb(110, 106, 106)">Full name: </span></label><input type="text" id="username" name="name" placeholder="Enter full name"/></pre>
      <pre><label for="email"><span style="color:rgb(110, 106, 106)">    Email: </span></label><input type="text" id="email" name="email" placeholder="Enter email address"/></pre>
      <pre><label for="phone"><span style="color:rgb(110, 106, 106)">    Phone: </span></label><input type="number" id="phone" name="phone" placeholder="Enter phone number"/></pre>
      <pre>           <textarea type="text" id="message" name="message" placeholder="Your Comment...." cols="41" rows="5" maxlength="240"></textarea></pre><br>
      <pre>           <input type="submit" value="Submit" name="submit"/></pre>
      </form>
    </div>
  </div>
  <!-------------------------End Form--------------------->	
  
  	
  <!-------------------------Start Map--------------------->
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmX1dUY-WOeTYprlGqYRQ79O0xxSHLSfI&callback=initMap"
    async defer></script>
<!-------------------------End Map--------------------->	
  </body>
</html>