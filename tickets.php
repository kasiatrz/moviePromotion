<?php 
$this_page = "tickets";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <meta name="description"
            content="Tickets for adults:12$, students: 10$, until 12: 5$. Available to buy now! Shows during April! Come and watch!" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="reset.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <link rel="icon" href="assets/favi.ico" type="image/x-icon" />
    <title>Tickets | Charlie Cinema in London</title>
</head>

<body id="tickets" class="tickets_start">
    
    <? include ('includes/nav.inc.php'); ?>
    
    <main>
        
        <!--Fold 1-->
        <div>
            
            <!--Popcorn-->
            <div class="popcorn"></div> 
            <!--END Popcorn-->
            
            <h1>Tickets</h1>
            
            <!--table-->
            <table>
            <tr>
                <td>Monday</td>
                <td>12:30</td>
                <td>18:30</td>
                <td>21:00</td>
            </tr>
                
            <tr>
                <td>Tuasday</td>
                <td>12:30</td>
                <td>18:30</td>
                <td>21:00</td>
            </tr>
                
            <tr>
                <td>Wendesday</td>
                <td>12:30</td>
                <td>18:30</td>
                <td>21:00</td>
            </tr>
                
            <tr>
                <td>Friday</td>
                <td>12:30</td>
                <td>18:30</td>
                <td>21:00</td>
            </tr>
                
            <tr>
                <td>Saturday</td>
                <td>12:30</td>
                <td>18:30</td>
                <td>21:00</td>
            </tr>
                
            <tr>
                <td>Friday</td>
                <td>12:30</td>
                <td>18:30</td>
                <td>21:00</td>
            </tr>
                
            </table>
            <!--END table-->
            
            <!--Price-->
            <p><span>Adults:</span> 12$ <span>Students</span>: 10$ <span>Until 12:</span> 5$<br/>
            <span>When?</span> from 1st until 30th of April</p>
            <!--END Price-->
            
            <!--Buy Ticket button-->
            <a href="#" class="button">BUY TICKETS</a>
            <!--END Buy Ticket button-->
            
        </div>
        <!--END Fold 1-->
        
        <!--Fold 2-->
        <div>
            
            <h1>Where are we?</h1>
            <p>Charlie Cinema<br/>
            7 violet street<br/>
            SE10 9JW London
            <br/>
            <br/>
            We are located opposite Cutty Sark DLR Station.
            <br/>
            <br/>
            Contact<br/>
            charlie@cinema.com<br/>
            0987 654 321</p>
        
        <!--map-->
        <div id="map"></div>
        
        <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(51.49463,-0.18243);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 15};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUIhwFrGe85EHPlmm5fzHe_ZXX-QZQN8I&callback=myMap"></script>
        <!--END map-->
            
        </div>
        <!--END Fold 2-->
        
    </main>
    
    <? include ('includes/footer.inc.php'); ?>
    
    <!--   jQuery uniq   -->
     

<script>
   
  $(document).ready(function(){       
        var scroll_pos = 0;
      var dev_width = 0;
      dev_width = $(document).width();
        
            $(document).scroll(function() { 
            scroll_pos = $(this).scrollTop();
            
            if (dev_width >= 768 && dev_width < 1010){
           
                if(scroll_pos < 170) {
                    $("#tickets").removeClass().addClass('purple');
                } else {
                    $("#tickets").removeClass('purple').addClass('green');
                }
            } else {
                
                if(scroll_pos < 500) {
                    $("#tickets").removeClass().addClass('purple');
                } else {
                    $("#tickets").removeClass('purple').addClass('green');
                }
            } 
            
        });
    });
    
</script>
    <!--   END jQuery    -->
    
    </body>
</html>