<?php
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $user = mysqli_real_escape_string($conn,$_POST['user']);
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    $mob = mysqli_real_escape_string($conn,$_POST['mob']);
    if(empty($first)||empty($last)||empty($email)||empty($pwd)||empty($user)||empty($mob))
    {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    else
    {
        if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)||!preg_match("/^[a-zA-Z]*$/",$father)||!preg_match("/^[a-zA-Z]*$/",$mother))
        {
            header("Location: ../signup.php?signup=invalid");
            exit();
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                header("Location: ../signup.php?signup=invalid email");
                exit();
            }
              else
              {
                    $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
                    $sql= "INSERT INTO users (user_id,first,last,email,password ,mobile) VALUES ('$user','$first','$last','$email','$hashedpwd','$mob');";
                    $result=mysqli_query($conn,$sql);
                    header("Location: ../signup.php?signup=success");
                    exit();
              }
        }

    }
    
}
else{
    header("Location: ../signup.php?signup=failed");
    exit();
}
?>