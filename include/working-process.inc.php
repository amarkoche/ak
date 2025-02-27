<?php 
	$workingProcessSec = array(
		array("1", "images/icons/select-project.svg", "1", "Select A Project", "Choose the perfect project that aligns with your goals and vision." ),

		array("2", "images/icons/project-analysis.svg", "2", "Project Analysis", "Next, we conduct a thorough project analysis to understand your requirements, objectives, and target audience." ),

		array("3", "images/icons/start-process.svg", "3", "Start Process", "Once the analysis is complete, we begin the process, turning your vision into a functional, user-friendly web solution." ),

		array("4", "images/icons/deliver-result.svg", "4", "Deliver Result", "Finally, we deliver the result, ensuring a polished, high-performing website that meets your expectations and goals." )
	);
?>

<section  id="working-process" class="working-process-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="title-section">
					<span class="float-text">PROCESS</span>
					<span class="sub-title"> WORKING PROCESS</span>					
					<h2>We Follow the Easy Working Steps </h2>		
				</div>
			</div>
		</div>
		<div class="row">

		<?php 
			foreach($workingProcessSec as $workingList){
				echo "
					<div class='col-lg-3 col-md-6' data-id='{$workingList[0]}'>
				<div class='process-box before-transprant after-transprant'>
					<div class='process-box-thumb'>
						<img src='{$workingList[1]}' alt=''>
						<div class='process-number'>
							<span>{$workingList[2]}</span>
						</div>
					</div>
					<div class='process-content'>
						<h5>{$workingList[3]}</h5>
						<p>{$workingList[4]}</p>
					</div>
				</div>
			</div>	
				";
			}		
		?>			
		</div>
	</div>
</section>