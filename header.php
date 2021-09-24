<?php
session_start();
?>
<?php require("head.php"); ?>

<body>
    <header>

        <nav class="flex flex-spacearound">
            <ul class="flex flex-spacearound widthfull " id="collapseul">
                <li class="inactive">
                    <div id="collapse" class="collapse">
                        <img src="https://img.icons8.com/material-outlined/24/ffffff/menu--v1.png"/>
                    </div>
                </li>
                <li class="nilactive">
                    <img src="./img/Logo.png" hieght="50px" width="50px">
                </li>
                <li class="nilactive">
                    <div>
                        <?php
                            
                            if(verifysession()){   
                            $sql="SELECT name FROM customer where cid=".$_SESSION['cid'];
                            $result=mysqli_query($conn,$sql);
                            while($rows=mysqli_fetch_array($result)){
                                ?>Welcome <?php echo $rows[0];?>
                                    <?php
                            }
                            }
                            else{
                            ?>

                                    Navkar Fittings Corporation
                                    <?php
                        }
                        ?>
                    </div>
                </li>
                <li class="active"> <a href="./index.php"> Home </a></li>
                <li class="active"> <a href="./aboutus.php"> About Us </a> </li>
                <li class="active"> <a href="./products.php"> Products </a> </li>
                <li class="active"> <a href="./requests.php"> Requests </a> </li>
                <li class="active"> <a href="./contactus.php"> Contact us </a> </li>
                <li class="active"> <a href="./login.php">
                        <?php
                    
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