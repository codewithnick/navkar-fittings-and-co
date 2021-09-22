<?php include("adminhead.php");
?>
        <div class="adminright flex flex-col flex-center">
            <div class="sizefull">
        <?php
            $sql="select * from product";
            $result=mysqli_query($conn,$sql);
            while($rows=mysqli_fetch_array($result)){?>
        
                
            <div class="card product-card flex flex-spacearound">
                        <img src="<?php echo $rows['img'];?>" class="product-img">
                        <div class="sizefull product flex flex-col ">
                            <div class="product-title text-left">
                                <?php echo $rows['name']?>
                            </div>
                            <div class="text-left textgrey">
                                <?php echo $rows['category']?>
                            </div>
                            <div class="product-material text-left textgrey ">
                                <?php echo $rows['material']?>
                            </div>
                            <div class="product-desc text-left textgrey">
                                <?php echo $rows['description']?>
                            </div>
                            <div class="flex flex-spacearound">
                                <div class="text-left">
                                    <a class="linktext" href="./addproduct.php?pid=<?php echo $rows['pid']?>"> Edit Product</a>
                                </div>
                                <div class="text-right">
                                    <a class="errortext" href="./delproduct.php?pid=<?php echo $rows['pid']?>"> Delete </a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
            <?php
            }
            ?>
            </div>
        </div>
</body>

</html>