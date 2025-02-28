
<?php 
$featuresSec = array (
	array("1", "images/icons/it-consulting-c.svg", "IT Consulting", "Unlock the power of technology with expert IT consulting Services"),

    array("2", "images/icons/business-consulting-c.svg", "Business Consulting", "Optimizing Performance with Strategic Business Consulting"),

	array("3", "images/icons/finance-consulting-c.svg", "Finance Consulting", "Maximizing Wealth through Expert Financial Consultin"),	

	array("4", "images/icons/legal-consulting-c.svg", "Legal Consulting", "Navigating Legal Challenges with Trusted Expertise"),	
);
?>



<section id="features" class="features-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12 images-area  left">
				<div class="images-box">
					<!-- <div class="bg-icon-one zoom-one"></div>  -->
					<div class="thumb-image">
						<img src="images/features.png" alt="">
					</div>		 
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-12 contnet-area" id="featuresContainer">
				<div class="contnet-box">
					<div class="title-section">
						<span class="float-text">FEATURES</span>
						<span class="sub-title">FEATURES</span>					
						<!-- <h2>Developing solutions for <br/> The Future</h2>-->
						<!-- <h2>Our features will help <br> to improve business </h2> -->
						<h2>Transforming Businesses with Advanced Features </h2>
						<p>Business transformation improves efficiency by streamlining workflows and integrating advanced technologies. Our features cater to sectors like business, financial, and legal consulting, offering tailored solutions for growth.</p>
					</div>
				</div>
				<div class="row card-area" id="featuresElement">
					<!--feature lists-->						
					<?php 
						foreach($featuresSec as $featuresList){
							echo "
								<div class='feature-block col-lg-6 col-md-6' data-id='{$featuresList[0]}'>
									<a href='services.php' class='inner-box'>
										<div class='inner-content'>
											<div class='icon'>
												<img src='{$featuresList[1]}' alt='akSoftTech - {$featuresList[2]}'>
											</div>
											<div class='content'>
												<h5>{$featuresList[2]}</h5>
												<p>{$featuresList[3]}</p>
											</div>
										</div>
									</a>
								</div>
								";						
							}				
						?>
				</div>
			</div>
			<div class="col-12">
				<div id="featuresTarget"></div>
			</div>
		</div>
	</div>
</section>