<?php
session_start();



?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">

    <title>Contact </title>

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

  
  </head>

<body>
  <header id="header" class="clearfix">
    <nav class="navbar navbar-default">
      <div class="topbar">
     <?php include './header.php'; ?>
      </div><!-- topbar -->



<div class="container">
       <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
<?php include './logo.php';   ?>
       </div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="products.php">Product</a></li>
							
							
                                                    <li class="active"><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
      </div><!-- container -->
    </nav><!-- navbar -->
  </header><!-- header -->


		<div class="ad-post-wrapper section">
			<div class="container">
				<div class="contact-us">
                                    <h2>Contact Us</h2>
                                    <?php
                                    if(isset($_SESSION['con_save']))
                                    {
                                        echo $_SESSION['con_save'];
                                        unset($_SESSION['con_save']);
                                    }
                                    ?>
					<div class="contact-form-wrapper">
						
                                            <form id="contact-form" class="contact-form" name="contact-form" method="post" action="contactSave.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name"  name="name"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="required" placeholder="Email Id" name="email"/>
                                    </div> 
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" maxlength="10" required="required" placeholder="Mobile Number" name="mobile"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="10" placeholder="Enter your Message"></textarea>
                                    </div>             
                                </div>     
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Submit Message</button>
                            </div>
                        </form><!-- contact form -->  
                    </div> 
				</div>
			</div>
		</div> <!-- ad-post -->
	</div>	<!-- page -->
		
	
	<!-- footer -->
        <footer id="footer">
		<?php include './footer.php'; ?>
	</footer><!-- footer -->

        
	<!-- footer -->

 	
	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/map.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from template.gridbootstrap.com/avt/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:37 GMT -->
</html>