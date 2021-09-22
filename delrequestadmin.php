<?php include("head.php");
?>
<div class="adminright flex flex-col flex-center">    
    <?php
        if( !verifysessionadmin()){
        echo $_GET["rid"];
        $sql="DELETE FROM request where rid=".$_GET["rid"];
        $result=mysqli_query($conn,$sql);
        Redirect("viewrequests.php");
        }
        
    ?>
</div>
</body>

</html>