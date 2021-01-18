<?php
session_start();
include './mycon.php';
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:13:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Book Rental System</title>

   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/responsive.css">
	
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- favicon icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header id="header" class="clearfix">
		<nav class="navbar navbar-default">
		<?php include './header.php'; ?>	
                    <!-- topbar -->

			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				<?php    include 'logo.php';?>
                                </div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.php">Home</a></li>
                                                    <li><a href="products.php">Product</a></li>
							
							
                                                    <li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
	
	<div class="home-page">
		<div id="home-section" class="parallax-section carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" style="background-image:url(images/bg/slide111.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="slider-content">
                                                                    <h1>Books at your Doorstep!</h1>
									<h2 data-animation="animated lightSpeedIn">Looking for Books?</h2>
									<p data-animation="animated lightSpeedIn">Your serach ends here!
You can rent  |  buy  |  sell books with easy steps.</p>
									<div class="ad-btn">
													</div>
								</div>
							</div>
						</div><!-- row -->
					</div><!-- contaioner -->
				</div><!-- item -->

				<div class="item" style="background-image:url(images/bg/slide2.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="slider-content">
									<h1 data-animation="animated lightSpeedIn">For Rent!</h1>
									<h2 data-animation="animated lightSpeedIn">Do you have lot of books? Give them on rent.</h2>
									<p data-animation="animated lightSpeedIn">Register yourself with easy steps, and start earning by giving books on Rent. </p>
									<div class="ad-btn">
																			</div>
								</div>
							</div>
						</div><!-- row -->
					</div><!-- contaioner -->
				</div><!-- item -->
				<div class="item" style="background-image:url(images/bg/slide113.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="slider-content">
									<h1 data-animation="animated lightSpeedIn">For Buy!</h1>
									<h2 data-animation="animated lightSpeedIn">Buy or Sell old books.</h2>
									<p data-animation="animated lightSpeedIn">Buy or sell your used books with few easy steps.</p>
									<div class="ad-btn" >
									</div>
								</div>
							</div>
						</div><!-- row -->
					</div><!-- contaioner -->
				</div><!-- item -->
			</div>
			<a class="left carousel-control" href="#home-section" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
			  	<a class="right carousel-control" href="#home-section" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
		  	</a>
		</div><!-- #home-section -->

		<div id="search-section">
			<div class="container">
                           		</div>
		</div>
		<!-- search-section -->

						
		<!-- avt-category -->
		<div id="avt-category" class="clearfix">
			<div class="container">
				<div class="section services">
					
					<div class="row">
						<?php
                                                $q1="select * from category";
                                                $re1=$con->query($q1);
                                                while($r1=$re1->fetch_assoc())
                                                {
                                                    ?>
                                            <div class="col-sm-6 col-md-3">
							<div class="category-avt">
								<div class="category-icon">
                                                                    <a href="products.php?name=<?php echo $r1['name'];?>"><img src="pic/category/<?php echo $r1['pic'];?>" alt="images" class="img-responsive img-rounded img-thumbnail" style="width: 100px; height: 100px;"></a>
								</div>
								<h5><a href="#"><?php echo $r1['name'];?> <span>(10 ads)</span></a> </h5>
								<ul>
									<li><a href="#"><?php echo $r1['p1'];?></a></li>
									<li><a href="#"><?php echo $r1['p2'];?></a></li>
									<li><a href="#"><?php echo $r1['p3'];?></a></li>
									<li><a href="#"><?php echo $r1['p4'];?></a></li>
									<li><a href="#"><?php echo $r1['p5'];?></a></li>
								</ul>
							</div><!-- category-avt -->	
						</div>
                                            <?php
                                                }
                                                
                                                ?>
						
						
					</div>
				</div><!-- services -->	
			</div><!-- container -->
		</div><!-- category-avt -->

		
		


		<!-- category-tab-->	

<!-- #blog section -->

		
		<!-- newsletter -->
		<!-- #newsletter -->

	</div><!-- .home-page -->
	
	<!-- footer -->
	<footer id="footer">
		<?php include './footer.php'; ?>
	</footer><!-- footer -->

	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from template.gridbootstrap.com/avt/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:16:48 GMT -->
</html>