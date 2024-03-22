 <?php
    include 'config/koneksi.php';
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="author" content="Dashboard">
     <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
     <title>NB - Nongkrong Bareng</title>

     <!-- Favicons -->
     <link href="img/2.png" rel="icon">
     <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

     <!-- Bootstrap core CSS -->
     <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!--external css-->
     <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
     <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
     <!-- Custom styles for this template -->
     <link href="css/style.css" rel="stylesheet">
     <link href="css/style-responsive.css" rel="stylesheet">
     <script src="lib/chart-master/Chart.js"></script>

     <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
 </head>

 <body>
     <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
     <div id="login-page">
         <div class="container">
             <form class="form-login" action="aksi_login.php" method="POST">
                 <h2 class="form-login-heading"><b>NONGKRONG BARENG</b></h2>
                 <div class="login-wrap">
                     <h4 class="centered"><u>Silahkan Login Terlebih Dahulu !!</u></h4>
                     <label for=""> Username</label>
                     <input type="text" name="username" class="form-control" placeholder="Username">
                     <br>
                     <label for="">Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                     <br>
                     <button type="submit" name="login" class="btn btn-theme btn-block"><i class="fa fa-lock"></i> SIGN IN</button>
                     <!--<a target="blank" href="register.php"><h5 class="centered"><u>Register Akun Baru</u></h5></a>-->
                     <hr>
                     <h5 class="centered">Created By : Ahmad Rizal Mustofa</h5>
                     <!-- modal -->
             </form>
         </div>
     </div>
     <!-- js placed at the end of the document so the pages load faster -->
     <script src="lib/jquery/jquery.min.js"></script>
     <script src="lib/bootstrap/js/bootstrap.min.js"></script>
     <!--BACKSTRETCH-->
     <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
     <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
     <script>
         $.backstretch("img/login-bg.jpg", {
             speed: 1000
         });
     </script>
 </body>

 </html>