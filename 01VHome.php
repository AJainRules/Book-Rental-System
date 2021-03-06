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
  
<!-- Mirrored from template.gridbootstrap.com/avt/blog-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Hi <?php echo $r['name'];?></title>

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
			
				<!-- topbar -->

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
                                                    <li class="active"><a href="01VHome.php">Home</a></li>
                                                    <li><a href="01VPost.php">Post Add</a></li>
                                                    <li><a href="01VPost.php">View Add</a></li>
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
					<h1>Hi <?php echo $r['name'];?></h1>
					<ol class="breadcrumb">
                                            <li><a href="01VHome.php">Home</a></li>
						<li class="active">About Me</li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->

		<div class="ad-post-wrapper section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
                                            <?php
                                            if(isset($_SESSION['uv']))
                                            {
                                                echo $_SESSION['uv'];
                                                unset($_SESSION['uv']);
                                            }
                                            ?>
                                            <form  class="form-group" action="01VUpdate.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $r['id'];?>"/>
                                                <table border="1" style="width: 100%;" class="table">
                                                    <tr>
                                                        <td colspan="2">
                                                            <input type="submit" value="Update Information" class="form-control btn-primary" style="color: white;font-weight: bold;"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td><input type="text" name="name" value="<?php echo $r['name'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Age</td>
                                                        <td><input type="text" name="age" value="<?php echo $r['age'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><input type="text" name="email" value="<?php echo $r['email'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password</td>
                                                        <td><input type="text" name="password" value="<?php echo $r['password'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile</td>
                                                        <td><input type="text" name="mobile" value="<?php echo $r['mobile'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td><input type="text" name="status" disabled="true" value="<?php echo $r['status'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td>
                                                    <textarea name="address" maxlength="190" class="form-control" required="required" ><?php echo $r['address'];?></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <input type="submit" value="Update Information" class="form-control btn-primary" style="color: white;font-weight: bold;"/>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							
                                                    
							
							
								<div class="widget-content">
                                                                    <img src="pic/vender/<?php echo $r['pic'];?>" style="width: 300px; height: 300px;" class="img-responsive img-rounded"/>	
                                                                    <form action="01VUpdatePic.php" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id" value="<?php echo $r['id'];?>"/>
                                                                        <table border="0" style="width: 100%;" class="form-group">
                                                                            <tr>
                                                                                <td><input type="file" name="pic" required="required" class="form-control"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="submit" style="color: white;font-weight: bold;" value="Update Image" class="form-control btn-success" /></td>
                                                                            </tr>
                                                                        </table>
                                                                    </form>
								</div>
							<!-- widget -->
							
						</div><!-- sidebar -->
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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from template.gridbootstrap.com/avt/blog-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:39 GMT -->
</html>
<?php
}
?>