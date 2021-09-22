<?php include("adminhead.php");
?>
<div class="adminright flex flex-col flex-center">    
    <?php
        echo $_GET["pid"];
        $sql="DELETE FROM product where pid=".$_GET["pid"];
        $result=mysqli_query($conn,$sql);
        $sql="DELETE FROM request where pid=".$_GET["pid"];
        $result=mysqli_query($conn,$sql);
        Redirect("viewproducts.php");
    ?>
</div>
</body>

</html>