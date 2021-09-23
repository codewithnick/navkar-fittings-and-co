<?php
session_start();
?>
<?php require("head.php"); ?>
<?php require("connection.php"); ?>
<body>
    <div class="card admin-card flex ">
        <div class="adminleft flex flex-col flex-center">
            <div class="admin"></div>
            <div class="admin-name">
            <?php
                
                if(verifysessionadmin()){   
                    ?>Welcome <?php echo $_SESSION["name"];?>
                    <?php
            }
            else{
                Redirect("adminlogin.php");
            }
                ?>
            </div>
            <?php include("tabs.php"); ?>
        </div>