<?php include("adminhead.php");?>
<?php
if(isset($_POST["submit"])){
        $sql="select max(pid) from product";
        $result=mysqli_query($conn,$sql);
        $mrow=mysqli_fetch_array($result);
        $mrow=$mrow["max(pid)"]+1;
    
        $name=$_POST["name"];     
        $desc=$_POST["description"];        
        $mat=$_POST["material"];
        $cat=$_POST["category"];
        $img=$_FILES['img'];
        $fname="./img/".$_FILES['img']['name'];
        $sql="insert into product values($mrow,'$name','$cat','$desc','$mat','$fname','')";
        mysqli_query($conn,$sql);
        move_uploaded_file($img['tmp_name'],$fname);
        Redirect("viewproducts.php");
    }   
?>
<?php
if(isset($_POST["update"])){
       $pid=$_POST["pid"];
        $name=$_POST["name"];     
        $desc=$_POST["description"];        
        $mat=$_POST["material"];
        $img=$_FILES['img'];
        $fname="./img/".$_FILES['img']['name'];
        $sql="update product set name='$name',description='$desc',material='$mat',img='$fname',chart='' where pid='$pid'";
        mysqli_query($conn,$sql);
        move_uploaded_file($img['tmp_name'],$fname);
    }   
?>
<?php
if(isset($_GET["pid"])){
    $sql="select * from product where pid=".$_GET["pid"];
    $result=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($result)){?>
<div class="adminright flex flex-col">
            <form method="post" action="" class="form card" enctype="multipart/form-data">
            <table>
                    <tbody>
                    <tr>
                            <td>Product ID</td>
                            <td>
                                <input type="text" name="pid" id="pid" value=<?php echo $rows['pid']?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Product name</td>
                            <td>
                                <input type="text" name="name" id="name" value=<?php echo $rows['name']?>>
                            </td>
                        </tr>
                        <tr>
                            <td>description</td>
                            <td>
                                <textarea name="description" id="" cols="16" rows="5">
                                    <?php echo $rows['description']?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Product material</td>
                            <td>
                                <input type="text"name="material" id="material" value=<?php echo $rows['material']?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                
                                <input type="file" name="img" id="img" accept=".jpg,.jpeg,.png" >
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                            <div>curr file: <?php echo $rows['img']?></div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Update" name="update" id="update">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </form>
        </div>
        <?php
            }
        ?>
    <?php
}
else{
?>

        <div class="adminright flex flex-col">
            <form method="post" action="" class="form card" enctype="multipart/form-data">
            <table>
                    <tbody>
                        
                        <tr>
                            <td>Product name</td>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <td>description</td>
                            <td>
                                <textarea name="description" id="" cols="16" rows="5">
                                    
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>category</td>
                            <td>
                                <input type="text"name="category" id="category">
                            </td>
                        </tr>
                        <tr>
                            <td>Product material</td>
                            <td>
                                <input type="text"name="material" id="material">
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                <input type="file" name="img" id="img" accept=".jpg,.jpeg,.png" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="submit" name="submit" id="submit">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </form>
        </div>
    
<?php
}
?>
</div>
</body>

</html>