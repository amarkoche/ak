<?php 
error_reporting(E_ALL);
ini_set("display errors","on");

// error values
$nameErr =  $emailErr = $phoneErr = $messageErr = "";

// form variables
$name = $email = $phone = $message = "";

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
    if(empty($_POST["name"])){
       $nameErr = "First & Last name is required";
       $validationPass  = false;
    }
    else{
       $name = text_input($_POST["name"]); 
    }

    // // Last name

    // if(empty($_POST["lname"])){
    //     $lnameErr = "Last name required";
    //     $validationPass  = false;
    // }
    // else{
    //     $lname = text_input($_POST["lname"]); 
    // }

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
            $mail->Subject = 'akSoftTech -Customer Equiry Message';
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
                                    $name
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
                          
                    <div class=" submission-contact alert alert-success" id="target" role="alert">
                        <div class="popup">
                        <i class="fa-solid fa-circle-check"></i>
                            <h2>Thank You!</h2>
                            </p> Your detals has been successfully submitted. Thanks! </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> OK
                        </button>
                        </div>
                    </div>
               
            ';

        } catch(Exception $e){
            $formDisplay = '

            <div class="alert alert-danger submission" id="target" role="alert">
               Message could not be sent. Try again or call us directly
            </div>           
            ';
        }

        $name = $email =  $phone = $message = "";
     }
};

?>
<form class="getintouch" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?># target" method="post">
    
    <div class="row">
        <div class="col-12">
            <div class="input-box">
                <!-- <label for="name" class="form-label">First Name</label> -->
                <div class="error "><?php echo $nameErr ?></div>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" placeholder="Name">
            </div>	

            <div class="input-box">
                <!-- <label for="email" class="form-label">Email</label> -->
                <div class="error"><?php echo $emailErr ?></div>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Email" >
            </div>

            <div class="input-box">
                <!-- <label for="phone" class="form-label"> Phone </label> -->
                <div class="error"><?php echo $phoneErr ?></div>
                <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>"  placeholder="Phone" >
            </div>

            <div class="input-box">
                <!-- <label for="message" class="form-label">Message</label> -->
                <div class="error"><?php echo $messageErr ?></div>
                <textarea class="form-control" id="message" name="message" rows="2" value="<?php echo $message ?>" placeholder="Write Message" ></textarea>
            </div>

            
        </div>
        <div class="input-box">
            <button type="submit"><?php echo $buttonText ?> </button>
        </div>
        
    </div>
</form>	 
<!--success message-->

    <?php        
        echo $formDisplay;        
    ?>		

