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
function verifysessionadmin(){
    if(isset($_SESSION["name"]))
    {       
        return true;
    }
    else{
        return false;
    }
}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
function sendamail($to,$subject,$content){
require ('smtp/PHPMailerAutoload.php');
$mail = new PHPMailer();

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //$mail->SMTPDebug=3;
    $mail->Username   = 'recruit.my.freelancer@gmail.com';                     //SMTP username
    $mail->Password   = 'joiniisc';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->SMTPSecure='tls';
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('recruit.my.freelancer@gmail.com', 'Navkar');
    $mail->addAddress($to);     //Add a recipient
   // $mail->addReplyTo('info@gmail.com', 'Information');
    //$mail->addCC('cc@gmail.com');
   // $mail->addBCC('bcc@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;


    $mail->send();
   // echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>
