<?php 
$whychooseSec = array (
	array("1", "images/icons/bug-free.svg", "Bug Free", "We craft unique, impactful brand identities that connect with your audience and elevate your market presence."),

    array("2", "images/icons/well-organized.svg", "Well Organized", "Our streamlined processes ensure efficiency, clarity, and precision, delivering results that exceed expectations."),

	array("3", "images/icons/clean-coding.svg", "Clean coding", "We write clear, simple, and maintainable code to deliver high-quality and efficient solutions.")

);
?>

<section id="features" class="features-section bug-free-code">
	<div class="container">
		<div class="row">	
			<div class="col-lg-7 col-md-7 col-12 contnet-area" id="bugfreeContainer">
				<div class="contnet-box">
					<div class="title-section">
						<span class="sub-title">Why Choose</span>					
						<h2>Why will you choose our Services</h2>
						<p>Our services ensure a bug-free experience, providing seamless functionality and top-notch performance. With well-organized structures and clean code, we create solutions that are easy to manage, scale, and optimize for future growth.</p>
					</div>
				</div>
				<div class="row card-area" id="bugfreElement">
					<!--Bug Free-->	

					<?php 					
                        foreach($whychooseSec as $whychooseList){					
                        echo "
							<div class='feature-block col-lg-6 col-md-6 col-12' data-id='{$whychooseList[0]}'>
								<div class='inner-box'>
                                    <div class='inner-content'>
                                        <div class='icon'>
                                            <img src='{$whychooseList[1]}' alt='akSoftTech - {$whychooseList[2]}'>
                                        </div>
                                        <div class='content'>
                                            <h5>{$whychooseList[2]}</h5>
                                                <p>{$whychooseList[3]}</p>
                                        </div>
                                    </div>
                                </div>
							</div>
						";						
					    }				
				    ?>				
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-12 images-area right">
				<div class="images-box">					
					<div class="thumb-image">
						<img src="images/bug-free-code.png" alt="">
					</div>		 
				</div>
			</div>	
            <div class="col-12">
					<div id="bugfreTarget"></div>
			</div>
            
			
		</div>
	</div>
</section>