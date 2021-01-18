<?php
session_start();
include './mycon.php';
$id=$_SESSION['id'];
$q="select * from vender where id=$id";
$re=$con->query($q);
if($r=$re->fetch_assoc())
{
    $aid=$_REQUEST['aid'];
    $q1="select * from ads where aid=$aid";
    $re1=$con->query($q1);
    if($r1=$re1->fetch_assoc())
    {

?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title><?php echo $r1['title'];?></title>

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
					<a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li><a href="01VHome.php">Home</a></li>
                                                    <li><a href="01VPost.php">Post Add</a></li>
                                                    <li class="active"><a href="01ViewPost.php">View Add</a></li>
							
							
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
					<h1><?php echo $r1['title'];?></h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active"><?php echo $r1['category'];?></li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->

		
		<!-- search-section -->

						
		<!-- avt-category -->
		<div id="avt-category" class="clearfix">
			<div class="container">
				<div class="section services">
                                    <?php
                                    if(isset($_SESSION['pupdate']))
                                    {
                                        echo $_SESSION['pupdate'];
                                        unset($_SESSION['pupdate']);
                                    }
                                    ?>
					<div class="row">
                                            
						<div class="col-sm-6 col-md-3">
							<div class="category-avt">
								<div class="category-icon">
                                                                    <img src="pic/ads/<?php echo $r1['p1'];?>" style="width: 250px; height: 200px;"  class="img-responsive img-rounded img-thumbnail"/>
								</div>
                                                            <form action="01VPicUpdate.php" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" value="<?php echo $r1['aid'];?>" name="aid"/>
                                                                <input type="file" name="p1" required="required" class="form-control"/>
                                                                <input type="submit" value="Change Pic"  style="color: white; font-weight: bold;" class="form-control btn-success"/>
                                                            </form>
								
							</div><!-- category-avt -->	
						</div>
                                            <div class="col-sm-6 col-md-3">
							<div class="category-avt">
								<div class="category-icon">
                                                                    <img src="pic/ads/<?php echo $r1['p2'];?>" style="width: 250px; height: 200px;"  class="img-responsive img-rounded img-thumbnail"/>
								</div>
                                                            <form action="01VPicUpdate.php" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" value="<?php echo $r1['aid'];?>" name="aid"/>
                                                                <input type="file" name="p2" required="required" class="form-control"/>
                                                                <input type="submit" value="Change Pic"  style="color: white; font-weight: bold;" class="form-control btn-success"/>
                                                            </form>
								
							</div><!-- category-avt -->	
						</div>
                                            <div class="col-sm-6 col-md-3">
							<div class="category-avt">
								<div class="category-icon">
                                                                    <img src="pic/ads/<?php echo $r1['p3'];?>" style="width: 250px; height: 200px;"  class="img-responsive img-rounded img-thumbnail"/>
								</div>
                                                            <form action="01VPicUpdate.php" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" value="<?php echo $r1['aid'];?>" name="aid"/>
                                                                <input type="file" name="p3" required="required" class="form-control"/>
                                                                <input type="submit" value="Change Pic"  style="color: white; font-weight: bold;" class="form-control btn-success"/>
                                                            </form>
								
							</div><!-- category-avt -->	
						</div>
                                            <div class="col-sm-6 col-md-3">
							<div class="category-avt">
								<div class="category-icon">
                                                                    <img src="pic/ads/<?php echo $r1['p4'];?>" style="width: 250px; height: 200px;"  class="img-responsive img-rounded img-thumbnail"/>
								</div>
                                                             <form action="01VPicUpdate.php" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" value="<?php echo $r1['aid'];?>" name="aid"/>
                                                                <input type="file" name="p4" required="required" class="form-control"/>
                                                                <input type="submit" value="Change Pic"  style="color: white; font-weight: bold;" class="form-control btn-success"/>
                                                            </form>
								
							</div><!-- category-avt -->	
						</div>
                                       
						
						
					</div>
				</div><!-- services -->	
                                <form action="01VUpdateAds.php" method="post" class="form-group">
                                    <input type="hidden" value="<?php echo $r1['aid'];?>" name="aid"/>
                                        <table border="1" style="width: 100%; color: darkgray; font-weight: bold; text-align: left; vertical-align: central;"  class="table table-hover table-striped">
                                           <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Update Ads" class="form-control btn-primary" style="color: white;"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Title<br/>
                                                    <input type="text" name="title" value="<?php echo $r1['title'];?>" class="form-control"/>
                                                </td>
                                                <td>Category<br/>
                                                    <input type="text" name="category" value="<?php echo $r1['category'];?>" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td>Contact<br/>
                                                    <input type="text" name="contact" disabled="true" value="<?php echo $r['name'];?>" class="form-control"/>
                                                </td>
                                                <td>Mobile<br/>
                                                    <input type="text" name="mobile" disabled="true" value="<?php echo $r['mobile'];?>" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td>About<br/>
                                                    <input type="text" name="about" value="<?php echo $r1['about'];?>" class="form-control"/>
                                                </td>
                                                <td>Price<br/>
                                                    <input type="text" name="price" value="<?php echo $r1['price'];?>" class="form-control"/></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    Description<br/>
                                                    <textarea name="description" required="required" class="form-control" style="height: 100px;"><?php echo $r1['description'];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Update Ads" class="form-control btn-primary" style="color: white;"/>
                                                </td>
                                            </tr>
                                        </table>
                                        </form>
			</div><!-- container -->
                        
		</div><!-- avt-category -->

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

<!-- Mirrored from template.gridbootstrap.com/avt/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:26 GMT -->
</html>
<?php
    }
}

?>