<!DOCTYPE html>
<html>
	<head>
		<title>Error</title>
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
			<h2>Error</h2>
		    <a href="javascript:history.go(-1);" data-icon="back" class="ui-btn-right">Back</a>
		</div><!-- /header -->

			<div role="main" class="ui-content mainstyle fixcontent">
				     <p><br/><?php  echo "We are very sorry, but there were error(s) found with the form you submitted. ";
				        echo "Please Fill in '<b>'all required information'</b>' to get your form processed.<br /><br />";
				        //echo $error."<br /><br />"; ?></p>
				       <p> <a data-role="button" onClick="javascript:history.go(-1);">Back to Contact Form</a>	      <br/><br/></p>

			</div>
			<div class="callAction center">
				<a data-theme="b" href="tel:+18052257502" class="ui-btn ui-shadow callBtn"><i class="fa fa-phone fa-lg"></i> <i>Call Us Now</i></a>

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