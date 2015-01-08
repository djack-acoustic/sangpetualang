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
	<nav class="navbar navbar-default">
        <div class="container" >
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><b>Sang Petualang</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a class="page-scroll" href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Beranda</a>
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
                        <a href="register.php">
                          <span class="glyphicon glyphicon-"></span>&nbsp;&nbsp;Login <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                  	</li>
                </ul>
            </div>
        </div>
    </nav>    
    <!-- Page Content -->
    <div class="container" style="min-height:680px;">
        <div class="col-md-6 col-lg-4">
            <h2 class="list-group-item">Daftar Gunung</h2>
            <div class="panel-group" id="accordion"  aria-multiselectable="true">
              	<div class="panel panel-default">
                	<div class="panel-heading" role="tab" id="headingOne">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Jawa Barat</a>
                        </h5>
                	</div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="nav panel-body">
                            <li>
                                <a href="?halaman=ciremai">Gunung Cermai</a>
                            </li>
                            <li>
                                <a href="?halaman=salak">Gunung Salak</a>
                            </li>
                            <li>
                                <a href="#">Gunung Pangrango</a>
                            </li>
                            <li>
                                <a href="#">Gunung Gede</a>
                            </li>
                            <li>
                                <a href="#">Gunung Cikurai</a>
                            </li>
                            <li>
                                <a href="#">Gunung Guntur</a>
                            </li>
                        </div>
                    </div>
            	</div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Jawa Tengah
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="nav panel-body">
                            <li>
                                <a href="?halaman=slamet">Gunung Slamet</a>
                            </li>
                            <li>
                                <a href="?halaman=sindoro">Gunung Sundoro</a>
                            </li>
                            <li>
                                <a href="#">Gunung Sumbing</a>
                            </li>
                            <li>
                                <a href="#">Gunung Merbabu</a>
                            </li>
                            <li>
                                <a href="#">Gunung Lawu</a>
                            </li>
                            <li>
                                <a href="#">Gunung Ungaran</a>
                            </li>
                        </div>
                    </div>
             	</div>  
              	<div class="panel panel-default">
              		<div class="panel-heading" role="tab" id="headingThree">
                  		<h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Jawa Timur
                            </a>
                  		</h4>
                	</div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="nav panel-body">
                            <li>
                                <a href="#">Gunung Semeru</a>
                            </li>
                            <li>
                                <a href="#">Gunung Argapura</a>
                            </li>
                            <li>
                                <a href="#">Gunung Arjuna</a>
                            </li>
                            <li>
                                <a href="#">Gunung Bromo</a>
                            </li>
                            <li>
                                <a href="#">Gunung Baluran</a>
                            </li>
                            <li>
                                <a href="#">Gunung Pandan</a>
                            </li>
                            <li>
                                <a href="#">Gunung Kelud</a>
                            </li>
                        </div>
                    </div>
          		</div>            
    		</div>
    	</div>
        <div class="container">
            <div class="row">   
                <div class="well-lg">
                    <div class="col-md-8">
                        <!--<h4>Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan kata kunci">
                            <span class="input-group-btn"> 
                                <div>
                                    <button type="search" class="btn btn-primary"> <span class="glyphicon glyphicon-search" style="padding:3px;"></span></button>
                                </div>
                            </span>
                        </div><br />-->
                        <?php
                            if(empty($_GET['halaman'])){
                                include("page/ciremai.php");
                            }
                            else {
                                include("page/$_GET[halaman].php");
                            }
                        ?>
            		</div>                           
        		</div>
            </div>
        </div>
	</div><br /><br />
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