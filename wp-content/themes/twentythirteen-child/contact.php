<?php
if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Please enter your name.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['email']) === '')  {
        $emailError = 'Please enter your email address.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'You entered an invalid email address.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    if(trim($_POST['message']) === '')  {
        $messageError = 'Please enter your message.';
        $hasError = true;
    // } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    //  $emailError = 'You entered an invalid email address.';
    //  $hasError = true;
    } else {
        $message = trim($_POST['message']);
    }

    $emailTo = "mccartneybohn@yahoo.com";


    if(!isset($hasError)) {
        $subject = '[Client Inquiry] From '.$name;
        $body = "Name: $name \n\nEmail: $email \n\n Message: $message \n\nInterested In: $interests";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>
                        <?php if(isset($emailSent) && $emailSent == true) { ?>
                            <div class="thanks">
                                <p>Thanks, your email was sent successfully.</p>
                            </div>
                        <?php } else { ?>
                            <?php if(isset($hasError) || isset($captchaError)) { ?>
                                <p class="error">Sorry, an error occured.<p>
                            <?php } }?>
                        <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                            <ul class="contactform">
                            <li>
                                <input placeholder="Name" type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField" />
                                <?php if($nameError != '') { ?>
                                    <span class="error"><?=$nameError;?></span>
                                <?php } ?>
                            </li>

                            <li>
                                <input placeholder="Email" type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email" />
                                <?php if($emailError != '') { ?>
                                    <span class="error"><?=$emailError;?></span>
                                <?php } ?>
                            </li>

                            <li>
                                <input placeholder="Message" type="text" name="message" id="message" value="<?php if(isset($_POST['message']))  echo $_POST['message'];?>" class="required requiredField message" />
                                <?php if($emailError != '') { ?>
                                    <span class="error"><?=$messageError;?></span>
                                <?php } ?>
                            </li>


                            <li>
                                <input type="submit" id="submit"></input>
                            </li>
                        </ul>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                    </form>
