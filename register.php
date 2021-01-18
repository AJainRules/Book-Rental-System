<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Sign Up</title>

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
    <!-- icons -->

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
						<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.php">Home</a></li>
                                                    <li><a href="products.php">Product</a></li>
							
							
                                                    <li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					</div>
				</div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<div class="page">
		<div id="breadcrumb-section" class="section">
			<div class="container">
				<div class="page-title text-center">
					<h1>vendor Sign Up</h1>
					<ol class="breadcrumb">
                                            <li><a href="index.php">Home</a></li>
						<li class="active">Sign Up</li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->

		<div class="ad-post-wrapper section">
			<div class="container">
                            
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
                                           
						<div class="user-form">
                                                   <?php
                                                   if(isset($_SESSION['vsave']))
                                                   {
                                                       echo $_SESSION['vsave'];
                                                       unset($_SESSION['vsave']);
                                                   }
                                                   
                                                   ?>
                                                    <form action="01vendorSave.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
							    	<input type="text" name="name" class="form-control" required="required" placeholder="vendor Name"/>
							    </div>
							    <div class="form-group">
                                                                <input type="number" name="age" min="18" max="60" class="form-control" required="required" placeholder="vendor Age"/>
							    </div>
							    <div class="form-group">
							    	<input type="email" name="email" class="form-control" required="required" placeholder="Email"/>
							    </div>
							    <div class="form-group">
							    	 <input type="password" name="password" class="form-control" required="required" placeholder="Password"/>
							    </div>
							    <div class="form-group">
                                                                <input type="text" name="mobile" maxlength="11" class="form-control" required="required" placeholder="Mobile Number"/>
							    </div>
                                                            <div class="form-group">
                                                                <input type="file" name="pic"  class="form-control" required="required" placeholder="vendor Image" title="vendor Image"/>
							    </div>
							<div class="form-group">
                                                            <textarea name="address" maxlength="190" class="form-control" required="required" placeholder="Address only for Aligarh"></textarea>
							    </div>   
                                                        <button type="submit" class="btn btn-primary">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- ad-post -->
	</div>	<!-- page -->
		
	
	<!-- footer -->
	<footer id="footer">
		<?php include './footer.php'; ?>
	</footer>
        <!-- footer -->

 	
	
      <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from template.gridbootstrap.com/avt/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:19 GMT -->
</html>