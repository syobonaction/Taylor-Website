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

  <section id="content">
    <h3>CONTACT</h3>
    <form class="container" role="form" name="contactForm" id="contactForm" action="mail.php" method="post">
      <input type="text" class="form-control" placeholder="Name" name="name">
      <input type="text" class="form-control" placeholder="Email Address" name="email">
      <input type="text" class="form-control" placeholder="Phone Number" name="phone">
      <input type="text" class="form-control" placeholder="5 + 2 = ?" name="human">
      <textarea class="form-control-ta" placeholder="Message" name="message"></textarea>
      <input type="submit" name="submit" class="btnSubmit" value="SEND"></button>
    </form>
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
