<?php 
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->username = "ladrera21@gmail.com";
    $mail->Password = "2013107148";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("ladrera21@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail = Body = $body;

    if($mail->send()){
        $status = "Success";
        $response = "Email is sent!"
    } else {
        $status = "Failed";
        $response = "Email not Sent ". $mail->ErrorInfo;
    }

   // exit(json_encode(array("status" => $status, "response" => $response)));

}

?>