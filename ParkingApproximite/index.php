<!DOCTYPE html>
<html>
  <head>
    <title>Map</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
   
  </head>
  <body>
    <h3>My Maps</h3>
    <!--The div element for the map -->
    <div id="map"></div>


    <script type="text/javascript">
      
        function marche(){
          var paris = {lat :48.85 , lng : 2.35};
          var map = new google.maps.Map(document.getElementById('map'),
          {
              zoom : 10,
              center : paris

          });

          var marker = new google.maps.Marker({
            position : paris,
            map : map
          })
        } 

    </script>
  </body>
  <script async defer 
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY8nbcvb0bIYRStWkAzjJCaRtltQ6ZD0o&callback=marche"></script>
</html>