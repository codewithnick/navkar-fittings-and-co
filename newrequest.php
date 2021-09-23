<?php include("header.php"); ?>
<?php include("connection.php"); ?>
<?php
if(isset($_POST["submit"])){
    $sql="select max(rid) from request";
    $result=mysqli_query($conn,$sql);
    $mrow=mysqli_fetch_array($result);
    $mrow=$mrow["max(rid)"]+1;
    $pid=$_POST["pid"];     
    $cid=$_SESSION["cid"];     
    $size=$_POST["size"];     
    $desc=$_POST["note"];        
    $mat=$_POST["material"];
    $date=date("Y-m-d");
    echo "Today is " . $date . "<br>";
    $sql="insert into request values($mrow,$pid,$cid,'$size','$mat','$date','$desc')";
    mysqli_query($conn,$sql);
    $sql="select email from customer where cid=$cid";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $email=$row[0];
    $subject="Thank You For Your Request";
    $message="<h1>Your order has been noted</h1><br>
    Your Request Id is $mrow<br>
    Your Requested Product Id is $pid<br>
    Your Requested Size is $size<br>
    Your Requested material is $mat<br><br>
    Request Dated:$date<br>
    This is an automated message<br>
    Our team will get in contact with you soon
    ";
    sendamail($email,$subject,$message);
    Redirect("product.php?pid=$pid&redirect=requestsuccess");
}   
?>