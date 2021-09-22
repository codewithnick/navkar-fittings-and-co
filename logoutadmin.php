
<?php
require("adminhead.php");
if (isset($_SESSION["name"])){
    session_destroy();
    Redirect("adminlogin.php");
}
?>