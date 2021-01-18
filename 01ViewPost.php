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

    <title>Hi <?php echo $r['name'];?> | View Post</title>

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
                                                    <li><a href="01VPost.php">Post Add</a></li>
                                                    <li class="active"><a href="01ViewPost.php">View Add</a></li>
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
					<h1>View All Ads !</h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">View Posted Ad</li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->

		<div class="avt-post-wrapper section">
			<div class="container">
				<div class="avt-post">
                                       <?php
                                       if(isset( $_SESSION['vdelete']))
                                       {
                                           echo  $_SESSION['vdelete'];
                                           unset( $_SESSION['vdelete']);
                                       }
                                       
                                       ?>
                                        <fieldset>
							<div class="product-section avtpost-fields">
								<div class="row">
									<div class="col-xs-12">
										<h3>View Your ad</h3>
									</div>
                                                                    <table border="1" style="width: 100%;" class="table table-hover table-striped">
                                                                        <tr>
                                                                            <th>Sr.</th><th>Title</th><th>Category</th><th>Contact</th><th>Mobile</th><th>Price</th><th>Option</th>
                                                                        </tr>
                                                                        <?php
                                                                        $q1="select * from ads where vid=$id";
                                                                        $re1=$con->query($q1);
                                                                       $i=1;
                                                                        while($r1=$re1->fetch_assoc())
                                                                        {
                                                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $i;?></td>
                                                                            <td><?php echo $r1['title'];?></td>
                                                                            <td><?php echo $r1['category'];?></td>
                                                                            <td><?php echo $r['name'];?></td>
                                                                            <td><?php echo $r['mobile'];?></td>
                                                                            <td><?php echo $r1['price'];?></td>
                                                                            <td><a href="01VDetail.php?aid=<?php echo $r1['aid'];?>">Update</a> | <a href="01VDeleteAds.php?aid=<?php echo $r1['aid'];?>">Delete</a></td>
                                                                        </tr>
                                                                        <?php
                                                                        $i++;
                                                                        }
                                                                        
                                                                        ?>
                                                                    </table>		
							
								</div>
							</div><!-- product-section -->

							
							
						</fieldset>
					
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