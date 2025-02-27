<!DOCTYPE HTML>
<html lang="en-US">

<?php 
	$title = "Get in Touch - aksoftTech - Technology Solutions and Consultancy Services";
	$style = "contact.css";
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
	$title ="Contact Us";
	include './include/inner-hero-banner.inc.php';
	// include './include/submission-section.inc.php';
?>
<!-- End Inner-Hero-Bannen-->


<section class="contact-section">
	<div class="container">
		<div class="row">			
			<div class="col-md-6 col-12 contnet-details">
				<div class="title-section">
					<span class="sub-title">CONTACT US</span>
					<p class="pt-3">
						On the other hand we denounce righteous indignation moralized bite the HR charms of pleasure.
					</p>		
				</div>			
				
				<div class="row">
					<div class="col-12  pt-md-5 pt-sm-2">
						<div class="contact-info-box">
							<div class="contact-info-icon">
								<i class="fa-solid fa-phone"></i>
							</div>
							<div class="contact-info-content">
								<p>Call us Any time</p>
								<h5>+91 8668235080</h5>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="contact-info-box">
							<div class="contact-info-icon">
								<i class="fa-regular fa-envelope"></i>
							</div>
							<div class="contact-info-content">
								<p>Send E-Mail</p>
								<h5>info@aksofttech.in</h5>
								<h5>aksofttechservices@gmail.com</h5>
							</div>
						</div>
					</div>
					<!-- <div class="col-12">
						<div class="contact-info-box">
							<div class="contact-info-icon">
								<i class="fa-solid fa-location-dot"></i>
							</div>
							<div class="contact-info-content">
								<p>Office Address</p>
								<h5>Nagpur, India</h5>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-md-6 col-12 contnet-form-area">
				<div class="title-section">
					<span class="sub-title">GET IN TOUCH</span>
					<p class="pt-3">
						On the other hand we denounce righteous indignation moralized bite the HR charms of pleasure.
					</p>		
				</div>
				<div class="contact-inner-box">
					
					<?php 
						// $formTitle ="Contact Us";
						$buttonText = "Send Message";
						include './include/getintouch.inc.php';
					?>				
				</div>
			</div>
		</div>		
</section>

<section class="google-map">
	<div class="row google-map-img">
		<img src="images/google-map.png" alt="google maip" class="w-100">
	</div>	
</section>


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