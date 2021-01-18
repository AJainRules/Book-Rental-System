<?php
session_start();
include './mycon.php';
$id=$_REQUEST['vid'];

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
					  <a class="navbar-brand" href="01AHome.php"><img class="img-responsive img-rounded img-thumbnail" src="pic/logo.png"  alt="Logo"></a>
				</div><!-- /navbar-header -->
				
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
                                                    <li><a href="01AHome.php">Home</a></li>
                                                    <li class="active"><a href="01ASeller.php">Sellers</a></li>
                                                    <li><a href="products.php">Buyers</a></li>
							
							
                                                    <li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					</div>
				</div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<div class="page">
		

		<div class="ad-post-wrapper section">
			<div class="container">
                            <?php
                            if(isset($_SESSION['sd']))
                            {
                                echo $_SESSION['sd'];
                                unset($_SESSION['sd']);
                            }
                            
                            ?>
				<div class="row">
                                   
                                    <div class="col-md-3">
						<div class="sidebar">
							
                                                    
							
							
								<div class="filter-list">
                                                            <h4 class="list-title"><a href="#">Ads</a></h4>
								<ul class="list-group">
                                                                    <?php
                                                                    $qc="select * from ads where vid=$id order by title";
                                                                    $rec=$con->query($qc);
                                                                    while($rc=$rec->fetch_assoc())
                                                                    {
                                                                        ?>
                                                                    <li><a href="01ASellerAds.php?aid=<?php echo $rc['aid'];?>&vid=<?php echo $id;?>"><?php echo $rc['title'];?></a></li>
                                                                    <?php
                                                                    }
                                                                    
                                                                    ?>
													</ul>
							</div>
							<!-- widget -->
							
						</div><!-- sidebar -->
					</div>
					<div class="col-md-6">
                                            <form  class="form-group">
                                                <table border="1" style="width: 100%; color: blue;font-weight: bold;font-size: large;" class="table">
                                                   
                                                    <tr>
                                                        <td>Category</td>
                                                        <td><select name="status" disabled="true"  class="form-control">
                                                                <option><?php echo $r1['category'];?></option>
                                                                <option>Active</option>
                                                                <option>Deactive</option>
                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Title</td>
                                                        <td><input type="text" disabled="true" name="title" value="<?php echo $r1['title'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>price</td>
                                                        <td><input type="text" disabled="true" name="age" value="<?php echo $r1['price'];?>" class="form-control"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><input type="text" disabled="true" name="email" value="<?php echo $r['email'];?>" class="form-control"/></td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td>Mobile</td>
                                                        <td><input type="text" disabled="true" name="mobile" value="<?php echo $r['mobile'];?>" class="form-control"/></td>
                                                    </tr>
                                                     <tr>
                                                        <td>Description</td>
                                                        <td><textarea disabled="true"  style="height: 200px;" class="form-control">
<?php echo $r1['description'];?>
                                                            </textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <a href="01ASellerDelete.php?id=<?php echo $id;?>"> <button type="button" class="form-control btn-danger" style="color: white;font-weight: bold;">Delete</button></a>
                                                        </td>
                                                    </tr>
                                                    
                                                </table>
                                            </form>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							
                                                    
							
							
								<div class="widget-content">
                                                                    <img src="pic/ads/<?php echo $r1['p1'];?>" style="width: 300px; height: 300px;" class="img-responsive img-rounded"/>	
                                                                    
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
}
?>