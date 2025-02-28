
<?php 
$whySec = array (
	array("1", "images/icons/flexible-solutions.svg", "Flexible Solutions"),
    array("2", "images/icons/creative-design.svg", "Creative Design"),
	array("3", "images/icons/dedicated-team.svg", "Expert & Dedicated Team Members"),	
	array("4", "images/icons/customers-satisfaction.svg", "100% Customers Satisfaction"),
	array("5", "images/icons/tehcnical-supports.svg", "24/7 Free Tehcnical Supports"),
);
?>

<section id="why-chose" class="why-choose-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-12 contnet-area" id="whychooseContainer">
				<div class="title-section">
					<span class="float-text">WHY</span>
					<span class="sub-title">WHY CHOOSE US</span>					
					<!-- <h2>Here are some reasons why choosing us</h2>		 -->
					  <h2>Your Success, <br>Our Commitment</h2>
									<!--  -->
					<p>At <b> akSoftTech,</b> we prioritize your success with tailored services, innovative solutions, and a dedicated team of certified experts. Our proven track record ensures measurable growth and efficiency for your business</p>
				</div>	
				<div class="row card-area" id="whychooseElement">

				<?php 					
				foreach($whySec as $whyList){
					echo "
							<div class='col-lg-6 col-sm-6 col-12' data-id='{$whyList[0]}'>
								<div class='icon-box'>
									<div class='icon'>
										<img src='{$whyList[1]}' alt='aakSoftTech {$whyList[2]}'>
									</div>
									<div class='content'>
										<h5>{$whyList[2]}</h5>
									</div>
								</div>
							</div>
						";						
					}				
				?>	
					<div class="shape-two">
						<!-- <img src="images/shape-2.png" alt=""> -->
					</div>		
				</div>		
			</div>

			<div class="col-md-5 col-12 images-area right">
				<div class="images-box">
					<div class="thumb-image">
						<img src="images/why-choose.png" alt="">
					</div>
				</div>
				
				<!-- <div class="shape-one">
					<img src="assets/images/home-2/about-shape.png" alt="">
					<img src="images/dotted-line.svg" alt="">
				</div> -->
			</div>
			<div class="col-12">
				<div id="whychooseTarget"></div>
			</div>			
		</div>
	</div>	
</section>