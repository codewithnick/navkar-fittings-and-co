<?php include("header.php"); ?>
<?php include("connection.php"); ?>
<?php
    if(!verifysession()){
        //Redirect("login.php");
    }
?>
<div class="sizefull " >
    <div class="sizefull">
        <div class="sizefull flex flex-col request-container">

        <?php
            if(!verifysession()){
                
                ?>
                <div class="text-center sizefull">
                    You need to <a class="linktext" href="login.php">login</a>  to view this page
                </div>
                <?php
            }
            else{
                $cid=$_SESSION["cid"];
                $sql="SELECT * FROM request where cid=$cid ORDER BY rid Desc";
                $result=mysqli_query($conn,$sql);
                
                while($rows=mysqli_fetch_array($result)){?>
                <!--start here -->
                   
                    <div class="card request-card flex flex-center ">
                        <div class="sizefull request flex flex-col ">
                            <div class="request-number text-center">
                                request id <?php echo $rows['rid']?>
                            </div>
                            <div class="flex flex-col flex-center">
                                <div>
                                    <?php
                                        $pid=$rows["pid"];
                                        $mysql="select name from product where pid=$pid";
                                        $res=mysqli_query($conn,$mysql);
                                        $pname=mysqli_fetch_array($res)[0];
                                        
                                    ?>
                                    Product Name: <?php echo $pname;?>
                                    
                                </div>
                                <div class="flex flex-spacearound text-left widthfull request-content">
                                <div>Size: <?php echo $rows['size']?></div>
                                <div>Material: <?php echo $rows['material']?></div>                           
                                </div>
                            </div>
                            <div class="request-date text-left textgrey">
                                Date:   <?php echo $rows['order_date']?>
                            </div>
                            
                            <div class="request-note text-left textgrey">
                                <?php echo $rows['note']?>
                            </div>
                            <div class="text-right">
                                <a class="errortext" href="./delrequest.php?rid=<?php echo $rows['rid']?>"> Close Request...</a>
                            </div>
                        </div>
                    </div>
                <!--end here -->
            <?php
                }
                }?>
            
        </div>
    </div>
</div>

<?php include("footer.php"); ?>