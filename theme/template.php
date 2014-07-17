<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Designith | Web Application</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css"/>
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="js/datatables/datatables.css" type="text/css"/>

<!--external css-->
<?php if(isset($fontstyle)) { echo $fontstyle; } ?>
<link rel="stylesheet" href="css/login.css" type="text/css"/>

<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<?php 
if (isset($desactive_body)) { echo $body; }

else { ?>

<body class="">
<section class="vbox">
  
  <?php include 'content/pages/modules/header.php'; ?> 

    <section>
      <section class="hbox stretch">

        <!-- .aside -->

        <?php include 'content/pages/modules/sidebar.php'; ?> 

        <!-- /.aside -->

        <section id="content">
          <section class="hbox stretch">


            <?php echo $content;?>


          </section> <!-- ok -->
        </section> <!-- ok -->

      </section> <!-- ok -->
    </section> <!-- ok --> 

</section> <!-- ok -->

<!-- Bootstrap -->
<!-- App -->

<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
<script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/jPlayer/demo.js"></script>
<script src="js/datatables/demo.js"></script>
<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables/jquery.csv-0.71.min.js"></script>

  <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
    $('#example').dataTable( {
      "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
      "sPaginationType": "full_numbers"
    } );
} );
  </script>

</body>
<?php } ?>
</html>