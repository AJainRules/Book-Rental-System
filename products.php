<?php
session_start();
include './mycon.php';
$name="Category";
if(isset($_REQUEST['name']))
{
$name= $_REQUEST['name'];
}
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

    <title><?php echo $name;?> Buy or Sell</title>

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
<?php include './logo.php'; ?>				</div><!-- /navbar-header -->
				
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
		<div id="breadcrumb-section" class="section">
			<div class="container">
				<div class="page-title text-center">
					<h1>All <?php echo $name;?> Ads Here</h1>
					<ol class="breadcrumb">
                                            <li><a href="index.php">Home</a></li>
						<li class="active">All <?php echo $name;?></li>
					</ol>
				</div>
			</div>
		</div><!-- breadcrumb-section -->
		

		<div class="all-categories section">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="sidebar">
							<div class="filter-list">
                                                            <h4 class="list-title"><a href="#">Categories</a></h4>
								<ul class="list-group">
                                                                    <?php
                                                                    $qc="select * from category order by name";
                                                                    $rec=$con->query($qc);
                                                                    while($rc=$rec->fetch_assoc())
                                                                    {
                                                                        ?>
                                                                    <li><a href="products.php?name=<?php echo $rc['name'];?>"><?php echo $rc['name'];?><span>(1317)</span></a></li>
                                                                    <?php
                                                                    }
                                                                    
                                                                    ?>
													</ul>
							</div><!-- filter-list -->

										
							
							
						</div><!-- sidebar -->
					</div><!-- col-sm-4 -->

					<div class="col-md-9 col-sm-8">
						<div class="category-adds">
							<div id="category-tab">
								
								<div class="category-tab">
									
									<!-- Tab panes -->

								  	<div class="tab-content small-view-tab">
								    	<div role="tabpanel" class="tab-pane active" id="recent">
								    		<ul>
								    		<?php
                                                                                $q="select * from ads order by title";
                                                                                if($name!='Category'){
                                                                                $q="select * from ads where category='$name'  order by title";
                                                                                }
                                                                                $re=$con->query($q);
                                                                                while($r=$re->fetch_assoc())
                                                                                {
                                                                                    ?>
                                                                                    <li class="item-wrap">
								    				<div class="item">
								    					<div class="item-image">
                                                                                                            <a href="details.php?aid=<?php echo $r['aid'];?>"><img src="pic/ads/<?php echo $r['p1'];?>" alt="Sorry Image Not Available" style="width: 300px; height: 230px;" alt="" class="img-responsive img-rounded img-thumbnail"></a>
															<div class="item-price">
																<span>&#8377; <?php echo $r['price'];?>/-</span>
															</div> 
														</div>
														<div class="item-description">
															<div class="item-meta">
																<div class="item-post-date">
																	<span>Post on : <?php echo $r['duration'];?></span>
																</div>
																
															</div>
															<div class="item-title">
																<h3><a href=""><?php echo $r['title'];?></a></h3>
															</div>
															<div class="item-info">
																<p><?php echo $r['about'];?></p>
															</div>
														</div><!-- item-description -->
								    				</div><!-- item -->
								    			</li>
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                    <!-- item-wrap -->

								    			
						

																
			
								    						
								    		</ul>
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