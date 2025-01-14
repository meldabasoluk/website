<?php
include 'nedmin/netting/baglan.php';

//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id' => 0
	));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $ayarcek['ayar_title'] ?></title>
	<meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
	<meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
  	<div id="wrapper">
  		<div class="header"><!--Header -->
  			<div class="container">
  				<div class="row">
  					
  					<div class="col-md-8">
  						<div class="pushright">
  							<div class="top">
  							>
  								<div class="regwrap">
  									<div class="row">
  										
  										
  									</div>
  								</div>
  								
  								<div class="srchwrap">
  									<div class="row">
  										<div class="col-md-12">
  											<form class="form-horizontal" role="form">
  												<div class="form-group">
  													<label for="search" class="col-sm-2 control-label">Search</label>
  													<div class="col-sm-10">
  														<input type="text" class="form-control" id="search">
  													</div>
  												</div>
  											</form>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="dashed"></div>
  		</div><!--Header -->
  		<div class="main-nav"><!--end main-nav -->
  			<div class="navbar navbar-default navbar-static-top">
  				<div class="container">
  					<div class="row">
  						<div class="col-md-10">
  							<div class="navbar-header">
  								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  									<span class="icon-bar"></span>
  									<span class="icon-bar"></span>
  									<span class="icon-bar"></span>
  								</button>
  							</div>
  							<div class="navbar-collapse collapse">
  								<ul class="nav navbar-nav">
  									<li><a href="index.php" class="active">Anasayfa</a><div class="curve"></div></li>
  									
  									<li class="dropdown">
  										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ödevler <b class="caret"></b></a>
  										<ul class="dropdown-menu">
  											<li><a href="odev1.html">Ödev 1</a></li>
  											<li><a href="odev2.html">Ödev 2</a></li>
  											<li><a href="odev3.html">Ödev 3</a></li>
  											<li><a href="odev4.php">Ödev 4</a></li>
  											<li><a href="odev5.html">Ödev 5</a></li>
  											<li><a href="odev6.php">Ödev 6</a></li>
  											
  										</ul>
  									</li>
  									<li><a href="hakkimizda.php">Hakkımızda</a></li>
  									<li><a href="hizmetler.php">Hizmetler</a></li>
  									<li><a href="iletisim.php">İletişim</a></li>
  									<li><a href="referans.php">Referans</a></li>
  								</ul>
  							</div>
  						</div>
  						<div class="col-md-2 machart">
  							
  							<div class="popcart">
  								<table class="table table-condensed popcart-inner">
  									<tbody>
  										<tr>
  											<td>
  												<a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
  											</td>
  											<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
  											<td>1X</td>
  											<td>$138.80</td>
  											<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
  										</tr>
  										<tr>
  											<td>
  												<a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
  											</td>
  											<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
  											<td>1X</td>
  											<td>$138.80</td>
  											<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
  										</tr>
  										<tr>
  											<td>
  												<a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
  											</td>
  											<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
  											<td>1X</td>
  											<td>$138.80</td>
  											<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
  										</tr>
  									</tbody>
  								</table>
  								<span class="sub-tot">Sub-Total : <span>$277.60</span> | <span>Vat (17.5%)</span> : $36.00 </span>
  								<br>
  								<div class="btn-popcart">
  									<a href="checkout.htm" class="btn btn-default btn-red btn-sm">Checkout</a>
  									<a href="cart.htm" class="btn btn-default btn-red btn-sm">More</a>
  								</div>
  								<div class="popcart-tot">
  									<p>
  										Total<br>
  										<span>$313.60</span>
  									</p>
  								</div>
  								<div class="clearfix"></div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
	</div><!--end main-nav -->