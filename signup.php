
<?php
if(isset($_POST['signup-submit']))
{
include "dbh.php";
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 $repwd=$_POST['re-pwd'];


if(empty($email) ||empty($pwd) ||empty($repwd) ){
  header("Location: index.php?error=empty_fields&email=".$email);
  exit();
}

else if($pwd !== $repwd){
    header("Location: index.php?error=passworddidntmatch&email=".$email);
    exit();
}
else{
  $sql="SELECT email FROM users WHERE email=?";
  $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultcheck =mysqli_stmt_num_rows($stmt);
    if($resultcheck>0)
    {
        header("Location: index.php?error=alreadyexists");
        exit();
    }
    else{
      $stmt = mysqli_stmt_init($conn);
      $sql = "INSERT INTO users(email,pwd) VALUES (?,?);";

        mysqli_stmt_prepare($stmt,$sql);
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ss",$email,$hashedpwd);
        mysqli_stmt_execute($stmt);
        header("Location: index.php?signup=success");
        exit();

    }
}
}
else {
    header("Location: index.php?override_error");
}
