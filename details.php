<?php
session_start();
include './mycon.php';
$aid=$_REQUEST['aid'];
$q="select * from ads where aid='$aid'";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title><?php echo $r['title'];?></title>

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
					<?php include './logo.php'; ?>
				</div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li><a href="index.php">Home</a></li>
                                                    <li class="active"><a href="products.php">Product</a></li>
							
							
                                                    <li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<div class="page">
            <div id="breadcrumb-section" class="section" style="height: 180px;">
			<div class="container">
				<div class="page-title text-center">
					<h1><?php echo $r['title'];?></h1>
					<?php
                                        if(isset($_SESSION['b_save']))
                                        {
                                            echo '<h2>'.$_SESSION['b_save'].'</h2>';
                                            unset($_SESSION['b_save']);
                                        }
                                        else
                                        {
                                            ?>
                                        <ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Ads</li>
					</ol>
                                        <?php
                                        }
                                        ?>
				</div>
			</div>
		</div><!-- breadcrumb-section -->
		

		<div class="all-categories section">
			<div class="container">
				<div class="ad-details">
					<div class="row">
						<div class="col-md-8 col-sm-7">
                                                    
							<div class="item">
		    					<div class="detail-item-image item-image carousel slide" data-ride="carousel">
		    						<div class="carousel-inner">
		    							<div class="item active">
                                                                            <img src="pic/ads/<?php echo $r['p1'];?>" alt="" class="img-responsive img-rounded img-thumbnail" style="width: 400px; height: 400px;"/>
		    							</div>
		    							<div class="item">
		    								<img src="pic/ads/<?php echo $r['p2'];?>" alt="" class="img-responsive img-rounded img-thumbnail" style="width: 400px; height: 400px;"/>
		    							</div>
		    							<div class="item">
		    								<img src="pic/ads/<?php echo $r['p3'];?>" alt="" class="img-responsive img-rounded img-thumbnail" style="width: 400px; height: 400px;"/>
		    							</div>
		    						</div>
		    						
								  	<div class="item-price">
										<span>&#8377; <?php echo $r['price'];?>/-</span>
									</div>
								</div>
								<div class="details-description">
									<div class="item-info item-meta">
										<div class="item-post-date">
											<span><i class="fa fa-clock-o"></i><?php echo $r['duration'];?></span>
										</div>
										<div class="ad-title">
											<h3><?php echo $r['title'];?></h3>
										</div>
										
									</div><!-- item-info -->
									<div class="item-info">
										<h4>Description</h4>
                                                                                <p><?php echo $r['description'];?></p>	
                                                                        </div><!-- item-info -->
									
								</div>
		    				</div><!-- item -->
		    				
						</div>


						<div class="col-sm-5 col-md-4">
							<div class="side-bar">
								<?php
                                                                $vid = $r['vid'];
                                                                $q1="select * from vender where id=$vid";
                                                                $re1=$con->query($q1);
                                                                if($r1=$re1->fetch_assoc())
                                                                {
                                                                    ?>
                                                            <div class="item-author widget">
									<h4>Seller Info</h4>
									<div class="row">
										<div class="col-md-4">
											<div class="seller-image">
                                                                                            <img class="img-responsive img-rounded img-thumbnail" src="pic/vender/<?php echo $r1['pic'];?>" alt="seller" style="width: 100%; height: 100px;">
											</div>
										</div>
										<div class="col-md-8">
											<div class="seller-info">
												<p><span>Seller:</span> <a href="#"><?php echo $r1['name'];?></a></p>
												<address>
													<span>Address:</span><?php echo $r1['address'];?>
												</address>
												<p><span>Mobile :</span><?php echo $r1['mobile'];?> </p>
												<p><span>Email :</span><?php echo $r1['email'];?> </p>
											</div>
										</div>
									</div>
								</div>
                                                            <?php
                                                                }
                                                                
                                                                ?>
								<div class="contact-seller widget">
									<h4>Contact Seller</h4>
                                                                        <form id="contact-form" class="contact-form" name="contact-form" method="post" action="buyserSave.php">
                                                                            <input type="hidden" name="vid" value="<?php echo $vid;?>"/>	
                                                                            <input type="hidden" name="aid" value="<?php echo $aid;?>"/>
                                                                            <input type="hidden" name="title" value="<?php echo $r['title'];?>"/>
                                                                            <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" required="required" placeholder="Name" name="name"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
                                                                                                    <input type="email" class="form-control" required="required" placeholder="Email Id" name="email"/>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                                                                                                    <input type="text" class="form-control" maxlength="10" required="required" placeholder="Mobile Number" name="mobile"/>
												</div> 
											</div> 
											
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Message"></textarea>
												</div>             
											</div>     
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Submit Message</button>
										</div>

									</form>
								</div>
								
								
							</div><!-- side-bar -->
						</div>
					</div>
				</div>
			</div>
		</div> <!-- all-categories -->
	</div>	<!-- page -->
		
	
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
	<script src="js/map.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from template.gridbootstrap.com/avt/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:36 GMT -->
</html>
<?php
}
?>