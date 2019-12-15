<?php 
include_once 'header.php';
?>
<style>
 body{
    background-image:url('img/bg-img/bg-9.jpg');
}  </style>
<body>
<br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class= "col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12">
                    <div class="sign">
                        <h2>Sign Up</h2>
                        <form action="includes/signup.inc.php" method="POST">
                        <input type ="text" name ="user" placeholder=" Username" id="log-user">
                        <input type ="password" name ="pwd" placeholder="Password" id="log-user">
                        <input type ="email" name ="email" placeholder="E Mail" id="log-user">
                        <input type ="text" name ="first" placeholder="First" id="log-user">
                        <input type ="text" name ="last" placeholder="Last" id="log-user">
                        <input type ="number" name ="mob" placeholder="MobileNo" id="log-user">
                        <center><button type ="submit" name ="submit" class="musica-btn">SignUp</button></center>
                        </form>
                        <p><a href= "login.php" style ="color:white;font-size:15px;">Already have an account ?Let's log you in</a></p>
                    </div>
                </div>
            </div>
<br><br><br><br>


<?php
include_once 'footer.php';
?>