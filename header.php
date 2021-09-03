<?php require("head.php"); ?>
<body>
    <header>
        
        <nav class="flex flex-spacearound">
            <div>
                logo here
            </div>
            <div>
               Navkar Fittings and Co
            </div>
            
            <ul class= "flex flex-spacearound" style="width:70%;">
                <li> <a href="./index.php"> Home  </a></li>
                <li> <a href="./aboutus.php"> About Us </a> </li>
                <li> <a href="./products.php"> Products </a> </li>
                <li> <a href="./requests.php"> Requests </a> </li>
                <li> <a href="./contactus.php"> Contact us </a> </li>
                <li> <a href="./login.php"> 
                    <?php
                    session_start();
                    if(!verifysession()){
                        echo "Login";
                    }
                    else
                        {echo "Logout";}
                    ?>
                </a> </li>
            </ul>
        </nav>
    </header>