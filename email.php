
  <!-- developer iamCoole @ dretzam@gmail 3/19 -->

  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$err = False;
$fname = $_POST['fname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$text = '
<html>
<head>
  <title>SAMONEONENINE</title>
</head>
<body>
  <h2>From SAMONEONENINE Website</h2>
 
      <p>Name: '.$name.'</p>
      <p>Email: '.$email.'</p>
      <p>Phone: '.$tel.'</p>
      <p>Message: '.$message.'</p>
  
  <br /><p>'.$message.'</p>
</body>
</html>
';


$to      = 'contact@adeniyisam119.com';
$subject = 'Sam Adeniyi Contact Form';
$message = $text;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Josh <godfreyjtech2020@gmail.com>' . "\r\n";
$headers .= 'From: Sam Website <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: webmaster@example.com' . "\r\n";
$headers .= 'Bcc: webmaster@example.com' . "\r\n";


mail($to, $subject, $message, $headers);
}else{
    $err = True;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Samuel Adeniyi | SAMONEONENINE</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/blogcss.css" rel="stylesheet">




<!-- Added Css files -->

    <link href="css/css/owl.css" rel="stylesheet">

</head>

<body>

<!--==========================
  Hero Section
============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">       

        <h1>Message Sent Successfully</h1>
        <h2>Do Follow & Subscribe to my <span class="rotating" style="color:#00B0FF"> Facebook Handle, Instagram Handle, Youtube Channel</span></h2>
        <div class="actions">
          <a href="index.html" class="btn-services">Home</a>
          <a href="index.html" class="btn-services">My Videos</a>
          <div class="social">
              <a href="https://www.youtube.com/channel/UC6eyvKBJoLPtOYam90gzTug"><i class="fa fa-youtube fa-2x"></i></a>
              <a href="https://web.facebook.com/samuel.adeniyi.583671"><i class="fa fa-facebook fa-2x"></i></a>
              <a href="https://www.instagram.com/samadeniyi119"><i class="fa fa-instagram fa-2x"></i></a>
              <!-- <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
              <a href="#"><i class="fa fa-linkedin fa-2x"></i></a> -->
            </div>
        </div>
      </div>
    </div>
  </section>

              <?php
              
            
              ?>
            
          </div>
        </div>
      </div>
    </section>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

    <!-- All Included JavaScript -->
    <script src="js/js/jquery.easing.min.js"></script>
    <script src="js/js/scrolling-nav.js"></script>
    <script src="js/js/animated-text.js"></script>
    <script src="js/js/jquery.modal.min.js"></script>
    <script src="js/js/owl.carousel.min.js"></script>
    <script src="js/js/jquery.waypoints.min.js"></script>
    <script src="js/js/jquery.countup.min.js"></script>
    <script src="js/js/jarallax.min.js"></script>
    <script src="js/js/lightbox.min.js"></script>
    <script src="js/js/imagesloaded.min.js"></script>
    <script src="js/js/jquery.filterizr.min.js"></script>
    <script src="js/js/dyscrollup.js"></script>
    <script src="js/js/VideoPlayerPopUp.js"></script>
    <script src="js/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/js/jquery.ripples.js"></script>
    <script src="js/js/circleMagic.min.js"></script>
    <script src="js/js/jquery.zoomslider.min.js"></script>

    <script src="js/js/main.js"></script>

    <!-- AJAX Contact Form Using -->
    <script src="js/js/app.js"></script>


  

 


</body>
</html>

