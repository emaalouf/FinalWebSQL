<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script type ="text/javascript"src= "jquery.js"></script>
    <!-- Core Stylesheet -->
    <link rel ="stylesheet" href ="style.css">
    <link rel ="stylesheet" href = "css/font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="icon" href="img/core-img/favicon.ico">
</head>
<body>
<!-- ##### Navs Area Start ##### -->
<nav>
<h1 class= "brand"><a href ="home.php">MUSICA</a></h1>
<ul>
<li><a href="home.php">HOME</a></li>
<?php
    if(isset($_SESSION['u_id'])){
        echo ' <li><form method="POST" action="includes/logout.inc.php">
        <button type = "submit" name = "submit" style ="background:transparent;border:none;outline:none;color:#fff;">LOGOUT</button>
</form></li>
<li><a href="pay.php">SHOP</a></li>';
    }
    else
    echo '<li><a href="login.php">LOGIN</a></li>';
    ?>
<li><a href="signup.php">SIGNUP</a></li>
<li><a href="song.php">SONGS</a></li>
<li><a href="contact.php">CONTACT</a></li>
</ul>
<div style="clear:both"></div>
</nav>
<div class="responsive-bar">
<h3 class= "brand"><a href ="home.php">MUSICA</a></h3>
<h4 class="menu">MENU</h4>
<div style="clear:both"></div>
</div>
<script type ="text/javascript"src= "jquery.js"></script>
<script type ="text/javascript">
$(document).ready(function(){
        $(".menu").click(function(){
            $("nav").slideToggle(300);
        })
})
</script>

    
