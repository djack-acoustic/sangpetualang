<?php
	include("model/peserta.php");
  include("model/admin.php");
	include('../koneksi.php');
  session_start();
  
  if(!isset($_SESSION['admin_username'])){
      $user = $_SESSION['admin_username'];
            header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf‐8">
    <meta http-equiv="X‐UA‐Compatible" content="IE=edge">
    <meta name="viewport" content="width=device‐width, initial‐scale=1">
    <title>Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    
    <!-- <‐‐[if lt IE 9]> -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- <![endif]‐‐> -->
  </head>
  <body> 
  	<nav class="navbar navbar-default">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../index.php"><b>Sang-Petualang</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" class="dropdown">
                        <a data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo "$user";?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="model/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
		if(empty($_GET['content'])){
			include("content/lihat.php");
		}
		else {
			include("content/$_GET[content].php");
		}
	?>
    
    <center>    
        <div class="panel-footer">
            Pongtech Studio &copy; 2014   
        </div>
    </center>


    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">        
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		$(function () {
   		    $('[data-toggle="popover"]').popover()
		    $('#element').popover('show')
			$('#element').popover('hide')
			$('#element').popover('toggle')
			$('#element').popover('destroy')
		})
		$('#myPopover').on('hidden.bs.popover', function () {
        // do something…
  		
		})
		
		
    </script>      
  </body>
</html>