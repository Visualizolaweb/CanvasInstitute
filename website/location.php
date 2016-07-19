<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="assets/icons/font-awesome-4.6.3/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="assets/framework/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/stylesheet/main.css" media="screen" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/framework/materialize/js/materialize.min.js"></script>

      <script>
        $(document).ready(function(){
          $('.button-collapse').sideNav({
              menuWidth: 300,
              edge: 'right',
              closeOnClick: true
          });

          $('.slider').slider({indicators: false});
        });
      </script>
    </head>

    <body>
      <section class="container">
        <?php require("include/header.php");?>

        <div class="row news">
          <div class="col l9">
            <div id="map"></div>
            <script type="text/javascript">
              var map;
              function initMap() {
              var myLatLng = {lat:40.6369659, lng: -74.0810307};

              // Create a map object and specify the DOM element for display.
              var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 18
              });

              // Create a marker and set its position.
              var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'Canvas Institute',
                icon:'assets/images/marker-maps.png'
              });
            }
            </script>
          </div>
          <div class="col l3">
            <h4>LOCATION</h4>
            <p>Canvas is located on 150 Victory Blvd. Staten Island New York 10301</p>
          </div>
        </div>



        <?php include_once("include/footer.php"); ?>
      </section>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjf4QtNNlMN5QLatEiU9AZOH0hmcnKEwQ&callback=initMap">
    </script>
    </body>
  </html>
