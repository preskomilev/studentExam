<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NETCAMP || TEST YOUR SKILL </title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    
    <?php

      if(@$_GET['w']) {
        echo'<script>alert("'.@$_GET['w'].'");</script>';
      }

    ?>
    
    <script>
      
      function validateForm() {
        
        var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;
        
        if (y == null || y == "") {
          alert("Name must be filled out.");
          return false;
        }
        
        var z =document.forms["form"]["college"].value;
        
        if (z == null || z == "") {
          alert("college must be filled out.");
          return false;
        }
        
        var x = document.forms["form"]["faculty_num"].value;

        if (x == null || x == "") {
          alert("Faculty number must be filled out.");
          return false;
        }
        
        var a = document.forms["form"]["password"].value;
        
        if(a == null || a == "") {
          alert("Password must be filled out");
          return false;
        }
        
        if(a.length<5 || a.length>25) {
          alert("Passwords must be 5 to 25 characters long.");
          return false;
        }
        
        var b = document.forms["form"]["cpassword"].value;
        
        if (a!=b) {
          alert("Passwords must match.");
          return false;
        }

      }

    </script>


  </head>

<body>

  <header>
  <div class="row">
      <div class="col-lg-12">
        <a href="#" class="pull-right btn" data-toggle="modal" data-target="#myModal">
          <button type="button" class="btn btn-primary btn-md">Log in</button>
        </a>
      </div>

    <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="faculty_num"></label>  
                    <div class="col-md-6">
                      <input id="faculty_num" name="faculty_num" placeholder="Enter your faculty_num-id" class="form-control input-md" type="faculty_num">  
                    </div>
                  </div>

                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                  </div>

                </fieldset>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!--sign in modal closed-->
    </div><!--header row closed-->
  </header>

  <section class="main-content">
    <div class="row">
        <div class="col-12">
        <!-- sign in form begins -->  
          <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
        
            <fieldset>
              <div class="form-group">
                <!--  <label class="col-md-12 control-label" for="name"></label>   -->
                <div class="col-md-12">
                  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
                </div>
              </div>

              <div class="form-group">
                <!--  <label class="col-md-12 control-label title1" for="faculty_num"></label> -->
                <div class="col-md-12">
                  <input id="faculty_num" name="faculty_num" placeholder="Enter your faculty_num-id" class="form-control input-md" type="faculty_num">  
                </div>
              </div>

              <div class="form-group">
               <!--  <label class="col-md-12 control-label" for="password"></label> -->
                <div class="col-md-12">
                  <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
                </div>
              </div>

              <div class="form-group">
                <!-- <label class="col-md-12control-label" for="cpassword"></label> -->
                <div class="col-md-12">
                  <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
                </div>
              </div>
        
              <?php 

                if(@$_GET['q7']) { 
                  echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];
                }

              ?>
        
              <div class="form-group">
                <label class="col-md-12 control-label" for=""></label>
                <div class="col-md-12"> 
                  <input  type="submit" value="Sign up" class="btn btn-primary"/>
                </div>
              </div>
            </fieldset>
          </form>
        </div><!--col-md-6 end-->
      </div><!--container end-->
  </section>

  <footer class="footer">
    <div class="container">
      <!-- <div class="col-md-3 box">
        <a href="#" target="_blank">About us</a>
      </div> -->
      <div class="col-md-12 box">
        <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
      </div>
      <!-- <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
      </div> -->
      <!-- <div class="col-md-3 box">
        <a href="feedback.php" target="_blank">Feedback</a>
      </div> -->
    </div>
  </footer>

    <!--Footer start-->
    <!-- <div class="row footer">
      <div class="col-md-3 box">
        <a href="http://www.netcamp.in" target="_blank">About us</a>
      </div>
      <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
      <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
      </div>
      <div class="col-md-3 box">
        <a href="feedback.php" target="_blank">Feedback</a>
      </div>
    </div> -->
    <!-- Modal For Developers-->
    <div class="modal fade title1" id="developers">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
          </div>
        
          <div class="modal-body">
            <p>
        <div class="row">
        <div class="col-md-4">
        <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
        </div>
        <div class="col-md-5">
        <a href="https://www.facebook.com/sunnygkp10" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Sunny Prakash Tiwari</a>
        <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+917785068889</h4>
        <h4 style="font-family:'typo' ">sunnygkp10@gmail.com</h4>
        <h4 style="font-family:'typo' ">Kamla Nehru Institute Of Technology ,Sultanpur</h4></div></div>
        </p>
          </div>
        
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  <!--Modal for admin login-->
    <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form role="form" method="post" action="admin.php?q=index.php">
    <div class="form-group">
    <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
    </div>
    <div class="form-group">
    <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
    </div>
    <div class="form-group" align="center">
    <input type="submit" name="login" value="Login" class="btn btn-primary" />
    </div>
    </form>
    </div><div class="col-md-3"></div></div>
          </div>
          <!--<div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</body>
</html>
