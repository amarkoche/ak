<!doctype html>
<html lang="en">
	<?php 
		$title = "akSoftTech - Technology Solutions and Consultancy Service";
		$style = "main-style.css";
		include './include/head.inc.php';
	?>
<body>	

<!-- Start Header and Navbar Secton-->
<?php 
	include './include/top-header.inc.php';
	$pageUrl = "zero-cost.php";
	$buttonText = "Zero Cost Web Solutions ";
	include './include/top-navbar.inc.php';
?>
<!-- Start Header and Navbar Secton-->


<!-- Start Hero Banner Secton secton-->
<?php 
include './include/hero-banner-home.inc.php';
?>
<!-- End Hero Banner Secton secton-->


<!-- Start We Have Section-->
<section class="we-have-section">
	<div class="container">
		<div class="row">			
			<?php 
				include './include/we-have.inc.php';
				foreach($wehaveSec as $wehaveList){
				echo "
					<div class='col-md-4 col-12' data-id='{$wehaveList[0]}'>
						<div class='inner-box'>
							<div class='icon-img'>
								<img src='{$wehaveList[1]}' alt='akSoftTech{$wehaveList[2]}'>
							</div>
							<h5>{$wehaveList[2]}</h5>
							<p>{$wehaveList[3]} </p>
						</div>				
					</div>
				";
				}		
			?>
		</div>
	</div>
</section>
<!-- End We Have Section-->

<!-- Start  About Us Section-->
<section id="aboutSec" class="about-us-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 contnet-area">			
				<div class="title-section">
					<span class="float-text">ABOUT</span>
					<span class="sub-title"> ABOUT US </span>
					<h2>The Best IT Solution,<br> Ready to Help You </h2>						
					<!-- <p>At <b>akSoftTech </b>, we are dedicated to empowering businesses with cutting-edge technology and customized strategies. Our mission is to help you achieve operational excellence, streamline business processes, and drive sustainable growth in today’s fast-evolving digital landscape.</p> -->

					<p>At <b>akSoftTech, </b> we specialize in providing innovative IT solutions and expert consulting services tailored to meet your unique business needs. Whether it’s elevating your brand, enhancing your online presence, or optimizing your processes, we combine expertise and creativity to turn your vision into reality.</p>
					<p>
						Let us be the catalysts for your digital success, guiding your business toward a smarter, more connected future.
					</p>
				</div>
			</div>

			<div class="col-md-5 images-area">	
				<!-- <div class="about-conter-box d-none" >
					<div class="about-counter-title">
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=e6R6VsgD8yQ&amp;amp;t=179s"><i class="fa-solid fa-play"></i></a>
						<p>Watch <br> Now </p>
					</div>
				</div> -->
				<div class="images-box right">
					<div class="thumb-image">
						<img src="images/about-us.png" alt="About us akSofttech">
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-10 col-sm-12 col-12 card-area">
				<div class="row">				
					<?php 
						include './include/about-section.inc.php';
						foreach($aboutHomeSec as $aboutList){
						echo "
							<div class='col-lg-6 col-sm-6 col-12' data-id='{$aboutList[0]}'>
								<div class='icon-box'>
									<div class='icon'>
										<img src='{$aboutList[1]}' alt='akSoftTech {$aboutList[2]}'>
									</div>
									<div class='content'>
										<h5>{$aboutList[2]}</h5>
									</div>
								</div>
							</div>
							";						
						}				
					?>					
					<div class="more-details-btn">
						<a href="about.php">About More<i class="bi bi-arrow-right-circle-fill"></i></a>
						<div class="shape-two">	</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</section> 
<!-- End About Us Section-->

<!-- Start Features Section -->
<?php 
	include './include/features.inc.php';
?>
<!-- End  Features Section -->

<!-- Start "Why choose section-->
<?php 
	include './include/why-chose.inc.php';
?>
<!-- End "Why choose section-->

<!--Start Services Section -->
<!-- <?php 
	include './include/it-services.inc.php';
?> -->
<!--End Services Section -->

<!--new section--->
<section id="services" class="services-section">
	<div class="container">
	  <div class="row">
		<div class="title-section">
			<span class="float-text">SERVICES</span>
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

<!--new section--->



<!-- Start Working Process-->
<?php 
	include './include/working-process.inc.php';
?>
<!-- End Working Process -->




<!-- Start Video section-->
<?php 
	$title = "Our Best Working Process Systems <br>with Team Expert Leaders";
	$para = "Our proven working process is backed by a team of expert leaders, ensuring efficient collaboration and exceptional results every step of the way";
	include './include/video-banner.inc.php';
?>
<!-- End Video section-->


<!-- Start counter-section -->
<?php 
	include './include/consultation.inc.php';
?>
<!-- End counter-section -->

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

 <!---Start Script -->
 <!-- <script src="js/bootstrap.bundle.min.js"></script> -->

 <!---Start bootstrap.bundle CDN --> 
 <?php 
	include './include/footer-secrip-inc.php';
?>
</body>
</html>