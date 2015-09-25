<!DOCTYPE html>
<html>
	<head>
		<title>Special Offers</title>
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
			<h2>Special Offers</h2>
		    <a href="javascript:history.go(-1);" data-icon="back" class="ui-btn-right">Back</a>
		</div><!-- /header -->

			<div role="main" class="ui-content mainstyle fixcontent">
				<p class="center"><img src="http://www.dentist4veneers.com/images/coupon2015-veneers-june-01.jpg" alt="Special Offer" class="img-responsive"/></p>

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