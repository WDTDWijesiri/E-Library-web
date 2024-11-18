<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact1.css">
</head>
<?php include "head.php"?>
<body> 
<div class="container">
<div class="contact-form">
  <h2>Contact Us</h2>
  <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    
    <input type="submit" value="Send">
  </form>
</div>
  <div class="map-container">
    <div id="map">
    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600px" height="400px"></iframe>
    </div>
  </div>
</div>


</body>
<?php include "f.php"?>
</html>