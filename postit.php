<?php

if(isset($_POST['content-submit']))
{

include "dbh.php";
 $heading=$_POST["heading"];
 $tagline=$_POST["tagline"];
 $content=$_POST["content"];
 $topics=$_POST["topics"];

 if($topics == "topic1"){
   $sql="INSERT INTO topic1(heading,tagline,content) VALUES (?,?,?);";
   $stmt = mysqli_stmt_init($conn);

     mysqli_stmt_prepare($stmt,$sql);

     mysqli_stmt_bind_param($stmt,"sss",$heading,$tagline,$content);

   if(!mysqli_stmt_execute($stmt)){

       header("Location: postit.php?not_sucessful");
   }
   else{

     header("Location: index.php?sucessful");
   }


}
}
?>
