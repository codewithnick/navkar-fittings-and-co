<?php include("adminhead.php");?>
<?php
if(isset($_POST["submit"])){
    
    if(isset($_POST["username"])){
        $temp=$_POST["username"];
        $sql="Update admin set username= '$temp' ";
        $result=mysqli_query($conn,$sql);
    }    
    if(isset($_POST["email"])){
        $temp=$_POST["email"];
        $sql="Update admin set email= '$temp' ";
        $result=mysqli_query($conn,$sql);
    }    
    if(isset($_POST["password"])){
        $temp=$_POST["password"];
        $sql="Update admin set password= '$temp' ";
        $result=mysqli_query($conn,$sql);
    }    
}
?>

        <?php
            $sql="select * from admin";
            $result=mysqli_query($conn,$sql);
            while($rows=mysqli_fetch_array($result)){?>
        <div class="adminright flex flex-col">

            <form class="card form " method="POST" action="">
                <table>
                    <tbody>
                        <form class="card form " method="POST" action="">
                            <table>
                                <tbody>

                                    <tr>
                                        <td>username</td>
                                        <td>
                                            <input type="text" name="username" id="username"
                                                value="<?php echo $rows['username']?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td>
                                            <input type="email" name="email" id="email"
                                                value="<?php echo $rows['email']?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>password</td>
                                        <td>
                                            <input type="password" name="password" id="password"
                                                value="<?php echo $rows['password']?>" />
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
                    </tbody>
                </table>

            </form>
            <?php
            }
            ?>
        </div>
</body>

</html>