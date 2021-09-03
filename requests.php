<?php include("header.php"); ?>
<?php include("connection.php"); ?>
<?php
    if(!verifysession()){
        Redirect("login.php");
    }
?>
<div style="height:fit-content;">
    <div>
        <div class="sizefull flex flex-center flex-col ">

        <?php
                $cid=$_SESSION["cid"];
                $sql="SELECT * FROM request where cid=$cid";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($result)){?>
                <!--start here -->
                   
                    <div class="card request-card flex flex-center ">
                        <div class="sizefull request flex flex-col ">
                            <div class="request-number text-left">
                                request id <?php echo $rows['rid']?>
                            </div>
                            <div class="request-date text-left">
                                <?php echo $rows['order_date']?>
                            </div>
                            <div class="request-note text-left">
                                <?php echo $rows['note']?>
                            </div>
                            <div class="text-right">
                                <a href="./request.php"> Close Request...</a>
                            </div>
                        </div>
                    </div>
                <!--end here -->
            <?php
                }?>
            
        </div>
    </div>
</div>

<?php include("footer.php"); ?>