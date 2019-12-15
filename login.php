<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';
?>
<style>
 body{
    background-image:url('img/bg-img/bg-4.jpg');
}  </style>
 <br><br><br><br><br>
 <body>
        <div class="container-fluid">
            <div class="row">
                <div class= "col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12">
                    <div class="login">
                        <h2>Login</h2>
                        <form action="includes/login.inc.php" method="POST">
                        <input type ="text" name ="user" placeholder=" Username" id="log-user">
                        <input type ="password" name ="pwd" placeholder="Password" id="log-user">
                        <center><button type ="submit" name ="submit" class="musica-btn">Login</button></center>
                        </form>
                        <br><br>
                        <p class= "no-log" style="color:#fff;"><a href="signup.php">Don't have an account?</a></p>
<!--                         <p class= "no-log" style="color:#fff;">Forgot Password !!</p>
 -->                    </div>
                </div>
            </div>
</div>
           
            
            
<?php
include_once 'footer.php';
?>