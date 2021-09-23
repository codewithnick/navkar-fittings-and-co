<?php require("head.php"); ?>
<?php
if(isset($_POST["submit"]))
{
    $password=$_POST['pass'];
    //$uname=$_POST['uname'];
    $email=$_POST['email'];         
    $sql="SELECT username FROM admin where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    session_start();
    if(mysqli_num_rows($result)==1){
        $_SESSION["name"] = $rows["username"];
        ?>
    <?php
    Redirect("admin.php");
    }
}
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
                    <td><input type="email" name="email" id="email" required /></td>
                </tr>
                <tr>
                    <td>Enter Your Pass</td>
                    <td><input type="password" name="pass" id="pass" required /></td>
                </tr>
                <tr>
                    <td>Submit</td>
                    <td>
                        
                        <input type="submit" name="submit" id="submit">
                    </td>
                </tr>
                
            </tbody>
            
        </table>
    </form>
</div>