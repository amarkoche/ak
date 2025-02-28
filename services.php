<!DOCTYPE HTML>
<html lang="en-US">
<?php 
	$title = "IT Consulting - Smart Solutions to Grow Your Business Online";
	$style = "services.css";
	include './include/head.inc.php';		
?>

<body class="it-consulting-page">
	<!-- Start Header and Navbar Secton-->
	<?php 
		include './include/top-header.inc.php';
		$pageUrl = "zero-cost.php";
		$buttonText = "Zero Cost Web Solutions ";
		include './include/top-navbar.inc.php';
	?>
	<!-- Start Header and Navbar Secton-->
	 
	<!-- Start Inner-Hero-Banner-->
	<?php 
		$title ="IT Consulting";
		include './include/inner-hero-banner.inc.php';
	?>
	<!-- End Inner-Hero-Bannen-->


<!--Start Services Section -->
<section id="services" class="services-section">
	<div class="container">
	  <div class="row">
		<div class="title-section">
			<!-- <span class="float-text">SERVICES</span> -->
			<span class="sub-title">OUR SERVICES</span>					
			<h2>Smart Solutions to <br>
				Grow Your Business Online </h2>		
		</div>

		  <div class="contnet-box contnet-area">
			<div class="row">
				<?php 
					include './include/it-services.inc.php';

					foreach($itserviceSec as $itserviceList){
					echo "
						<div class='service-block col-md-6 col-12'  data-id='{$itserviceList[0]}'>
							<div class='inner-box'>
								<div class='inner-content'>
								<div class='icon'>
									<img src='{$itserviceList[1]}' alt='{$itserviceList[2]}'>
								</div>
								<h5 class='title'>
									<a href='#'>{$itserviceList[2]}
									</a>
								</h5>
								<p class='text'>{$itserviceList[3]}</p>				 
								</div>
							</div>
						</div>
						";						
					}				
				?>
			</div>
			
		  </div>
	  </div>
	</div>
</section>
<!--End Services Section -->

<!-- Bug free Code Section -->
<?php 
	include './include/free-bug-inc.php';
?>
<!-- End  Free Code Section -->

<!-- Start Features Section -->
<?php 
	include './include/features.inc.php';
?>
<!-- End  Features Section -->

<!-- Start Footer Section-->
<?php 
	include './include/footer.inc.php';
?>
<!-- End Footer Section-->

<!-- Start Toptech Scroll Up-->
<?php 
	include './include/progress.inc.php';
?>
<!-- Start Toptech Scroll Up-->

<?php 
	include './include/modale-box-1.inc.php';
?>

 <!---Start bootstrap.bundle CDN --> 
 <?php 
	include './include/footer-secrip-inc.php';
?>
</body>
</html>