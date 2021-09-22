<?php include("adminhead.php");?>
<?php
if(isset($_POST["submit"])){
    
    if(isset($_POST["office_add"])){
        $temp=$_POST["office_add"];
        $sql="Update contactus set office_add= '$temp' ";
        $result=mysqli_query($conn,$sql);
    }    
    if(isset($_POST["phnochar"])){
        $temp=$_POST["phnochar"];
        $sql="Update contactus set phnochar= '$temp' ";
        $result=mysqli_query($conn,$sql);
    }
    if(isset($_POST["factory_add"])){
        $temp=$_POST["factory_add"];
        $sql="Update contactus set factory_add= '$temp' ";
        $result=mysqli_query($conn,$sql);
    } 
    if(isset($_POST["salesemail"])){
        $temp=$_POST["salesemail"];
        $sql="Update contactus set salesemail= '$temp' ";
        $result=mysqli_query($conn,$sql);
    } 
    if(isset($_POST["helpdeskemail"])){
        $temp=$_POST["helpdeskemail"];
        $sql="Update contactus set helpdeskemail= '$temp' ";
        $result=mysqli_query($conn,$sql);
    } 
    Redirect("contactusadmin.php");
}
?>

    <?php
    $sql="select * from contactus";
    $result=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($result)){?>

   
        <div class="adminright flex flex-col flex-center">
            <div>
            <form class="card contact-card " method="POST" action="">
                <table >
                    <tbody>
                        <tr>
                            <td> Office </td>
                        </tr>
                        <tr>
                            <td>address</td>
                            <td>
                                <textarea name="office_add" id="" cols="30" rows="5">
                                    <?php echo $rows['office_add']?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone No</td>
                            <td>
                                <input type="tel" name="phnochar" id="phnochar"
                                    value="<?php echo $rows['phnochar']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Update" name="submit" id="submit">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form class="card contact-card" method="POST" action="">
                <table>
                    <tbody>
                        <tr>
                            <td> Factory</td>
                        </tr>
                        <tr>
                            <td>address</td>
                            <td>
                                <textarea name="factory_add" id="" cols="30" rows="5">
                                    <?php echo $rows['factory_add']?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Update" name="submit" id="submit">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form class="card contact-card" method="POST" action="">
                <table>
                    <tbody>
                        <tr>
                            <td>Emails</td>
                        </tr>
                        <tr>
                            <td>salesemail</td>
                            <td>
                                <input type="email" name="salesemail" id="salesemail"
                                    value="<?php echo $rows['salesemail']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>helpdeskemail</td>
                            <td>
                                <input type="email" name="helpdeskemail" id="helpdeskemail"
                                    value="<?php echo $rows['helpdeskemail']?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Update" name="submit" id="submit">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        </div>

        <?php
    }
?>
        

</body>

</html>