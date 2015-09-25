<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "westlakesmiledesign@yahoo.com";
    $email_subject = "Mobile Website Contact Form - dentist4veneers.com";
     
     
    function died($error) {
		$curl = curl_init('http://m.dentist4veneers.com/error.php');
			curl_setopt($curl, CURLOPT_FAILONERROR, true);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
			$result = curl_exec($curl);
			echo $result; 
			die();
			}
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
		!isset($_POST['phone']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }




     
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    
	 $telephone = $_POST['phone']; // not required
	$msg = $_POST['message'];
   // $office = $_POST['select-choice-1']; // required
	//$dentalInsuranceType = $_POST['select-choice-2']; // required
	//$procedures = $_POST['select-choice-3']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
	//$email_message .= "Insurance: ".clean_string($insurance)."\n";
    $email_message .= "Message: ".clean_string($msg)."\n";
	//$email_message .= "Office: ".clean_string($office)."\n";
	//$email_message .= "Dental Insurance Type: ".clean_string($dentalInsuranceType)."\n";
	//$email_message .= "Procedures: ".clean_string($procedures)."\n";
     
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" . 
'Bcc: kevin@avitalweb.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
 

 
<?php
} 

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  </head>
  <body>
    <div data-role="page">

  
    <div data-role="header" style="overflow:hidden;" class="fixHeader">
      <a href="http://m.dentist4veneers.com" rel="external" data-icon="home" class="ui-btn-left">Home</a>
      <h2>Contact Us</h2>
        <!-- <a href="javascript:history.go(-1);" data-icon="back" class="ui-btn-right">Back</a> -->
    </div><!-- /header -->

      <div role="main" class="ui-content mainstyle fixcontent">
        
                <center>You message has been send,</br>We will contact you shortly.</center>
      </div>
      <div class="callAction center">
        <a data-theme="b" href="#" class="ui-btn ui-shadow callBtn"><i class="fa fa-phone fa-lg"></i> <i>Call Us Now</i></a>

      </div>
      <div class="homelist">
        <?php include "homelist.php" ?>
      </div>
      <div data-role="footer">
        <?php include "footer.php" ?>
      </div>
    </div>
  </body>
</html>
		

