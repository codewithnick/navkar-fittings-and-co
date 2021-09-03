<?php
function verifysession(){

        if(isset($_SESSION["cid"]))
        {       
            return true;
        }
        else{
            return false;
        }
}
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
?>
