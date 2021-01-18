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

    <title>Hi <?php echo $r['name'];?> | View Buyer</title>

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
                                                    <li><a href="01ViewPost.php">View Add</a></li>
                                                    <li class="active"><a href="01ViewBuyer.php">View Buyer</a></li>
							
							
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
					<h1>View All Buyer!</h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">View Buyer's</li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->

		<div class="avt-post-wrapper section">
			<div class="container">
				<div class="avt-post">
                                      
                                        <fieldset>
							<div class="product-section avtpost-fields">
								<div class="row">
									<div class="col-xs-12">
										<h3>View Your ad</h3>
									 <?php
                                       if(isset( $_SESSION['bdelete']))
                                       {
                                           echo  $_SESSION['bdelete'];
                                           unset( $_SESSION['bdelete']);
                                       }
                                       
                                       ?>
                                                                        </div>
                                                                    <table border="1" style="width: 100%;" class="table table-hover table-striped">
                                                                        <tr>
                                                                            <th>Sr.</th><th>Name</th><th>Mobile</th><th>Email</th><th>Message</th><th>Item</th><th>Option</th>
                                                                        </tr>
                                                                        <?php
                                                                        $q1="select * from buyer where vid=$id order by duration";
                                                                        $re1=$con->query($q1);
                                                                       $i=1;
                                                                        while($r1=$re1->fetch_assoc())
                                                                        {
                                                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $i;?></td>
                                                                            <td><input type="text" class="form-control" value="<?php echo $r1['name'];?>" disabled="true"/></td>
                                                                            <td><input type="text" class="form-control" value="<?php echo $r1['mobile'];?>" disabled="true"/></td>
                                                                            <td><input type="text" class="form-control" value="<?php echo $r1['email'];?>" disabled="true"/></td>
                                                                            <td><textarea class="form-control" disabled="true"><?php echo $r1['message'];?></textarea></td>
                                                                            <td><a  href="details.php?aid=<?php echo $r1['aid'];?>" target="_blank" ><?php echo $r1['title'];?></a></td>
                                                                            <td><a href="01VBuyerDelete.php?bid=<?php echo $r1['bid'];?>">Delete</a></td>
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