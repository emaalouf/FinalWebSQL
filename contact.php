<?php 
include_once 'header.php';
?>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet"> 
<!-- <body style = "background-image:url('img/blog-img/bg-9.jpg');"> -->
<style>
 body{
    background-image:url('img/bg-img/bg-2.jpg');
}  </style>
<body>
<div class="contact">
<img src= "img/bg-img/breadcumb4.jpg" class  ="breadcumb">
<center><h1 class="musica-btn contact-head">CONTACT</h1></center>
</div>
<br><br>
<div class= "container">
<div class= "row">
<div class= "col-md-6 col-sm-12">
<div id ="con-info">
<p>Do You Have a Question ?</p>
<p>Contact Us </p> 
<i class ="fa fa-phone"></i>&nbsp;&nbsp;: &nbsp;&nbsp;+96170292873<br>
<i class ="fa fa-envelope"></i>&nbsp;&nbsp;: &nbsp;&nbsp;egmaalouf@gmail.com
</div>
</div>
<div class= "col-md-6 col-sm-12">
<div class ="contact-form">
<form  action ="includes/contact.inc.php" method = "POST">
<input type ="text" name ="name" placeholder = "Enter your name" class= "con-in">
<input type ="text" name ="email" placeholder = "Enter your email" class= "con-in">
<input type ="text" name ="subject" placeholder = "Enter your subkect" class= "con-in">
<textarea name ="message" placeholder = "Enter your message" class= "con-mes"></textarea>
<br><br>
<center>
<button class ="musica-btn" name= "submit">SEND</button></center>
</form>
</div>
</div>
</div>
</div>