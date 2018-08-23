<!--Navigation-->
    <nav>
        
            <!--logo-->
            <img src="assets/logo.svg" alt="Charlie Cinema" >
            <!--END logo-->
    
            <!--hamburger-->
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <!--END hamburger-->
        
        
    <ul>
            <?php
    
            if ($this_page == "homepage") { 
                echo "<li>Home<img src=\"assets/foot_one%20.svg\" alt=\"#\"></li>";
            }else {
                echo "<li><a href=\"index.php\">Home<img src=\"assets/foot_one%20.svg\" alt=\"#\"></a></li>";
            }
            ?>

            <li><a href="index.php#about">About<img src="assets/foot_two.svg" alt="#"></a> </li>
        
            <?php
            if ($this_page == "cast"){
                echo "<li>Cast<img src=\"assets/foot_three.svg\" alt=\"#\"></li>";  
            }else{
                echo "<li><a href=\"cast.php\">Cast<img src=\"assets/foot_three.svg\" alt=\"#\"></a></li>";
            }
            
            if ($this_page == "tickets"){
                echo "<li>Tickets<img src=\"assets/foot_four.svg\" alt=\"#\"></li>";
            }else{
                echo"<li><a href=\"tickets.php\">Tickets<img src=\"assets/foot_four.svg\" alt=\"#\"></a></li>";
            }
            ?>
        
    </ul>
    </nav> 
    <!--END navigation-->
