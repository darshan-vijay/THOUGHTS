<?php

  INCLUDE 'dbh.php';
  $name1=  $_GET['name1'];
  $email1=  $_GET['email1'];
  $comment1=  $_GET['comment1'];
  $sql1 = "INSERT INTO contact(NAME,EMAIL,CONTENT) VALUES ('$name1','$email1','$comment1');";
    if(!mysqli_query($conn,$sql1)){

        header("Location: index.php?not_sucessful");
    }
    else{

      header("Location: index.php?sucessful");
    }
  /*  $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql1);
    mysqli_bind_param($stmt,"sss",$name1,$email1,$comment1);
    mysqli_stmt_execute($stmt);*/
    
