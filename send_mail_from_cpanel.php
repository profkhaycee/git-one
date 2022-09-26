<?php


ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * This example shows sending a message using PHP's mail() function.
 */



//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

// require 'c:/xampp/htdocs/kc/vendor/autoload.php';
require '/home/kdclovee/public_html/PHPMailer/src/PHPMailer.php';
require '/home/kdclovee/public_html/PHPMailer/src/SMTP.php';
require '/home/kdclovee/public_html/PHPMailer/src/Exception.php';


/*

$query = "select DISTINCT email, name from (SELECT fullname as name, email FROM `bc21` union select name, email from bc21mailinglist) as mails group by email limit 250, 50";
$result = mysqli_query($mysql, $query);

foreach($result as $row){
    // echo "<h5>" .$row['email']." -->> ".$row['name']."</h5> <hr>";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->setFrom('info@kdcloveembassy.com', 'Kingdom Delegates Center');
    $mail->addReplyTo('info@kdcloveembassy.com', 'Kingdom Delegates Center');

    $mail->addAddress($row['email']);
    $mail->Subject = 'Believers Congress 2021 is 10 days away';
    $mail->isHTML(true);
    $mail->AddEmbeddedImage('KDC.png', 'KDClogo');
    $mail->AddEmbeddedImage('bc21img.jpeg', 'bc21img');

    $mail->Body = "
                <p><center> <img src='cid:KDClogo' width='200' height='100'> </center></p><br> <br>
                <p> Hello <b>".$row['name']."</b>, </p>
                <p> Great day to You! </p>
            
                <p>This is to remind you that Believer's Congress 2021 is here now, come 7th - 10th of October.</p>
                <p><b>Theme: Taking Charge!</b></p>
                
                <p><strong> <i class='fas fa-map-marker-alt' style='color:red'></i> Gospel City, Irra road, Offa, Kwara State</strong> </p>
                
                <p>If you have not registered, follow this link to register : <a href='http://kdcloveembassy.com/believers-congress-2021/'>REGISTER HERE</a> </p><br>
                <p><center> <img src='cid:bc21img' width='300' height='400'> </center></p><br> <br>

                <p>We will be looking forward to have you</p>
                <p><b>Great Grace Abounds ! </b></p>

                
            ";
    if($prevmail == $row['email']){
        echo "message already sent to this mail address-> ". $row['email']." - ". $prevmail."<hr>";
    }else{
        if (!$mail->send()) {
            echo '<hr>Mailer Error: ' . $mail->ErrorInfo;
            echo 'not sent to '. $row["id"].' -> ';
                    echo $row['email']." -> ".$row['name']." <hr>";
    
        } else {
            echo 'Message sent! congratulationss to  '.$row["name"].' -> ';
            echo $row['email']." -> ".$row['name']." <hr>";
                $prevmail = $row['email'];
    
        }
    }
}

*/

$email = array('stephenkc3@gmail.com','profkhaycee@gmail.com');
$name = array('stephen kelechi', 'prof khaycee');
$m = array();
$i = 0;
foreach ($email as $add) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->setFrom('info@kdcloveembassy.com', 'Kingdom Delegates Center');
    $mail->addReplyTo('info@kdcloveembassy.com', 'Kingdom Delegates Center');

    $mail->addAddress($add);
    $mail->Subject = 'Believers Congress 2021 ';
    $mail->isHTML(true);
    $mail->AddEmbeddedImage('KDC.png', 'KDClogo');
    $mail->AddEmbeddedImage('bc21img.jpeg', 'bc21img');
    // $mail->Body    = '<h2>hello'.$name[$i].'</h2><p>This is the HTML message body <b>in bold!</b></p>';
    $mail->Body = "
                <p><center> <img src='cid:KDClogo' width='200' height='100'> </center></p><br> <br>
                <p> Hello <b>$name[$i]</b>, </p>
                <p> We want to appreciate you for your participation and attendance in last year Believers Congress. We believe you had a memorable experience during BC'20. </p>
            
                <p>However it is another edition of Believers Congress. Unlike the previous year, it is going to be big, powerful and memorable.</p>
                <p>We want to use this privilege to invite you to this life changing programme.</p>
                <p><b>Theme: Taking Charge!</b></p>
                
                
                <p><b>Date: 7th - 10th October 2021 </b></p>
                <p><strong> <i class='fas fa-map-marker-alt' style='color:red'></i> Gospel City, Irra road, Offa, Kwara State</strong> </p>
                
                <p>Follow this link to register: <a href='http://kdcloveembassy.com/believers-congress-2021/'>REGISTER HERE</a> </p><br>
                <p><center> <img src='cid:bc21img' width='300' height='400'> </center></p><br> <br>

                <p>We will be looking forward to have you</p>
                <p><b>Great Grace Abounds ! </b></p>
            ";
    if (!$mail->send()) {
        echo '<hr>Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo $name[$i].' -> Message sent! congratulationss <hr>';
    }
        $i++;

}


            //   <p> Follow online on our Mixlr platform : <a href='http://mixlr.com/kdc_livestream'> KDC_LIVESTREAM </a></p>

//send the message, check for errors
// if (!$mail->send()) {
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message sent!';
// }


?>
