

<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Musik | Web Application</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<?php 
$desactive_body=true;
ob_start(); 
?>

<body class="bg-light dk">
<section id="content">
  <div class="row m-n">
    <div class="col-sm-4 col-sm-offset-4">
      <div class="text-center m-b-lg">
        <h1 class="h text-white animated fadeInDownBig">404</h1>
      </div>
      <div class="list-group auto m-b-sm m-b-lg"> <a href="index.html" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <i class="fa fa-fw fa-home icon-muted"></i> Goto homepage </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <i class="fa fa-fw fa-question icon-muted"></i> Send us a tip </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge bg-info lt">021-215-584</span> <i class="fa fa-fw fa-phone icon-muted"></i> Call us </a> </div>
    </div>
  </div>
</section>
<!-- footer -->
<footer id="footer">
  <div class="text-center padder clearfix">
    <p> <small>Web app framework base on Bootstrap<br>
      &copy; 2014</small> </p>
  </div>
</footer>
<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
<script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
<?php 
$body=ob_get_contents();
ob_end_clean(); 
?>
</html>
