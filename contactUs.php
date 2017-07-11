<?php include('temp/header.php'); ?> 
    <!-- ==================Start Navigate=================== -->
    <header id="header">
        <?php include('temp/navigate.php'); ?>
    </header>
<?php

    //check if user coming from a request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Assign Variables
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['cellPhone'], FILTER_SANITIZE_NUMBER_INT);
        $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

        $formerros = array();

        if(strlen($user) < 3){
            $formerros[] = 'Username Must be Larger Than <strong>3</strong> Characters';
        }

        if(strlen($message) < 10){
            $formerros[] = 'message Can not be Less Than <strong>10</strong> Characters';
        }

        // If No Erros Send The Email [mail(To, Sybject, Message, Headers, Parameters) ] 

        $myemail = 'option364@gmail.com';
        $subject = 'Contact Form';
        $Headers = 'From: ' . $email . '<br>';

        if (empty($formerros)) {
            //include PHPMalierAutoload.php
            require 'phpmalier/PHPMailerAutoload.php';
                //create an instance of PHPMalier
                $mail = new PHPMailer;
                
                //set a host
                $mail->Host = "smtp.gmail.com";

                //set authentication to true
                $mail->SMTPAuth = true;

                //enable SMTP
                //$mail->isSMTP();
                
                //set login Detalis For Gmail Account
                $mail->Username = "option364@gmail.com";
                $name = $_POST['username'];
                $email = $_POST['email'];
                //set type of protection
                $mail->SMTPSecure = "tlc"; // OR We Can use ssl
                
                //set a port
                $mail->port = 587; // or 587 if ssl
            
                // set a subject 
                $mail->Subject = "Contact Form";
            
                // set a body 
                $mail->Body = $_POST['message'];
            
                //Who send an email
                $mail->setFrom($email, $name);
            
                //set where we are sending an email
                $to = 'option364@gmail.com';
                $mail->addAddress($to);
            
                $mail->isHTML(false);
                //send an email
                if(!$mail->send()) {
                    echo $mail->ErrorInfo;
                } else {       
                   $success = '<div class = "alert alert-success">We Have Received Your Message</div>';
                }

                $to = "option364@gmail.com";
                $subject = "My subject";
                $txt = "Hello world!";
                $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";

            $a = mail($to,$subject,$txt,$headers);

            if($a)
                $success = '<div class = "alert alert-success">yes yes yes</div>';
            else
                $success = '<div class = "alert alert-success">no no no</div>';



           /* 
            function sendMail($to, $from, $body, $fromName){
                //create an instance of PHPMalier
                $mail = new PHPMailer;
                
                //set a host
                $mail->Host = "smtp.gmail.com";

                //enable SMTP
                $mail->isSMTP();

                //set authentication to true
                $mail->SMTPAuth = true;
                
                //set type of protection
                $mail->SMTPSecure = "ssl"; // OR We Can use tlc
                
                //set a port
                $mail->port = 465; // or 587 if tlc
                
                //set who is sending an email
                $mail->setFrom($from, $fromName);
                
                //set where is sending an email
                $mail->addAddress($to);
                
                //set subject
                $mail->Subject ='Contact Form - Email';
                
                //set body
                $mail->Body = $body;
                $mail->isHTML(false);    
            };
            $name = $_POST['username'];
            $email = $_POST['email'];
            $body = $_POST['message'];
            
            sendMail('abdlrahmansaber2@gmail.com', $name, $body, $body);
            */
            
        }
    }
    
?>

        <!-- Start Form -->
    <section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 formm text">
                <h1 class="text-center">Contact Us</h1>
                <form class="contact_form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <?php if (! empty($formerros)) { ?>
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                            <?php
                            foreach ($formerros as $errors) {
                                echo $errors . '<br/>';
                             }  
                        ?>
                        </div>
                    <?php  } ?>

                    <?php if(isset($success)) { echo $success; }?>
                    <div class="form-group">
                        <input type="text" name="username" class="username form-control" placeholder="Your Username" value="<?php if(isset($formerros)) { echo $user;} ?>">
                        <i class="fa fa-user fa-fw"></i>
                        <span class="asterisk"><i class="fa fa-star"></i></span>
                        <div class="alert alert-danger alert1">
                            Username Must be Larger Than <strong>3</strong> Characters
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="email" autocomplete="off"  name="email" class="email form-control" placeholder="Please Enter a Valid Email" value="<?php if(isset($formerros)) { echo $email;} ?>">
                        <i class="fa fa-envelope fa-fw"></i>
                        <span class="asterisk"><i class="fa fa-star"></i></span>
                        <div class="alert alert-danger alert2">
                            Email Can't Be <strong> Empty</strong> 
                        </div>
                    </div>

                    <input type="text" name="cellPhone" class="form-control" placeholder="Enter Your Cell Phone" value="<?php if(isset($formerros)) { echo $phone;} ?>">
                    <i class="fa fa-phone fa-fw"></i>

                    <textarea class="message form-control" name="message" placeholder="Your Message!"><?php if(isset($formerros)) { echo $message;} ?></textarea>
                    <div class="alert alert-danger alert3">
                            message Can not be Less Than <strong>10</strong> Characters
                    </div>

                    <input type="submit" class="btn  btn-danger" value="Send Message">
                    <i class="fa fa-send fa-fw send-icon"></i>

                </form>
            </div>
            <div class="col-sm-6 fonts">
            <div class="font">
            <i class="fa fa-map-marker"></i>
            <p>29 A El-achid Street</p>
            </div>
            <div class="font">
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
            </div>
            <div class="font">
                <i class="fa fa-phone"></i>
                <p>1 5589 55488 55s</p>
            </div>
            </div>

        </div>
    </div>
</section>
<?php include('temp/footer.php'); ?>