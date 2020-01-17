<?php
session_start();

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "darshan";
 $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
 if($conn)

 if(!mysqli_select_db($conn,'darshan'))
 {

 }
else {

}


function CloseCon($conn)
 {
 $conn -> close();
 }
