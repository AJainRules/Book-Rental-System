<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from template.gridbootstrap.com/avt/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:13:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>All Products</title>

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
                                    <a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li class="active"><a href="index.php">Home</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="product.php">Product</a></li>
							
							
                                                    <li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
	
	<div class="home-page">
		<!-- #home-section -->

		
		<!-- search-section -->

						
		<!-- avt-category -->
		

		
		
		


		<div class="section">
			<div class="container">
				<div class="section-title">
					<div class="title-content">
						<h2>Browse Advertisement</h2>
					</div>
				</div>
				<div class="category-adds">
						<div id="category-tab">
							<div class="tab-view">
								<ul class="list-inline">
									<li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i></li>
									<li class="small-view-tab"><i class="fa fa-th" aria-hidden="true"></i></li>
									<li class="list-view-tab active"><i class="fa fa-th-list" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="category-tab">
								<ul class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Vehicles</a></li>
								   <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
								   <li role="presentation"><a href="#rendom" aria-controls="rendom" role="tab" data-toggle="tab">Rendom</a></li>
								</ul>
								<!-- Tab panes -->

							  	<div class="tab-content list-view-tab">
							    	<div role="tabpanel" class="tab-pane active" id="recent">
							    		<ul>

							    		<?php  
                                                                        for($i=1;$i<=5;$i++)
                                                                        {
                                                                            ?>
                                                                            <li class="item-wrap">
							    				<div class="item">
							    					<div class="item-image-carousel item-image carousel slide" data-ride="carousel" data-interval="false">
							    						<div class="carousel-inner">
							    							<div class="item active">
							    								<a href="#"><img src="images/item/2.jpg" alt="" class="img-responsive"></a>
							    							</div>
							    							<div class="item">
							    								<a href="details.html"><img src="images/item/9.jpg" alt="" class="img-responsive"></a>
							    							</div>
							    							<div class="item">
							    								<a href="details.html"><img src="images/item/10.jpg" alt="" class="img-responsive"></a>
							    							</div>
							    						</div>
							    						<a class="left-control" href=".html" role="button" data-slide="prev">
														    <i class="fa fa-angle-left" aria-hidden="true"></i>
														    <span class="sr-only">Previous</span>
													  	</a>
														  	<a class="right-control" href=".html" role="button" data-slide="next">
														    <i class="fa fa-angle-right" aria-hidden="true"></i>
														    <span class="sr-only">Next</span>
													  	</a>
														<div class="item-price">
															<span>$649</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Dec 29, 10:39 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Nikon 24.2MP Digital SLR</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
							    				</div><!-- item -->
							    			</li>
                                                                            <?php
                                                                        }
                                                                        
                                                                        ?>
                                                                            <!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
							    					<div class="item-image-carousel-two item-image carousel slide" data-ride="carousel" data-interval="false">
							    						<div class="carousel-inner">
							    							<div class="item active">
							    								<a href="details.html"><img src="images/item/3.jpg" alt="" class="img-responsive"></a>
							    							</div>
							    							<div class="item">
							    								<a href="details.html"><img src="images/item/2.jpg" alt="" class="img-responsive"></a>
							    							</div>
							    							<div class="item">
							    								<a href="details.html"><img src="images/item/6.jpg" alt="" class="img-responsive"></a>
							    							</div>
							    						</div>
							    						<a class="left-control" href="-2.html" role="button" data-slide="prev">
														    <i class="fa fa-angle-left" aria-hidden="true"></i>
														    <span class="sr-only">Previous</span>
													  	</a>
														  	<a class="right-control" href="-2.html" role="button" data-slide="next">
														    <i class="fa fa-angle-right" aria-hidden="true"></i>
														    <span class="sr-only">Next</span>
													  	</a>
														<div class="item-price">
															<span>$399</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Dec 28, 14:54 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">CompBook 1.6-inch Laptop</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
							    				</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
							    					<div class="item-image">
														<a href="details.html"><img src="images/item/4.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$19</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Dec 21, 09:23 am</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Disital Multi Headphone</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
							    				</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/5.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$3950</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Dec 31, 12:59 am</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Diecast Model Motorcycle</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/6.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$545</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Dec 29, 11:32 am</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Lenovo Ideapad Laptop</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/13.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/15.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->
							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/7.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->
							    		</ul>
							    	</div> <!--tab-pane-->

							    	<div role="tabpanel" class="tab-pane" id="popular">
							    		<ul>
							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/7.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/8.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->	

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/9.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
							    					<div class="item-image">
														<a href="details.html"><img src="images/item/10.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/11.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->
							    		</ul>
							    	</div><!-- tab-pane -->	

							    	<div role="tabpanel" class="tab-pane" id="rendom">
							    		<ul>
							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/12.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/13.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/14.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->

							    			<li class="item-wrap">
							    				<div class="item">
													<div class="item-image">
														<a href="details.html"><img src="images/item/15.jpg" alt="" class="img-responsive"></a>
														<div class="item-price">
															<span>$45</span>
														</div> 
													</div>
													<div class="item-description">
														<div class="item-meta">
															<div class="item-post-date">
																<span>Today, 12:29 pm</span>
															</div>
															<ul class="list-inline product-social">
																<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="item-title">
															<h3><a href="#">Product Title Goes Here</a></h3>
														</div>
														<div class="item-info">
															<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
														</div>
													</div><!-- item-description -->
												</div><!-- item -->
							    			</li><!-- item-wrap -->
							    		</ul>
							    	</div><!-- tab-pane-->	
							  	</div>
							</div>
						</div><!-- category-tab-->	
					</div>
				<div class="view-all-ads text-center">
					<a href="#" class="btn btn-primary">View All Ads</a>
				</div>
			</div>
		</div><!-- category-tab-->	


		

		
		<!-- newsletter -->
		<!-- #newsletter -->

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

<!-- Mirrored from template.gridbootstrap.com/avt/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 17:16:48 GMT -->
</html>