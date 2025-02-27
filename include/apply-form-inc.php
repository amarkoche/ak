<?php 
error_reporting(E_ALL);
ini_set("display errors","on");

// error values
$fnameErr = $lnameErr =  $emailErr = $phoneErr = $serviceErr = $messageErr = $fileErr = "";

// form variables
$fname = $lname = $email = $phone =  $service = $message = $file =  "";
$targetDir = "uploads/";

// display after submiting
$formDisplay = "";

// text if validation passes
$validationPass = true;

// clean inputs
function text_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} 


// phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

//form valication
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //Regular expression
    $phoneExp = preg_match("^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){9}\d$^", $_POST["phone"]);

// First Name
    if(empty($_POST["fname"])){
       $fnameErr = "First name is required";
       $validationPass  = false;
    }
    else{
       $fname = text_input($_POST["fname"]); 
    }

    // Last name
    if(empty($_POST["lname"])){
        $lnameErr = "Last name required";
        $validationPass  = false;
    }
    else{
        $lname = text_input($_POST["lname"]); 
    }

// email 
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
        $validationPass  = false;
     } 
     elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Enter a Valid email";
        $validationPass  = false;
     }
     else{
        $email = text_input($_POST["email"]); 
     }

     // phone
     if(empty($_POST["phone"])){
        $phoneErr = "Phone number is required";
       $validationPass  = false;
     }  elseif(!$phoneExp) {
        $phoneErr= "Enter the phone number is the correct format";
        $validationPass  = false;
     } else{
        $phone = text_input($_POST["phone"]); 
     }


// Services 
if (empty($_POST["service"])) {
    $serviceErr = "Please select a service.";
    $validationPass  = false;
} else {
    $service = $_POST["service"];
    // Validate allowed values to prevent tampering
    $allowed_services = ["UI/UX_Desinger", "Web_Developer", "Graphic_Desinger"];
    if (!in_array($service, $allowed_services)) {
        $serviceErr = "Invalid selection.";
    }   
}
// upload file 


    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Allowed file types
        $allowedTypes = ["jpg", "jpeg", "png", "gif", "pdf"];

        // Validation Checks
        if (!in_array($fileType, $allowedTypes)) {
            $fileErr = "Only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } elseif ($_FILES["file"]["size"] > 2 * 1024 * 1024) { // 2MB size limit
            $fileErr = "File size should not exceed 2MB.";
        } else {
            // Upload File
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                echo "<p style='color:green;'>File uploaded successfully!</p>";
            } else {
                $fileErr = "Error uploading file.";
            }
        }
    } else {
        $fileErr = "Please select a file to upload.";
    }

// Massage 
     if(empty($_POST["message"])){
        $messageErr = "Massage is required";
        $validationPass  = false;
     }
     else{
        $message = text_input($_POST["message"]); 
     }

     if($validationPass){
        $mail = new PHPMailer(true);
        try{
            //server setting
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'aksofttechservices@gmail.com';
            $mail->Password = 'nkos pjsv nkfr jihm';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            
            // recipients
            $mail->setFrom('info@aksofttech.com', 'IT Services');
            $mail->addAddress('aksofttechservices@gmail.com', 'akSoftTech IT Consultancy Services ');

            // content

            $mail->isHTML(true);
            $mail->Subject = 'akSoftTech -Customer Inquiry Message';
            $mail->Body = "
            <html>
                <head>
                    <title>akSoftTech IT Consultancy Services </title>
                    <style>
                        .error {
                            color:red;
                        }
                    </style>
                </head>

                <body>
                    <div class='submisson'>
                     <h3>Form Submition </h3>
                        <table  class='table table-bordered'>
                            <tr>
                                <td>
                                   Name :
                                </td>
                                <td>
                                    $fname
                                </td> <td>
                                    $lname
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Email :
                                </td>
                                <td>
                                    $email
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Phone :
                                </td>
                                <td>
                                    $phone
                                </td>
                            </tr>

                            
                           

                            <tr>
                                <td>
                                    Services :
                                </td>
                                <td>
                                    $service
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Services :
                                </td>
                                <td>
                                    $file
                                </td>
                            </tr>

                            <tr>
                                <td>
                                   Message :
                                </td>
                                <td>
                                    $message
                                </td>
                            </tr>

                        </table>
                    </div>
                </body>
            </html>
            ";

            $mail->send();
            $formDisplay = '             
                <div class=" alert alert-success submission" id="target" role="alert">
                    <strong>Your Message was sent!</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
                </div>
            ';

        } catch(Exception $e){
            $formDisplay = '

            <div class="alert alert-danger submission" id="target" role="alert">
               Message could not be sent. Try again or call us directly
            </div>           
            ';
        }

        $fname = $lname = $email =  $services = $phone = $message = $file = "";
     }
};

?>

<form class="getintouch free-consulting-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#target" method="post">
 
    <div class="row">       
        <div class="input-box col-md-6 col-12">
            <!-- <label for="fname" class="form-label">First Name</label> -->
            <div class="error "><?php echo $fnameErr ?></div>
            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname ?>" placeholder="First Name">
        </div>	

        <div class="input-box col-md-6 col-12">
            <!-- <label for="lname" class="form-label">Last Name</label> -->
            <div class="error "><?php echo $lnameErr ?></div>
            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname ?>" placeholder="Name">
        </div>	

        <div class="input-box col-md-6 col-12">
            <!-- <label for="email" class="form-label">Email</label> -->
            <div class="error"><?php echo $emailErr ?></div>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Email" >
        </div>

        <div class="input-box col-md-6 col-12">
            <!-- <label for="phone" class="form-label"> Phone </label> -->
            <div class="error"><?php echo $phoneErr ?></div>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>"  placeholder="Phone" >
        </div>

        <div class="input-box col-md-6 col-12">
            <!-- <label for="service">Type of Services</label> -->
            <div class="error"><?php echo $serviceErr ?></div>            
            <select class="form-select" name="service" id="service" value="<?php echo $service ?>" >
                <option value="">Select a Service</option>
                <option value="UI/UX_Desinger">UI & UX Desinger</option>
                <option value="Web_Developer">Web Developer</option>
                <option value="Graphic_Desinger">Graphic Desinger</option>
              
            </select>
        </div>

        <div class="input-box col-md-6 col-12">
            <div class="input-box">
                <!-- <label for="Name">Upload Your CV</label> -->
                <div class="error"><?php echo $fileErr  ?></div>  
                <input class="form-control" type="file" name="file" id="file" placeholder="Upload Your CV">
            </div>
        </div>


        <div class="input-box col-12">
            <!-- <label for="message" class="form-label">Message</label> -->
            <div class="error"><?php echo $messageErr ?></div>
            <textarea class="form-control" id="message" name="message" rows="2" value="<?php echo $message ?>" placeholder="Write Message" ></textarea>
        </div> 

        <div class="input-box col-12">
            <button type="submit"><?php echo $buttonText ?> </button>
        </div>           
        
    </div>
</form> 
<!--success message-->
<section class="submission-section">
    <?php        
        echo $formDisplay;        
    ?>		
</section> 
