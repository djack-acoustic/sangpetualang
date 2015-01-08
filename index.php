<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sang Petualang</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   	<link href="css/custom.css" rel="stylesheet">
    <style>
		H2{color:#fff;}
	</style>
  
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->
    
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container" >
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><b>Sang Petualang</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="beranda.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Beranda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="gallery.php"><span class="glyphicon glyphicon-camera"></span>&nbsp;Galery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="event.php"><span class="glyphicon glyphicon-flag"></span>&nbsp;Event</a>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" class="dropdown">
                        <a href="login.php">
                            &nbsp;&nbsp;Login <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                  	</li>
                    <!-- <li role="presentation" class="dropdown">
                        <a href="model/logout.php">
                            &nbsp;&nbsp;Logout <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>    
    <!-- Page Content -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/slideshow/s1.png" alt="...">
                <div class="carousel-caption">
                    <H2>PUNCAK PRAU</H2>
                    <p class="text-muted"><b>Dieng</b></p>
                </div>
            </div>
            <div class="item">
                <img src="img/slideshow/s2.png" alt="...">
                <div class="carousel-caption">
                    <H2>FOTO BARENG PATRAPALA</H2>
                    <p class="text-muted"><b>Comunitas Pecinta Alam Pertamina</b></p>
                </div>
            </div>
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
	</div>
    
    <center>    
        <div class="panel-footer">
            Pongtech Studio &copy; 2014
        </div>
    </center>


	<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		$(function () {
		  $('[data-toggle="popover"]').popover()
		})
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
        })        
    </script>      
    
</body>
</html>