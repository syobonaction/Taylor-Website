<?php
    if ($_POST["submit"]) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Taylor Cole Photography';
        $to = 'taylorcolephotography@gmail.com';
        $subject = 'Contact/Inquiry';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human != 7) {
            $errHuman = 'Your anti-spam is incorrect';
        }

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<h2>Thank You! I will be in touch</h2>';
    } else {
        $result='<h2>Sorry there was an error sending your message. Please try again later</h2>';
    }
} else {
  $result='<h2>Please fill out all fields.</h2>';
}
    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=0">

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

  <title>Taylor Cole Photography</title>
</head>
<body>
  <div id="header">
    <h1><a href="./index.html">TAYLOR COLE PHOTOGRAPHY</a></h1>
    <img src="img/logo.png" class="logo" alt="logo" />
    <button type="button" id="btnMenu" class="close">
      <span class="bar"></span>
      <span class="clear"></span>
      <span class="clear"></span>
      <span class="bar"></span>
      <span class="clear"></span>
      <span class="clear"></span>
      <span class="bar"></span>
    </button>
    <div id="nav">
      <ul>
        <li><a href="portfolio.html">PORTFOLIO</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="cv.html">CV</a></li>
      </ul>
    </div>
  </div>

  <section id="content" class="ctr">
    <?php
    echo $result;

    ?>
  </section>
<footer>
  <div id="social">
    <div class="social-icon"><a href="https://instagram.com/tate_modern/" target="_blank"><img src="img/icons/instaicon.png" alt="instagram" /></a></div>
    <div class="social-icon"><a href="http://www.tayloracole.tumblr.com/" target="_blank"><img src="img/icons/tumblricon.png" alt="tumblr" /></a></div>
  </div>
</footer>
</body>
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

</html>
