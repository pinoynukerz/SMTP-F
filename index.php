<?php 
//SMTP MAIL

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
 if(isset($_POST['submit'])){
     
    $datetoday     =  date("l jS F Y g:ia"); 
     
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    echo '<div style="margin-top:45px margin-left:40px;margin-right:auto;">';

    //echo $_POST['fullname'].''.$_POST['email'].''.$_POST['subject'].''.$_POST['message'];
    
    echo '</div>';
   
    $name        = $_POST['fullname'];
    $email       = $_POST['email'];
    $subject     = $_POST['subject'];
    $messagepost = $_POST['message'];
     
    $message = "<div style=\"text-align:center;background-color:#5a0000;padding:16px 0\"><div class=\"adM\">
    </div><span style=\"color: white;font-size: 18px;font-weight: 900;\">AUDIOPHILE</span>
</div><div style=\"background-color:#f6f6f6;padding:30px\"><div style=\"margin:0 auto;width:620px;background-color:#fff;border:1px solid #eee;padding:30px\">
    <table width=\"100%\" cellpadding=\"4\" cellspacing=\"0\" style=\"border-collapse:collapse;font-size:12px;font-family:verdana;\" border=\"1\" bordercolor=\"#CCCCC\">
    <tr><td bgcolor=\"#f4f4f4\" align=\"right\">Date</td><td >$datetoday</td></tr>
    <tr><td width=\"150\" bgcolor=\"#f4f4f4\" align=\"right\">Name</td><td width=\"450\"> $name </td></tr>
    <tr><td bgcolor=\"#f4f4f4\" align=\"right\">Email</td><td > $email </td></tr>
    <tr><td bgcolor=\"#f4f4f4\" align=\"right\">Subject</td><td >$subject </td></tr>
    <tr><td bgcolor=\"#f4f4f4\" align=\"right\">IP Address</td><td > $ip_address </td></tr>
    <tr><td bgcolor=\"#f4f4f4\" colspan=\"2\"><FONT SIZE=\"+1\" >Message sent @ Stem Ecosystem Landing Page</FONT></td></tr>
    <tr><td bgcolor=\"#f4f4f4\" valign=\"top\" align=\"right\" height=\"150\">Message</td><td valign=\"top\" > $messagepost</td></tr>
    </table></div></div><div style=\"padding-top:30px;text-align:center;padding-bottom:30px;font-family:'Helvetica Neue','Helvetica',Helvetica,Arial,sans-serif\">
    <div style=\"width:640px;background-color:#ffffff;margin:0 auto\">
    <p style=\"margin:0 0 10px\">Copyright © 2022 , All rights reserved.</p>
    <p style=\"margin:0 0 10px\">The Philippines largest distributor of professional audio equipment and musical instruments. <a style=\"color:#ef0000;text-decoration:none\" href=\"https://audiophile.ph\" target=\"_blank\">Audiophile.Ph</a></p>
    <div class=\"yj6qo\"></div></div><div class=\"adL\"></div></div>"; 
     

    $sender       = 'jmattz23@hotmail.com';
    $senderName   = $name;
    $recipient    = 'alfred.mattz@gmail.com';
    $usernameSmtp = 'AKIAVFEKWWJKDDLUBNRU'; 
    $passwordSmtp = 'BEWEfDgnPyD6GB9nh85C0QMPsxIg1ykA8uMpGgtUdGsz';
    $host         = 'email-smtp.us-east-1.amazonaws.com';
    $port         = 465;
     

     
    $subject  = $subject;
    $bodyText = $email;
    $bodyHtml = $message;
     
     
    $mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP(true);
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    
    $mail->addAddress($recipient);
    
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $bodyHtml;
    $mail->AltBody    = $bodyText;
    
    $mail->Send();
    
   
     
    

 }
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coming Soon</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video>
        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Contact Form</h1>
                    <!--
                    <p class="mb-5">We're working hard to finish the development of this site. Sign up below to receive updates and to be notified when we launch!</p>
                    -->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <form action="" method="POST">
                                <p><input class="form-control" placeholder="Name" type="text" name="fullname" /> </p>
                                <p><input class="form-control" placeholder="Email" type="email" name="email" /> </p>
                                <p><input class="form-control" placeholder="Subject" type="subject" name="subject" /> </p>
                                <p><textarea class="form-control" placeholder="Message" name="message"></textarea></p>
                                            
                                <p><button name="submit" class="btn btn-primary disabled" id="submitButton" type="submit">Submit!</button></p>
                            </form>
                                                      
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <?php 

                        echo '<div class="d-nones" id="submitSuccessMessage">
                        <div class="text-center mb-3 mt-2">
                            <div class="fw-bolder">Form submission successful!</div>
                            Please visit
                            <br />
                            <a href="https://mdjmobilemix.blogpsot.com/">https://mdjmobilemix.blogpsot.com/</a>
                        </div>
                    </div>' , PHP_EOL;
                        } catch (phpmailerException $e) {
                            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
                        } catch (Exception $e) {
                            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
                        }



                        ?>
                        <!--<div class="d-nones" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>-->
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
