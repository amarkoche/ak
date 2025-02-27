<!DOCTYPE HTML>
<html lang="en-US">
	<?php 
		$title = "About Us - The Best IT Solution, Ready to Help You";
		$style = "about.css";
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
 
<!-- Start Inner-Hero-Banner-->
<?php 
	$title ="About Us";
	include './include/inner-hero-banner.inc.php';
?>
<!-- End Inner-Hero-Bannen-->

<!-- Start  About Us Section-->
<section id="about" class="about-us-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 contnet-area">			
				<div class="title-section">
					<!-- <span class="float-text">ABOUT</span> -->
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
						foreach($aboutSec as $aboutList){
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
				</div>
			</div>
			
		</div>
	</div>
</section> 
<!-- End About Us Section-->

<!-- Start Vision-Mission Section-->
 <section class="vision-mission">
	<div class="build-website-section">
		<div class="container">
			<div class="row ">
				
				<div class="col-md-5 col-sm-12 image-area">
					<div class="images-box left">
						<div class="thumb-image">
							<img src="images/vison-mision.png" alt="">
						</div>						
					</div>	
				</div>
				<div class="col-md-7 col-sm-12 contnet-area">
					<div class="content-box pb-5">
						<div class="title-section ">
							<!-- <span class="float-text">VISION</span> -->
							<span class="sub-title"> Our Vison </span>
							<!-- <h2>Innovating Today for a Smarter Tomorrow</h2>	 -->
							<p class="pt-3">To be a global leader in IT solutions and consulting, empowering businesses with innovative technologies and strategies that drive sustainable growth, operational excellence, and digital transformation.</p>
						</div>
					</div>
					<div class="content-box">
						<!-- <div class="title-section pt-3">
							<span class="float-text">MISSION</span> -->
							<span class="sub-title"> Our Mission </span>
							<!-- <h2>Empowering Growth Through Innovation and Expertise </h2>	 -->
							<p class="pt-3">
								At <b>akSoftTech </b>, we are dedicated to empowering businesses with cutting-edge technology and customized strategies. Our mission is to help you achieve operational excellence, streamline business processes, and drive sustainable growth in today’s fast-evolving digital landscape.
							</p> 
						</div>	
					</div>
								
				</div>

					
			</div>
		</div>
	</div>			
 </section>
<!-- End  Vision-Mission Section-->

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