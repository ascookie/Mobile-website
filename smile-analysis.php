<!DOCTYPE html>
<html>
	<head>
		<title>Smile Analysis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<style>
			.result{display: none;}
		</style>
	</head>
	<body>
		<div data-role="page">

	
			<div data-role="header" style="overflow:hidden;" class="fixHeader">
				<a href="http://m.dentist4veneers.com" rel="external" data-icon="home" class="ui-btn-left">Home</a>
				<h2>Smile Analysis</h2>
			    <a href="javascript:history.go(-1);" data-icon="back" class="ui-btn-right">Back</a>
			</div><!-- /header -->

			<div role="main" class="ui-content mainstyle fixcontent">

				<p><br/><iframe src="https://www.youtube.com/embed/9sItUjwNb5I?rel=0" frameborder="0" style="width:100%;height: 320px;" allowfullscreen></iframe></p>
				<h2>Take the Survey</h2>

				<p>Your smile affects your self-image, and can greatly influence the quality of your interactions with others.  Many people hold back from laughing or smiling because they are uncomfortable with their smile.  The following questions are designed to honestly appraise your smile.  Go to a mirror, smile as wide as you can, and ask yourself the following questions:</p>

				<hr>

				<!-- <form method="get" action="returnResult()"> -->

					<label for="slider01">Are any of your teeth yellow, stained or somewhat discolored?</label>
					<select name="slider01" id="slider01" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider02">Would you like your teeth to be whiter?</label>
					<select name="slider02" id="slider02" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider03">Do you have any gaps or spaces between your teeth?</label>
					<select name="slider03" id="snoer03" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider04">Are any of your teeth turned, crooked, or uneven?</label>
					<select name="slider04" id="slider04" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider05">Are you missing any teeth?</label>
					<select name="slider05" id="slider05" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider06">Do you see any pitting or defects on the surfaces of your teeth?</label>
					<select name="slider06" id="slider06" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider07">Are the edges of any teeth worn down, chipped or uneven?</label>
					<select name="slider07" id="slider07" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider08">Do any of your teeth appear too small, short, large or long?</label>
					<select name="slider08" id="slider08" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider09">Do you have any prior dental work that appears unnatural?</label>
					<select name="slider09" id="slider09" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider10">Do you have any crowns or bridges that appear dark at the edge of your gums?</label>
					<select name="slider10" id="slider10" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider11">Do you have any gray, black or silver (mercury) fillings in your teeth?</label>
					<select name="slider11" id="slider11" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider12">Do you have a "gummy" smile (too much of your gums show when smiling)?</label>
					<select name="slider12" id="slider12" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider13">Are your gums red, sore, puffy, bleeding or receded?</label>
					<select name="slider13" id="slider13" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider14">Does the appearance of your smile inhibit you from laughing or smiling?</label>
					<select name="slider14" id="slider14" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider15">When being photographed, do you smile with your lips closed instead of flashing a full smile?</label>
					<select name="slider15" id="slider15" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider16">Are you self-conscious about your teeth or smile?</label>
					<select name="slider16" id="slider16" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<label for="slider17">Would you like to change anything about the appearance of your teeth or smile?</label>
					<select name="slider17" id="slider17" data-role="slider">
					    <option value="no">No</option>
					    <option value="yes">Yes</option>
					</select>

					<hr>

					<input type="submit" value="Submit" onclick="returnResult()">
				<!-- </form> -->
				
				<div class="result">

					<p><br/>there are often several alternatives to improve your teeth and smile. To receive a personalized response to your smile analysis, please complete the form below.</p>

					<p>You can have the smile you've always wanted! To schedule a FREE, no obligation office consultation, contact us today to schedule an appointment.</p>

					<a href="contact-us.php" rel="external"><button data-theme="b">Contact Us</button></a>
				</div>
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
			



		<script>
			function returnResult(){
				$(".result").show("slow");
			}
		</script>


	</body>
</html>