
<?php
include "dbh.php";
 ?>
<?php include "header.php"; ?>

<main>
  <?php
  if(isset($_SESSION['user'])){
    echo '<div class="container">
<div class="row" style="text-align:center; border-bottom:3px solid  ">
<div class="col-sm-9" STYLE ="COLOR:#000" style="text-align:center; height=100px"  >
<h3 style="font-size:22px">LET OTHERS KNOW WHAT YOU ARE THINKING!</h3>
</div>
<div class="col-sm-3"  style="text-align:center; padding-top:5px" >
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">POST A THOUGHT!</button>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
  <!-- Modal content-->

     <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
         <h4 class="modal-title">TYPE WHAT U WANNA TYPE</h4>
       </div>
       <div class="modal-body">
         <p>Note:Fill in every box!</p>
         <form action="postit.php" method ="POST">
         <div class="form-group">
           <label for="text">Heading:</label>
           <input type="text" class="form-control"  name ="heading" placeholder="Heading in here">
         </div>
         <div class="form-group">
           <label for="tagline">Tagline:</label>
           <input type="TEXT" class="form-control" name ="tagline" placeholder="Tagline in here">
         </div>
         <div class="form-group">
           <label for="select">Topic:</label>

           <select name="topics">
             <option value="topic1"> Topic1</option>
             <option value="topic2"> Topic2</option>
             <option value="topic3"> Topic3</option>
             <option value="topic4"> Topic4</option>
           </select>
         </div>
         <div class="form-group">
           <label for="content">Content:</label>
           <textarea type="message" class="form-control" name="content" placeholder="Content in here"></textarea>
         </div>

         <button type="submit" class="btn btn-default" name="content-submit">Post</button>
       </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

     </div>

   </div>
 </div>
</div>

</div>
</div>
 ';

  }

    ?></main>




<script type="text/javascript">
document.querySelector(".theboxes").style.display="none";
</script>
<?php
$sql ="select * from topic2;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck >0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    echo "<style>
    .styling
    {
      text-align:center;
      padding-top:15px;
      padding-bottom:15px;
      margin-top:60px;
      border:1px solid #100;

      line-height:25px;
      margin-left:160px;
      margin-right:160px;

    }
    h4
    {
      font-size: 28px;
    }
    </style>
    <div class = 'styling'><h2>".
        $row['heading']."</h2><br><h4>".
        $row['tagline']."</h4><br><p>".
        $row['content']."</p><br>
    </div>";
  }
  echo "
  <style>
  .theboxbeforefooter
  {
    height:60px;
  }
  </style>
  <div class='theboxbeforefooter'></div>";
}
else {
  echo"<h1 style='margin-left:160px'>NOTHING WAS DISCUSSED IN THIS TOPIC!!!</h1>";
  echo "
  <style>
  .theboxbeforefooter
  {
    height:60px;
  }
  </style>
  <div class='theboxbeforefooter'></div>";
}




 ?>
 <?php include "footer.php" ?>
