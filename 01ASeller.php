<?php
session_start();
include './mycon.php';

?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>All Seller</title>

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
					  <a class="navbar-brand" href="01AHome.php"><img class="img-responsive img-rounded img-thumbnail" src="pic/logo.png"  alt="Logo"></a>
				</div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li><a href="01AHome.php">Home</a></li>
                                                    <li class="active"><a href="01ASeller.php">Sellers</a></li>
                                                    <li><a href="01AContact.php">Contacts</a></li>
							
							
                                                    <li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<div class="page">
		<div id="breadcrumb-section" class="section">
			<div class="container">
				<div class="page-title text-center">
					<h1>All Registered Sellers</h1>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">All Sellers</li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->
		

		<div class="all-categories section">
			<div class="container">
				<div class="row">
					

					<div class="col-md-12 col-sm-12">
						<div class="category-adds">
							<div id="category-tab">
								
								<div class="category-tab">
									
									<!-- Tab panes -->
                                                                        <h2>
                                                                        <?php
                                                                        if(isset($_SESSION['catsave']))
                                                                        {
                                                                            echo $_SESSION['catsave'];
                                                                            unset($_SESSION['catsave']);
                                                                        }
                                                                        ?>
                                                                        </h2>
								  	<div class="tab-content small-view-tab">
								    	<div role="tabpanel" class="tab-pane active" id="recent">
                                                                            
                                                                         
                                                                                <table  border="1" style="width: 100%; font-weight: bold; font-size: large;">
                                                                                    <tr style="color: darkblue;">
                                                                                        <th>Sr.</th><th>Name</th><th>Age</th><th>Email</th><th>Mobile</th><th>Status</th><th>Option</th>
                                                                                    </tr>
                                                                                    <?php
                                                                                    $q="select * from vender order by name";
                                                                                    $re=$con->query($q);
                                                                                    $i=1;
                                                                                    while($r=$re->fetch_assoc())
                                                                                    {
                                                                                        ?>
                                                                                    <tr>
                                                                                        <td><?php echo $i;?></td>
                                                                                        <td><?php echo $r['name'];?></td>
                                                                                        <td><?php echo $r['age'];?></td>
                                                                                        <td><?php echo $r['email'];?></td>
                                                                                        <?php //echo $r['password'];?>
                                                                                        <td><?php echo $r['mobile'];?></td>
                                                                                        <td><?php echo $r['status'];?></td>
                                                                                        <td><a href="01ASellerProfile.php?id=<?php echo $r['id'];?>">View</a></td>
                                                                                    </tr>
                                                                                    <?php
                                                                                    $i++;
                                                                                    }
                                                                                    
                                                                                    ?>
                                                                            </table>
								    	</div><!-- tab-pane -->	

								    				
								  	</div>
								</div>
							</div><!-- category-tab-->	
						</div>
						
					</div>
				</div>
			</div>
		</div> <!-- all-categories -->
	</div>	<!-- page -->
		
	
	<!-- footer -->
	<?php include './footer.php'; ?>
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

<!-- Mirrored from template.gridbootstrap.com/avt/categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:17:31 GMT -->
</html>