<?php
session_start();
include "header.php";


 ?>
 <div class="container-fluid spaceit">
 <div class="row">
 <div class="col-sm-3">
     </div>

     <div class="col-sm-6">
       <div class="hello">
         <form action="logincheck.php" method ="POST">
         <div class="form-group">
           <label for="email">Email address:</label>
           <input type="email" class="form-control" id="email" name ="login-mail">
         </div>
         <div class="form-group">
           <label for="pwd">Password:</label>
           <input type="password" class="form-control" name ="login-pwd" >
         </div>
         <div class="checkbox">
           <label><input type="checkbox"> Remember me</label>
         </div>
         <button type="submit" class="btn btn-default" name="login-submit">Submit</button>
       </form>
       </div>
       <div class="col-sm-3">
       </div>
     </div></div>
     <div class="container-fluid hmm">
     </div>

 <script type="text/javascript">
 document.querySelector(".hideit").style.display="none";
  document.querySelector(".spaceit").style.marginTop="100px ";
    document.querySelector(".hmm").style.height="70px ";
 </script>





<?php
 include "footer.php"
?>
