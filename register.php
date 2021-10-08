<?php session_start();?>
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
        $tel=$_POST["tel"];      
        $pass=$_POST["pass"];
        $subject="Registration Sucessfull";
        $message="<h1>Welcome $name</h1><br>
        <h2> Navkar Fittings and co</h2><br>
        <br>your registration has been recorded<br>
        Your username is $name<br>
        Your password is $pass<br>
        Your phone number is $tel<br>
        You can use these credentials to login and request for your products,<br>
        Do not share these credentails with anyone
        we will get in contact with you soon<br>
        <h4> Thanks again</h1>
        ";
        $subjectadmin="New customer";
        $messageadmin="<h1>you have new cutomer named $name</h1><br>
        customer phone number is $tel<br>
        customer email is $email<br>
        ";
        $error="";
        if(strlen($name)>15){
            $error.="<br> name should be less than 15 characters<br>"    ;
        }
        if(strlen($pass)>10){
            $error.="<br> password should be less than 10 characters<br>"  ;  
        }
        if(strlen($tel)>10){
            $error.="<br> tel should be less than 10 characters<br>" ;   
        }
        $sql="select cid from customer where email='$email'";
        $r=mysqli_query($conn,$sql);
        if(mysqli_num_rows($r)){
            $error.="<br> Email already registered<br>" ;   
        }
        if($error==""){
            $sql="insert into customer values($mrow,'$name','$email','$tel','$pass')";
            if(mysqli_query($conn,$sql)){
                echo" registered ";
                echo " sending mail ";
                
                sendamail($email,$subject,$message);
                //sendamail($email,$subjectadmin,$messageadmin);
                $_SESSION["cid"] = "$mrow";
                Redirect("index.php?redirect=registered");
            }else{
                echo $conn->error;
                echo "sorry some problem occured while processing request";
            }
        }
        else{    
            //$sql="";
            echo "<div class='errortext widthfull text-center'>You Have Entered Wrong Information<br> $error</div>";
        }
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
                    <td><input type="text" name="uname" id="uname" required /></td>
                </tr>
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email" id="email" required /></td>
                </tr>
                <tr>
                    <td>Enter Your Phone no</td>
                    <td><input type="tel" name="tel" id="tel" required /></td>
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