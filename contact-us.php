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
		    <a href="javascript:history.go(-1);" data-icon="back" class="ui-btn-right">Back</a>
		</div><!-- /header -->

			<div role="main" class="ui-content mainstyle fixcontent">
				<p><strong>The Veneers Dental Office</strong><br>
				911 Hampshire Road<br>
				Suite 37<br>
				Westlake Village, CA 91361<br>
				Phone: 805.225.7502</p>

				<hr>

				<h2>What can we help you with?</h2>

				<form action="landing_form_comformation3.php" name="contact_form" method="POST" id="userForm" data-ajex="false">
					
					 <div data-role="fieldcontain">
		            	<label for="name">Name* : </label>
		                <input type="text" name="name" id="name" placeholder="" value="" />
		            </div>
		            <div data-role="fieldcontain">
		            	<label for="email">Email* : </label>
		                <input type="text" name="email" id="email" placeholder="" value="" />
		            </div>
		            <div data-role="fieldcontain">
		            	<label for="phone">Phone* : </label>
		                <input type="text" name="phone" id="phone" placeholder="" value="" />
		            </div>             
		            <div data-role="fieldcontain">
		            	<label for="message">Message* : </label>
		                <input type="text" name="message" id="message" placeholder="" value="" />
		            </div>
		            <button type="submit" name="submit" value="submit" data-theme="a">Submit</button>
				</form>

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