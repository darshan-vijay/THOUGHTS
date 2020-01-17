
<?php session_start(); ?>
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
         <form action="postit.php" method ="post">
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
<style>
.container-m1{
  text-decoration:none;
  font-color:white;
  font-size:32px;
height: 350px;
width :auto;
display:block;
margin:40px 40px;
overflow:hidden;
text-align:center;
  padding-top:160px;
  background-image:url("idea.jpg");
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
  overflow:hidden;
  filter: grayscale(70%);
}
.container-m1:hover{filter:grayscale:0%;background-size:150%;font-size:40px;font-color:blue;}
.container-m2:hover{filter:grayscale:0%;background-size:150%;font-size:40px;font-color:blue;}
.side-m1:hover{filter:grayscale:0%;background-size:250%;font-size:40px;font-color:blue;}
.side-m2:hover{filter:grayscale:0%;background-size:150%;font-size:40px;font-color:blue;}
.container-m2{
  font-color:white;
  font-size:32px;
height: 350px;
width :auto;
display:block;
margin:40px 40px;
overflow:hidden;
text-align:center;
  padding-top:160px;
  background-image:url("sports.jfif");
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
  overflow:hidden;
  filter: grayscale(70%);
}
.side-m1{
  font-color:white;
  font-size:32px;
  height: 350px;
  width :auto;
  display:block;
  margin:40px 40px;
  margin-top:60px !important;
  overflow:hidden;
  text-align:center;
  padding-top:160px;
  background-image:url("politics.jpg");
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center;
  overflow:hidden;
  filter: grayscale(70%);
  }
  .side-m2{

    font-size:32px;
    height: 350px;
    width :auto;
    display:block;
    margin:40px 40px;
    margin-top:60px !important;
    overflow:hidden;
    text-align:center;
    padding-top:160px;
    background-image:url("education.jpg");
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    overflow:hidden;
    filter: grayscale(70%);
    }

    article a{
      font-color:white; !important
      font-decoration:none; !important
filter: grayscale(100%);

    }

</style>
<article class="theboxes">
  <div class="row">

    <div class="col-sm-6" >
      <a  href="topic1.php" ><div class="container side-m1 poli" >Politics</div></a>
    </div>

    <div class="col-sm-6 " >
        <a href="topic2.php" ><div class="container side-m2 edu"   >Education</div></a>
    </div>

  </div>

  <div class="row">

  <div class="col-sm-6" >
    <a href="#"><div class="container container-m1 idea ">Ideas</div></a>
  </div>

  <div class="col-sm-6" >
      <a href="#"><div class="container container-m2 sports" >Sports</div></a>
  </div>

</div>
</article> ';

  }
  else{
    echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="2ndphoto.jpg"  width="1200" height="700">
            <div class="carousel-caption">
              <h3>yeasss!</h3>
              <p>you have made the right choice</p>
            </div>
          </div>

          <div class="item">
            <img src="1stphoto.jpg"  width="1200" height="700">
            <div class="carousel-caption">
              <h3>Awespme</h3>
              <p>Thank you,we wont forget.</p>
            </div>
          </div>

          <div class="item">
            <img src="3rdphoto.jpg"  width="1200" height="700">
            <div class="carousel-caption">
              <h3>LA</h3>
              <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="band" class="container text-center">
      <h3>HEY THERE!</h3>
      <p><em>We are so happy to have u in here!</em></p>
      <p>We have created a website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <p class="text-center"><strong>SIGNUP NOW</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident

          </p>


        </div>

        <div class="col-sm-1">
        </div>

        <div class="col-sm-4">
          <div class="hello">
            <form action="signup.php" method ="POST">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name ="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name ="pwd" >
            </div>

            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control" name="re-pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default" name="signup-submit">Submit</button>
          </form>
          </div>
          <div class="col-sm-1">
          </div>
        </div>

      </div>
    </div>




    <!-- Container (Contact Section) -->

    <div id="contact" class="container">
      <h3 class="text-center">Contact</h3>
      <p class="text-center"><em>We love our fans!</em></p>

      <div class="row">
        <div class="col-md-4">
          <p>Fan? Drop a note.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span>Chennai,INDIA</p>
          <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 1515151515</p>
          <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
        <form method="GET" action ="contact.php">
        <div class="col-md-8">
          <div class="row">

            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name1" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email1" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comment1" placeholder="Comment" rows="5"></textarea>
          <br>
          <div class="row">
            <div class="col-md-12 form-group">
              <button class="btn pull-right" type="submit" name="submit" >Send</button>
            </div>
          </div>
        </div>
        </form>
      </div>';

  }

    ?></main>





  <?php
  include "footer.php" ;
  ?>
