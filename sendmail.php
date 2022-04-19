<?php 
 ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
  
$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'stephenkc3@gmail.com';   // SMTP username 
$mail->Password = '551222profkc';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('stephenkc3@gmail.com', 'STEPHEN KELECHI'); 
$mail->addReplyTo('stephenkc3@gmail.com', 'stephen '); 
 
// Add a recipient 
$mail->addAddress('profkhaycee@gmail.com'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'test LAUNCH Email from Localhost'; 
 
// Mail body content 
$bodyContent = '<h1>How to Send Email from Localhost using PHP by CodexWorld</h1>'; 
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
$bodyContent = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAUNCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <script src=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        div{
            padding: 15px;
        }
        header > div.logo{
            
        }

        .img-banner{
            width: 100%;
            height: 400px;
            background: lightgray;
        }

        .dummy-text{
            margin-top: 100px;
        }


    </style>

</head>
<body>
    <header>
        <div class="logo">
            <a href="#"><img src="#" alt="fidelity Logo" width="70" height="50"></a>
        </div>
    </header>

    <main>
        <!-- img banner -->
        <section class="img-banner">
            <div class="w-100"> 
                <img class="img-fluid" src="#" alt="" height="">
                <p class="dummy-text text-center font-weight-bolder text-secondary" style="font-size: 72px;">image banner</p>
            </div>
        </section>
        
        <!-- message section -->
        <section>
            <div>
                <p><strong>Dear $first name</strong></p>
                <p>We are excited to announce the revamp of our FIDELITY GREEN REWARD LOYALTY PROGRAM. We have lots of exciting, amazing and exclusive rewards to say thank you to a fantastic customer, like you!</p>
                <p>Enjoy More in the new Green Reward season as you allow your point foot the bills when you buy bread, movie ticket and other good things of life. <br> Experience earning XX point for every transaction done on any of our platform.</p>
                <p>For enquiries, please call our 24-hour Contact Centre on 234-12702015, send an email to media@fidelitybank.ng or access the FAQs on the <strong>REWARD PORTAL</strong> site.</p>
                <p>Thank you for choosing Fidelity, Your Bank.</p>
            </div>

        </section>
    </main>

    <footer class="footer bg-light">
        <div class="logo"> 
            <a href="#"><img src="#" alt="fidelity Logo"></a>
        </div>
        <div class="disclaimer-body"> 
            <p class="disclaimer-msg" style="font-size: xx-small;"> Please note that Fidelity Bank would NEVER request for your account information or an update of your banking details (including BVN and REWARD POINT) via email or telephone. Please DISREGARD and DELETE all such emails and SMS as they are scam messages intended to defraud you. In addition, NEVER generate a token or passcode for anyone via telephone, email or internet chat. If you are clicking on any link in our emails, please check the address bar to ensure that the URL matches the link you clicked. Please forward any suspicious emails to media@fidelitybank.ng</p>
        </div>
        <hr style="color:darkgray;height:3px;margin:20px 0px 10px 0px">
        <div class="row">
            <div class="col-5">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
            </div>
            <div class="col-4"></div>
            <div class="col-3">
                <a href="#">Website link</a>
            </div>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>';
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 
 
?>