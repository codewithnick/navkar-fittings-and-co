<?php include("header.php"); ?>
<?php include("connection.php"); ?>

<div class="sizefull flex product-container scrolly">
<?php
                $pid=$_GET['pid'];
                $sql="SELECT * FROM product where pid=$pid";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($result)){?>
            
                
                <div class="sizefull product flex flex-col " >
                    <div>
                        <img alt="Product Image Unavailable" src="<?php echo $rows['img'];?>" class="product-img"> 
                    </div>
                    <div class="product-title text-center">
                        Title: <?php echo $rows['name'];?>
                    </div>
                    <div class="product-material text-center">
                        Material: <?php echo $rows['material']?>
                    </div>
                    <div class="text-center">
                        Category: <?php echo $rows['category']?>
                    </div>
                    <div class="product-title text-left">
                        Description
                    </div>
                    <div class="text-left">
                        <?php echo $rows['description']?>
                        
                    </div>
                    <div>
                        <!-- <img alt="chart unavailable" src="
                        <?php// echo $rows['chart'];
                        ?>
                        " >  -->
                    </div>
                </div>
                <div class="flex sizefull product-right" >
                        
                        <form action="newrequest.php" method="post" class="widthfull">
                            <input type="hidden" name="pid" value="<?php echo $rows['pid'];?>">
                            <table class="widthfull">
                                <tr>
                                    <th>Custom Request</th>
                                </tr>
                                <?php
                                if(!verifysession()){
                                    ?>
                                    <tr>
                                        <td>
                                        You need to <a class="linktext" href="login.php">login</a> to Send custom requests
                                        </td>
                                    </tr>
                                    <?php
                                }else{
                                ?>
                                <tr>
                                    <td>Size</td>
                                    <td><input type="text" name="size" id="size" ></td>
                                </tr>
                                <tr>
                                    <td>material</td>
                                    <td><input type="text" name="material" id="material" placeholder="<?php echo $rows['material'];?>"></td>
                                </tr>
                                <tr>
                                    <td>Note (optional)</td>
                                    <td>
                                        <textarea name="note" id="note"  cols="16" rows="5"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Send Request">
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </form>
                        
                    </div>      
            <?php
                }?>
</div>
<?php
if(isset($_GET["redirect"])){ 
    if($_GET["redirect"] == "requestsuccess"){
    ?>
    <script>
        window.alert("Your request has been noted ,we will get in contact with you soon");
    </script>
    <?php
    }
}
?>

<?php include("footer.php"); ?>