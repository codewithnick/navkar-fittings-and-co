<?php include("header.php"); ?>
<?php include("connection.php"); ?>
<div style="height:fit-content;">
    <div>
        <div class="sizefull flex flex-center flex-col ">
            <?php
                $sql="SELECT * FROM product";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($result)){?>
                <!--start here -->
                    <div class="card product-card flex flex-spacearound">
                        <img src="./img/bg.jpg" class="product-img">
                        <div class="sizefull product flex flex-col ">
                            <div class="product-title text-left">
                                <?php echo $rows['name']?>
                            </div>
                            <div class="product-material text-left">
                                <?php echo $rows['material']?>
                            </div>
                            <div class="product-desc text-left">
                                <?php echo $rows['description']?>
                            </div>
                            <div class="text-right">
                                <a href="./product.php"> View More...</a>
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