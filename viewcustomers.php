<?php include("adminhead.php");
?>
        <div class="adminright flex flex-col flex-center">
            <div class="sizefull widthfull flex flex-center">
                <table class="customerview">
                    <tr>
                        <th>
                                Id
                        </th>
                        <th>
                                Name
                        </th>
                        <th>
                                Email
                        </th>
                        <th>
                                Delete
                        </th>
                    </tr>
                    
                    <?php
                    
                $sql="SELECT * FROM customer";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($result)){?>
                <tr>
                        <td>
                        <?php echo $rows['cid']?>
                        </td>
                        <td>
                        <?php echo $rows['name']?>
                        </td>
                        <td>
                        <?php echo $rows['email']?>
                        </td>
                        <td>
                            <a class="errortext" href="delcust.php?cid=<?php echo $rows['cid']?>">Delete</a>
                        </td>
                        </tr>
                        <?php
                }?>
                    
                </table>
            </div>
        </div>
</body>

</html>