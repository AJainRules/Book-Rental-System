<?php
session_start();
include './mycon.php';
$id=$_SESSION['id'];
$q="select * from vender where id=$id";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{

?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Hi <?php echo $r['name'];?> | Add Post</title>

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
			
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<?php include './01Vlogo.php'; ?>
				</div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li><a href="01VHome.php">Home</a></li>
                                                    <li class="active"><a href="01VPost.php">Post Add</a></li>
                                                    <li><a href="01ViewPost.php">View Add</a></li>
							<li><a href="01ViewBuyer.php">View Buyer</a></li>
							
                                                    <li><a href="logout.php">Logout</a></li>
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
					<h1>Post a free add !</h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Post Ad</li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->

		<div class="avt-post-wrapper section">
			<div class="container">
				<div class="avt-post">
                                    <form action="01VSaveAds.php" method="post" enctype="multipart/form-data">
                                       <?php
                                       if(isset($_SESSION['psave']))
                                       {
                                           echo $_SESSION['psave'];
                                           unset($_SESSION['psave']);
                                       }
                                       
                                       ?>
                                        <input type="hidden" name="vid" value="<?php echo $id;?>"/>	
                                        <fieldset>
							<div class="product-section avtpost-fields">
								<div class="row">
									<div class="col-xs-12">
										<h3>Post Your ad</h3>
									</div>
									
									<div class="col-md-6">
										<div class="post-inner select-cat">
											<div class="row form-group">
												<label class="col-md-4">Select Ad Category: </label>
												<div class="col-md-8">
													<select name="category" id="category-group" class="form-control">
														<option value="General" selected="selected">Select Category</option>
														<?php
                                                                    $qc="select * from category order by name";
                                                                    $rec=$con->query($qc);
                                                                    while($rc=$rec->fetch_assoc())
                                                                    {
                                                                        ?>
                                                                                                                <option><?php echo $rc['name'];?></option>
                                                                                                                <?php
                                                                    }
                                                                    ?>
													</select>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
                                                                    <div class="col-md-6">
										<div class="post-inner">
											<div class="row form-group">
												<label class="col-md-4">Ads Title </label>
												<div class="col-md-8">
                                                                                                    <input type="text" name="title" maxlength="15" required="required" class="form-control" id="text" placeholder="Ad Title Go There"/>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
									<div class="col-md-6">
										<div class="post-inner choose-options">
											<div class="row form-group">
												<label class="col-md-4">Contact Person: </label>
												<div class="col-md-8">
													<div class="row">
														<div class="col-md-12">
                                                                                                                    <input type="text" name="contact" maxlength="15" required="required" class="form-control" id="text" value="<?php echo $r['name'];?>" disabled="true"/>
												</div>
													</div>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
                                                                    <div class="col-md-6">
										<div class="post-inner choose-options">
											<div class="row form-group">
												<label class="col-md-4">Contact Number: </label>
												<div class="col-md-8">
													<div class="row">
														<div class="col-md-12">
                                                                                                                    <input type="text" maxlength="11" name="mobile" required="required" class="form-control" id="text" value="<?php echo $r['mobile'];?>" disabled="true"/>
												</div>
													</div>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
                                                                    <div class="col-md-6">
										<div class="post-inner">
											<div class="row form-group">
												<label class="col-md-4">About: </label>
												<div class="col-md-8">
													<div class="row">
														<div class="col-md-12">
                                                                                                                    <input type="text" name="about" maxlength="20" required="required" class="form-control" id="text" placeholder="About Product"/>
												</div>
													</div>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
									<div class="col-md-6">
										<div class="post-inner">
											<div class="row form-group">
												<label class="col-md-4">Item Price <span>(&#8377; Rupees)</span> :	</label>
												<div class="col-md-8">
													<div class="row">
														<div class="col-md-12">
                                                                                                                    <input id="Price" name="price" required="required" class="form-control" placeholder="Price"  type="number" min="10" max="5000000"/>
														</div>
														
													</div>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
									<div class="col-md-6">
										<div class="post-inner">
											<div class="row form-group">
												<label class="col-md-4">Description: </label>
												<div class="col-md-8">
                                                                                                    <textarea name="description" required="required" class="form-control" id="textarea" placeholder="Write details about your product" rows="6"></textarea>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
									<div class="col-md-6">
										<div class="post-inner">
											<div class="row form-group">
												<label class="col-md-4">Upload Photo: </label>
												<div class="col-md-8">
													<div class="upload-section">
														<label class="upload-image" for="uploadOne">
                                                                                                                    <input type="file" id="uploadOne" name="p1" required="required"  />
														</label>										

														<label class="upload-image" for="uploadTwo">
															<input type="file" id="uploadTwo" name="p2" required="required"/>
														</label>											
														<label class="upload-image" for="uploadThree" >
															<input type="file" id="uploadThree" name="p3" required="required"/>
														</label>	
														<label class="upload-image" for="uploadFour">
															<input type="file" id="uploadFour" name="p4" required="required"/>
														</label>	
													</div>
												</div>
											</div>
										</div><!-- post-inner -->
									</div>
								</div>
							</div><!-- product-section -->

							
							<div class="submit-section">
								<div class="ad-condition checkbox">
									<label for="submit-post">
                                                                            <input type="checkbox" name="agree" required="required" id="submit-post">
										By click you must agree with <a href="#">our  Terms &amp; Condition</a> and
                                    <a href="#">Posting Rules</a>.
									</label>
								</div>
								<div class="submit-button">
									<button class="btn btn-primary" type="submit">Post your ad</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div> <!-- avt-post -->
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

<!-- Mirrored from template.gridbootstrap.com/avt/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:20 GMT -->
</html>
<?php
}
?>