
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['Send']))
{
    if(filter_var($_POST['toEmail'], FILTER_VALIDATE_EMAIL)) {
       // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'titasdg@gmail.com';                 // SMTP username
    $mail->Password = '///';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Recipients
    $mail->setFrom("titasdg@gmail.com", 'Titas');
    $mail->addAddress($_POST['toEmail'], 'GavejoVardas');     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Film link';
    $mail->Body    = "http://localhost/zp181/filmai/?page=more&id=".$_GET['id'];
    $mail->send();
    header("Location: ?page=all-films"); 
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ';
}
    }
    else{
        echo "Nerastas email";
    }
}
?>
<form action="" method="POST">
        <fieldset >
        <input type="text" name="toEmail" placeholder="Kam siunciat email">
    </fieldset>
 
    <button type = "submit" name="Send">Submit</button>
    </fieldset>
</form>