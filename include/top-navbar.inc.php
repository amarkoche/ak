<nav class="navbar navbar-expand-lg ak-softtech header-area "  id="sticky-header">
	<div class="container">
		<a class="navbar-brand ak-softtech-logo" href="index.php">
			<img src="images/aklogo.svg" alt="Logo" class="brand-logo">
			<span class="soft">Soft</span><span class="tech">Tech</span>
		</a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa-solid fa-bars"></i>
	  </button>
	  <div class="collapse navbar-collapse navbar-menu-area" id="navbarSupportedContent">
		<ul class="navbar-nav">
		  <li class="nav-item ak-nav-item">
			<a class="nav-link active" aria-current="page" href="index.php">Home</a>
		  </li>
		  <li class="nav-item ak-nav-item">
			<a class="nav-link" href="about.php">About</a>
		  </li>
		  <li class="nav-item dropdown ak-nav-item">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			  Services
			</a>
			<ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="services.php">IT Consulting</a></li>
			  <li><a class="dropdown-item" href="financial-consulting.php">Finance Consulting</a></li>			
			  <li><a class="dropdown-item" href="business-consulting.php">Business Consulting</a></li>
			  <li><a class="dropdown-item" href="legal-consulting.php">Legal Consulting</a></li>
			</ul>
		  </li>
		
		  <li class="nav-item ak-nav-item">
			<a class="nav-link" href="Intership.php">Intership</a>
		  </li>		  
		  <li class="nav-item ak-nav-item">
			<a class="nav-link" href="contact.php">Contact</a>
		  </li>
		</ul>
		<button type="button" class="btn custome-button">			
			<a href="<?php echo $pageUrl ?>" class="animate__animated animate__pulse animate__infinite	infinite"> <?php echo $buttonText?> </a> 

			<!-- <a href="zero-cost.php" class="animate__animated animate__flash animate__infinite	infinite animate__slower 3s"> Zero Cost Web Solutions </a>  -->
		</button>	
	  </div>
	</div>
</nav>