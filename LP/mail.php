<!DOCTYPE html>
<html lang="ja">
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="refresh" content=" 3; url=./index.html">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page Soejima</title>
  <meta name="description" content="Sample">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/sanitize.css">
  <link rel="stylesheet" href="./assets/css/mail.css">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/logo.svg">
  <link rel="icon" type="image/png" sizes="32x32"href="./assets/images/logo.svg">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo.svg">
  <link rel="manifest" href="./assets/images/favicon_package_v0.16/site.webmanifest">
  <link rel="mask-icon" href="./assets/images/logo.svg">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>
<body>
 <a href="#">
    <img src="http://aso2001017.babyblue.jp/LP/assets/images/logo.svg" class="logo">
      <title>
        My Works
      </title>
    </img>
  </a>
  <div class="hero-particles" id="particles-js">
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = $_POST['userEmail'];
  $title = "お問い合わせについて";
  $message = $_POST['inquiry'];
  $headers = "From: soejimaasojuku@gmail.com";

  if(mb_send_mail($to, $title, $message, $headers))
  {
    echo '<img src="./assets/images/ar836.png" class="result">';
  }
  else
  {
    echo '<img src="./assets/images/15fzg.png" class="result">';
  }

  $to2 = "soejimaasojuku@gmail.com";
  $title2 = "お問い合わせ受信";
  mb_send_mail($to2,$title2,$message,$headers);
 ?>
 </div>
 
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/app.js"></script>
</body>
</html>