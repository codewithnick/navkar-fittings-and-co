<?php include("adminhead.php");
?>
        <div class="adminright flex flex-col flex-center">
            <div class="sizefull">
            <?php
                $sql="SELECT * FROM request ";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_array($result)){?>
                <!--start here -->
                   
                    <div class="card request-card flex flex-center ">
                        <div class="sizefull request flex flex-col ">
                           
                            <div class="request-number text-left">
                                request id #<?php echo $rows['rid']?>
                            </div>
                            <div class="flex flex-col flex-center textgrey">
                                <div>
                                    <?php
                                        $mysql="select name from product where pid=1";
                                        $res=mysqli_query($conn,$mysql);
                                        $pname=mysqli_fetch_array($res)[0];
                                        
                                    ?>
                                    Product Name: <?php echo $pname;?>    
                                </div>
                           
                                Customer id #<?php echo $rows['cid']?><br>
                                Date<?php echo $rows['order_date']?>
                            </div>
                            <div class="request-note text-left">
                                <?php echo $rows['note']?>
                            </div>
                            <div class="text-right">
                                <a class="errortext" href="./delrequestadmin.php?rid=<?php echo $rows['rid']?>"> Close Request...</a>
                            </div>
                        </div>
                    </div>
                <!--end here -->
            <?php
                }?>
            </div>
        </div>
</body>

</html>