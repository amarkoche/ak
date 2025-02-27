<!DOCTYPE HTML>
<html lang="en-US">

<?php 
	$title = "akSoftTech - Free Consulting Servicesn";
	$style = "get-for-free.css";
	include './include/head.inc.php';		
?>
<body>

<section class="free-consulting">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12">
					<div class="footer-aksofttech-logo">
						<a class="navbar-brand ak-softtech-logo" href="index.php">
							<img src="images/aklogo.svg" alt="Logo" class="brand-logo">
							<span class="soft">Soft</span><span class="tech">Tech</span>
						</a>
					</div>
				
				<div class="content-box">	
					<p class="pt-5">
						Get in touch with us today to discuss your ideas, explore solutions, and take the first step toward achieving your goals			
					</p>				
					<ul class="custome-list">
						<li>
							<div>
								<div>
									<i class="fa-solid fa-trophy"></i>
								</div> 
								<div>
									<p class="strong"> 15+ years of experience </strong></p>
									<p class="small"> We can handle projects of all complexities. </small></p>
								</div>
							</div>
							
						</li>

						<li>
							<div>
								<div>
									<i class="fa-solid fa-award"></i>
								</div> 
								<div>
									<p class="strong"> 1000+ satisfied customers </strong></p>
									<p class="small"> Startups to Fortune 500, we have worked with all. </small></p>
								</div>
							</div>
							
						</li>

						<li>
							<div>
								<div>
									<i class="fa-solid fa-user-group"></i>
								</div> 
								<div>
									<p class="strong"> 100+ in-house team </strong></p>
									<p class="small"> Harnessing the Top 1% Talent for Unmatched Digital Growth. </small></p>
								</div>
							</div>							
						</li>						
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-12 contnet-form-area">
				<div class="contact-inner-box">	
					<!-- Start counter-section -->
							<?php 
								$buttonText = "Submit";
								include './include/contact-form-inc.php';
							?>
					<!-- End counter-section -->

					<!-- End counter-section -->
				</div>
			</div>
		</div>	
	</div>	
</section>

<!---Start Script -->
<!---Start bootstrap.bundle CDN --> 
<?php 
include './include/footer-secrip-inc.php';
?>
</body>
</html>