<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
$error='failed to connect';
$db =mysqli_connect('localhost','root','Ln4iA7XPD4F4','farm') or die($error);
@define('BASEURL', $_SERVER['DOCUMENT_ROOT']);
$query="SELECT * FROM settings WHERE `id`=1";
$st=$db->query($query);
$show=mysqli_fetch_assoc($st)

?>
<!DOCTYPE html>
<html>
<head>
<title>Ayisla NG</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fetch Villa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->

<!--//web-fonts-->


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
	section {
    padding-top: 4rem;
    padding-bottom: 5rem;
    background-color: #f1f4fa;
}
.wrap {
    display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.wrap:hover {
    background: linear-gradient(135deg,#6394ff 0%,#0a193b 100%);
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}
.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}
h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.display-5 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;
}
.mbr-bold {
    font-weight: 700;
}

 p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
</style>
<body>
	<script>
	  var boxheight = $('.carousel-inner').height();
	var itemlength = $('.item').length;
	var triggerheight = Math.round(boxheight/itemlength+1);
	$('.list-group-item').height(triggerheight);
	
	var clickEvent = false;
	$('#myCarousel').carousel({
		interval:   4000	
	}).on('click', '.list-group li', function() {
			clickEvent = true;
			$('.list-group li').removeClass('active');
			$(this).addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.list-group').children().length -1;
			var current = $('.list-group li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.list-group li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
	$('#maindiv').width($('#div1').width());
	</script>
<!--/main-header-->
<div class="top-main" id="home">
   <div class="header-top">
				<div class="w3l_header_left">
					<ul>
						<li><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com"><?=$show['email'];?></a></li>
						<li><span class="fa fa-phone-square" aria-hidden="true"></span><?=$show['tell1']?></li>
					</ul>
				</div>
				<div class="w3l_header_right">
					<ul class="top-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>

				</div>
				<div class="clearfix"> </div>
   </div>

   <div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<img src="assets/images/logo.png" style="height:100px;width:150px;border-radius:150px;" alt="">
					
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1" id="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a class="scroll" href="index.php">HOME</a></li>
							<li><a href="about.php" class="scroll hvr-bounce-to-bottom">ABOUT US</a></li>
							<li><a href="products.php" class="scroll hvr-bounce-to-bottom">OUR PRODUCTS</a></li>
							
							<li><a href="contactus.php" class="scroll hvr-bounce-to-bottom">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		
			
		</div>
	</div>
	<div class="welc">
				<marquee><?=$show['txtslide']?></marquee>
		</div><br>
<div class="container-fluid">
	<div class="row wlc">
		
	</div>
</div>
