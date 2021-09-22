<?php require("head.php"); ?>
<?php require("connection.php"); ?>
<?php 
if(isset($_POST["submit"]))
{
    $sql="select max(cid) from customer";
        $result=mysqli_query($conn,$sql);
        $mrow=mysqli_fetch_array($result);
        $mrow=$mrow["max(cid)"]+1;
    
        $name=$_POST["uname"];     
        $email=$_POST["email"];        
        $pass=$_POST["pass"];
        $subject="Registration Sucessfull";
        $message="<h1>Welcome $name</h1><br>
        <h2> Navkar Fittings and co</h2><br>
        <br>your registration has been recorded<br>
        Your username is $name<br>
        Your password is $pass<br>
        You can use these credentials to login and request for your products,<br>
        Do not share these credentails with anyone
        we will get in contact with you soon<br>
        <h4> Thanks again</h1>
        ";
        $sql="insert into customer values($mrow,'$name','$email','$pass')";
        mysqli_query($conn,$sql);
        echo" registered ";
        echo " sending mail ";

        sendamail($email,$subject,$message);
        Redirect("index.php?redirect=registered");
}

?>

<div class="flex flex-center ">
    <form class="card form " method="POST" action="">
        <table>
            <tbody>
                <tr >
                    <td >Registeration Form </td>
                </tr>
                <tr>
                    <td>Enter Your Name</td>
                    <td><input type="text" name="uname" id="uname"></td>
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
    </form>
</div>