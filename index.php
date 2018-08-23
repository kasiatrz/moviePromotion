<?php 
$this_page = "homepage";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <meta name="description"
            content="Dr Dolittle movie by Bethy Thomas staring Eddie Murphy. Charlie Cinema in London. You have to see it!" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="reset.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="icon" href="assets/favi.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
     
    <title>Dr Dollittle movie | Charlie Cinema in London</title>
</head>

<body id="homepage" class="homepage_start">
    
    <? include('includes/nav.inc.php'); ?>
    
    <main>
        
        <!--Fold 1-->
        <div>
            <!--movie title-->
            <h1>Dr. Dolittle</h1> 
            <h2>MOVIE PREMIERE 1 APRIL</h2>
            <!--END movie title-->
        
            <!--Buy Ticket button-->
            <a href="tickets.php" class="button">BUY TICKETS</a>
            <!--END Buy Ticket button-->
        
            <!--Guinea Pig-->
            <img src="assets/guinea_pig_single.svg" alt="Rodney" >
            <!--END Guinea Pig-->
        </div>
        <!--END Fold 1-->
        
        <!--Fold 2-->
        <div id="about">
            
            <!--characters SVG-->
            <img src="assets/main_characters.svg" alt="Dr. Dolittle">
            <!--END characters SVG-->
            
            <!--About-->
            <h2>About</h2>
            <p>After a fender bender, Dr. John Dolittle (Eddie Murphy) gets back his childhood ability to converse with animals. But the gift turns out to be a mixed blessing when the good doctor finds himself besieged by boozing monkeys, injured owls and depressed lions who need his special assistance.<br/><br/> 
            Director: Betty Thomas
            <br/> 
            Producers: John Davis, David T. Friendly and Joseph Singer</p>
            <!--END About-->
            
            <!--Poster PDF-->
            <a href="assets/dr.dolittle_poster.pdf" class="button" target="_blank" >POSTER PDF</a>
            <!--END Poster PDF-->
        </div>
        <!--END Fold 2-->
        
    </main>
  
    <? include('includes/footer.inc.php'); ?>
    
<!--   jQuery single page  -->
<script>
   
  $(document).ready(function(){       
        var scroll_pos = 0; 
        var dev_width = 0;
        dev_width = $(document).width();
        
        
            $(document).scroll(function() { 
            scroll_pos = $(this).scrollTop();
           
            if (dev_width >= 768 && dev_width < 1010){
                
            if(scroll_pos < 250) {
                $("#homepage").removeClass().addClass('orange');
                
                } else {
                    $("#homepage").removeClass('orange').addClass('green');
                }
            } else {
                  
                if(scroll_pos < 400) {
                $("#homepage").removeClass().addClass('orange');
                
                } else {
                    $("#homepage").removeClass('orange').addClass('green');
                }
                
            }
        });
    });
    
    
</script>
    <!--   END jQuery single page   -->
    
    </body>
</html>