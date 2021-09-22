<?php include("adminhead.php");
?>
<div class="adminright flex flex-col flex-center">    
    <?php
        echo $_GET["cid"];
        $sql="DELETE FROM customer where cid=".$_GET["cid"];
        $result=mysqli_query($conn,$sql);
        $sql="DELETE FROM request where cid=".$_GET["cid"];
        $result=mysqli_query($conn,$sql);
        Redirect("viewcustomers.php");
    ?>
</div>
</body>

</html>