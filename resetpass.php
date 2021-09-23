<?php require("head.php"); ?>
<?php require("connection.php"); ?>
<?php 
if(isset($_POST["confirm"]))
{
    $email=$_POST["email"];
    $sql="select password from customer where email='$email'";
    $result=mysqli_query($conn,$sql);
    $mrow=mysqli_fetch_array($result);
    $pass=$mrow[0];
    $subject="Forgot password";
    $message="<h1> Trying to log in </h1><br>
    you have requested for your password <br>
    your password is : $pass

    If you did not request for this,<br>
    please ignore the message
    "     ;
    sendamail($email,$subject,$message);

?>
<script>
    window.alert("Your password has been mailed to you");
</script>
<?php
}
?>

<div class="flex flex-center ">
    <form class="card form " method="POST" action="">
        <table>
            <tbody>
                <tr >
                    <th >Reset Your Password </th>
                </tr>
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                
                <tr>
                    <td>confirm</td>
                    <td>
                        <input type="submit" name="confirm" id="confirm" value="confirm">
                    </td>
                </tr>
                <tr>
                    <td class="errortext">We will mail you your password</td>
                </tr>
                <tr>
                    <td class="errortext">If you have lost your mail id contact our team directly</td>
                </tr>
            </tbody>
            
        </table>
    </form>
</div>