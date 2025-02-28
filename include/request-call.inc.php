<section class="request-call section-3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12">
                <div class="title-section">
                    <div class="sub-title">
                        GET IN TOUCH
                    </div>
                    <h2>Request a Call back</h2>
                    <p>
                        "Request a call back for expert guidance on loans, <br>investments, and insurance solutions tailored to your needs!"
                    </p>
                    <!-- <p> A smartphone displaying a woman with dark skin and black hair wearing headphones, gesturing right of the device are four icons representing contact methods: a phone, an email symbol, an envelope, and a chat symbol, all in blue. The background is blue shade with light colors.</p> -->
                    <ul class="ul-list">                        
                        <?php 			
                            foreach($requestSec as $requestList){
                            echo "
                                <li data-id='{$requestList[0]}'>
                                    <span>
                                        <i class='fa-solid fa-check'></i>
                                    </span>
                                        {$requestList[1]}
                                </li>
                            ";
                            }		
                        ?>
                    </ul>
                </div>
            </div>
           
            <div class="col-md-5 col-12 need-help-section">
                <div class="row">
                    <div class="col-12 contact-item">
                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <p>Call us Any time</p>
                                <h5>+91 - <?php echo $mobileNo ?></h5>
                            </div>
                        </div>
                    </div>   

                    <div class="col-12 contact-item">
                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <p>Send E-Mail</p>
                                <h5>support@aksofttech.in</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 get-touch-img">
                        <a href="contact.php">
							<img src="images/icons/get-in-touch.svg" class="img-fluid" alt=""> Need help? <span>Contact Us</span>
                        </a>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>