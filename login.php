<?php require("header.php"); ?>
<?php include("connection.php"); ?>
<?php
    if(!verifysession()){
        //not logged in
    ?>
<div class="flex flex-center ">
    
    <form class="card form " method="POST" action="">
        <table>
            <tbody>
                <tr >
                    <td >Login Form </td>
                </tr>
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Enter Your Pass</td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                    <td>Submit</td>
                    <td>
                        
                        <input type="submit" name="submit" id="submit">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-center">
            <div >
                New here ??, you might want to 
                <a href="register.php">register first</a>
            </div>
        </div>
    </form>

</div>
<?php
}
else{
    ?>

    <?php
    //logged in
    if (isset($_SESSION["cid"])){
        session_destroy();
        Redirect("login.php");
    }
}
?>

<?php
if(isset($_POST["submit"]))
{
    $password=$_POST['pass'];
    $email=$_POST['email'];         
    $sql="SELECT cid FROM customer where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1){
        $_SESSION["cid"] = $rows["cid"];
        
        ?>
    <?php
    Redirect("index.php");
    }
}
?>
