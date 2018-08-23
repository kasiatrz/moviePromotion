<?php 
$this_page = "cast";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <meta name="description"
            content="Cast of Dr. Dolittle movie. Eddie Murphy and Kristen Wilson. Amazing actors and amazing movie in Charlie Cinema" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="reset.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
   <link rel="icon" href="assets/favi.ico" type="image/x-icon" />
    <title>Cast of Dr. Dolittle movie | Charlie Cinema in London</title>
</head>

<body id="cast" class="cast_start">
    
    <? include('includes/nav.inc.php');?>
    
    <!--secondary nav-->
    <nav>
        <ul>
            <li><a href="#animal">Animals</a></li>
            <li><a href="#human">Humans</a></li>
        </ul>
    </nav>
    <!--END secondary nav-->
    
    <main>
        
        <!--Fold 1-->
        <div id=animal>
            
            <!--I love you dog-->
            <div class="love"></div>
            <!--I love you dog-->
           
            <!--text-->
            <h1>I love you dog</h1>
            <p>I Love You Dog : [John pulls up alongside another car; the huge, sad looking dog in its passenger-seat looks over at him]
            <br/>    
            ... I LOVE YOU. 
            <br/>
            <br/>
            VOICE: Royce D Applegate</p>
            <!--text-->
            
        </div>
        <!--END Fold 1-->
        
         <!--Fold 2-->
        <div>
            
            <!--Lucky-->
            <div class="lucky"></div>
            <!--Lucky-->
            
            <!--text-->
            <h1>Lucky</h1>
            <p>Dr. John Dolittle : How come I can hear you talking?
            <br/>
            <br/>
            Lucky : I dunno. Maybe you're just weird or something.
            <br/>
            <br/>
            VOICE: Norm MacDonald</p>
            <!--text-->
            
        </div>
        <!--END Fold 2-->
        
        <!--Fold 3-->
        <div>
            
            <!--Pig-->
            <div class="pig"></div>
            <!--Pig-->
            
            <!--text-->
            <h1>Pig</h1>
            <p>Penguin : Oh, my God. What a zoo.
            <br/>
            <br/>
            Pig : Hmm, obviously not a kosher establishment.
            <br/>
            <br/>
            VOICE: Hamilton Camp</p>
            <!--text-->
            
        </div>
        <!--END Fold 3-->
        
          <!--Fold 4-->
        <div>
            
            <!--Rodney-->
            <div class="rodney"></div>
            <!--Rodney-->
            
            <!--text-->
            <h1>Rodney</h1>
            <p>Rodney: [on telephone] Hey, honey, feeling better?
            <br/>
            <br/>
            Dr. John Dolittle: Who's this?
            <br/>
            <br/>
            Rodney: I'll give you a hint: I'm cute, I'm furry, and I make five hundred babies a year!
            <br/>
            <br/>
            VOICE:  Chris Rock</p>
            <!--text-->
            
        </div>
        <!--END Fold 4-->
        
           <!--Fold 5-->
        <div>
            
            <!--Jacob-->
            <div class="tiger"></div>
            <!--Jacob-->
            
            <!--text-->
            <h1>Jacob</h1>
            <p>Lucky : Stop looking at me like I'm a side dish.
            <br/>
            <br/>
            Tiger : Don't flatter yourself.
            <br/>
            <br/>
            VOICE: Albert Brooks</p>
            <!--text-->
            
        </div>
        <!--END Fold 5-->
        
          <!--Fold 6-->
        <div id="human">
            
            <!--Dr John Dolittle-->
            <div class="murphy"></div>
            <!--Dr John Dolittle-->
            
            <!--text-->
            <h1>Dr. John Dolittle</h1>
            <p>Dr. John Dolittle : ...Your daughter's turning into a little wise-ass.
            <br/>
            <br/>
            Lisa Dolittle : Worse. She's turning into a little YOU.
            <br/>
            <br/>
            ACTOR: Eddie Murphy</p>
            <!--text-->
            
        </div>
        <!--END Fold 6-->
        
        <!--Fold 7-->
        <div>
            
            <!--Lisa Dolittle-->
            <div class="wilson"></div>
            <!--Lisa Dolittle-->
            
            
            <!--text-->
            <h1>Lisa Dolittle</h1>
            <p>[John is about to operate on the Tiger]
            <br/>
            <br/>
            Lisa Dolittle : John... what did he say?
            <br/>
            <br/>
            Dr. John Dolittle : He said he's afraid.
            <br/>
            <br/>
            ACTOR: Kristen Wilson</p>
            <!--text-->
            
        </div>
        <!--END Fold 7-->
        
    </main>

    <? include ('includes/footer.inc.php'); ?>
 
<!--   jQuery  single page  -->
   
<script>
   
  $(document).ready(function(){       
        var scroll_pos = 0;
        var dev_width = 0;    
        dev_width = $(document).width();
    
        $(document).scroll(function() { 
            scroll_pos = $(this).scrollTop();
           
            if (dev_width < 768){
                
                if(scroll_pos <= 540) {
                    $("#cast").removeClass().addClass("blue_dog");
                } else if(scroll_pos > 540 && scroll_pos <= 1200){
                    $("#cast").removeClass().addClass("green");
                } else if(scroll_pos >1200 && scroll_pos <= 1860){
                    $("#cast").removeClass().addClass("blue_pig");
                } else if(scroll_pos > 1860 && scroll_pos <= 2520){
                    $("#cast").removeClass().addClass("purple");
                } else if(scroll_pos > 2520 && scroll_pos <= 3180) {
                    $("#cast").removeClass().addClass("dark");
                } else if(scroll_pos > 3180 && scroll_pos <= 3840) {
                    $("#cast").removeClass().addClass("orange");
                } else {
                    $("#cast").removeClass().addClass("yellow");
                }
                
             } else if (dev_width >= 768 && dev_width < 1010 ){
                 
                 if(scroll_pos <= 300) {
                    $("#cast").removeClass().addClass("blue_dog");
                } else if(scroll_pos > 300 && scroll_pos <= 700){
                    $("#cast").removeClass().addClass("green");
                } else if(scroll_pos >700 && scroll_pos <= 1100){
                    $("#cast").removeClass().addClass("blue_pig");
                } else if(scroll_pos > 1100 && scroll_pos <= 1500){
                    $("#cast").removeClass().addClass("purple");
                } else if(scroll_pos > 1500 && scroll_pos <= 1900) {
                    $("#cast").removeClass().addClass("dark");
                } else if(scroll_pos > 1900 && scroll_pos <= 2300) {
                    $("#cast").removeClass().addClass("orange");
                } else {
                    $("#cast").removeClass().addClass("yellow");
                }
                 
            } else {
                
                if(scroll_pos <= 400) {
                    $("#cast").removeClass().addClass("blue_dog");
                } else if(scroll_pos > 400 && scroll_pos <= 900){
                    $("#cast").removeClass().addClass("green");
                } else if(scroll_pos >900 && scroll_pos <= 1600){
                    $("#cast").removeClass().addClass("blue_pig");
                } else if(scroll_pos > 1600 && scroll_pos <= 2200){
                    $("#cast").removeClass().addClass("purple");
                } else if(scroll_pos > 2200 && scroll_pos <= 2900) {
                    $("#cast").removeClass().addClass("dark");
                } else if(scroll_pos > 2900 && scroll_pos <= 3400) {
                    $("#cast").removeClass().addClass("orange");
                } else {
                    $("#cast").removeClass().addClass("yellow");
                }
                
            }
        });
    });
    
    
</script>
<!--   END jQuery single page -->
    
    </body>
</html>