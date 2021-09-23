<?php
session_start();
?>
<?php require("head.php"); ?>

<body>
    <header>

        <nav class="flex flex-spacearound">
            <ul class="flex flex-spacearound widthfull" >
                <li>
                    <img src="./img/Logo.png" hieght="50px" width="50px">
                </li>
                <li>
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
                <li> <a href="./index.php"> Home </a></li>
                <li> <a href="./aboutus.php"> About Us </a> </li>
                <li> <a href="./products.php"> Products </a> </li>
                <li> <a href="./requests.php"> Requests </a> </li>
                <li> <a href="./contactus.php"> Contact us </a> </li>
                <li> <a href="./login.php">
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