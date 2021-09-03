<?php include("header.php"); ?>
<?php
    include 'connection.php';
    $sql="SELECT * FROM contactus";
    $result=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($result)){?>
            <div >
                <div class="card contactus-card">
                    <div class="flex flex-col">
                        <div class="contactus-title">Office </div>
                        <div class="contact flex">
                            <div class="contactleft text-left">Address</div>
                            <div class="contactright text-left"><?php echo $rows['office_add']?></div>
                        </div>
                        <div class="contact flex">
                            <div class="contactleft text-left">phone no</div>
                            <div class="contactright text-left"><?php echo $rows['phnochar']?></div>
                        </div>
                        <div class="contactus-title">Factory </div>
                        <div class="contact flex">
                            <div class="contactleft text-left">Address</div>
                            <div class="contactright text-left"><?php echo $rows['factory_add']?></div>
                        </div>
                        <div class="contactus-title">Email</div>
                        <div class="contact flex">
                            <div class="contactleft text-left">salesemail</div>
                            <div class="contactright text-left"><?php echo $rows['salesemail']?></div>
                        </div>
                        <div class="contact flex">
                            <div class="contactleft text-left">helpdesk</div>
                            <div class="contactright text-left"><?php echo $rows['helpdeskemail']?></div>
                        </div>
                    </div>
                </div>

            </div>
    <?php
    }?>

<?php include("footer.php"); ?>