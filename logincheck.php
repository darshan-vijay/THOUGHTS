<?php
if(isset($_POST['login-submit']))
{
include "dbh.php";
 $email=$_POST['login-mail'];
 $pwd=$_POST['login-pwd'];



if(empty($email) ||empty($pwd) ){
  header("Location: index.php?error=empty_fields&email=".$email);
  exit();
}
else{
  $sql="SELECT * FROM users WHERE email=?";
  $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $result =mysqli_stmt_get_result($stmt);
    $resultcheck =mysqli_stmt_num_rows($stmt);
    if($row=mysqli_fetch_assoc($result))
    {
      $pwdcheck = password_verify($pwd,$row['pwd']);
      if($pwdcheck == true)
      {
        session_start();
        $_SESSION['user'] = $row['email'];
        echo $_SESSION['user'];

       header("Location: index.php?login=success");
      }
      else{
        header("Location: login.php?error=incorrectpwd");
        exit();
      }

    }
    else{
      header("Location: login.php?error=incorrectemail");
      exit();
    }



}
}
else {
    header("Location: login.php?override_error");
}



 ?>
