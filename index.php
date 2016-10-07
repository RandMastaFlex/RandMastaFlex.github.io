<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

<!------------------------ Bootstrap compiled and minified css ------------------------>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-------------------compiled and minified Javascript ------------>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!---------------------- Jquery CDN ------------------>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<link rel="stylesheet" href="Styles.css">

	<title>Drone Delegation.</title>



</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">DD</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavBar">
			<ul id="navUl"class="nav navbar-nav navbar-right">
		  		<li id="navli"><a id="navA" href="#">Home</a></li>
		  		<li id="navli"><a id="navA" href="#Videography">Videography</a></li>
		  		<li id="navli"><a id="navA" href="#">Volumetric Readings</a></li>
		  		<li id="navli"><a id="navA" href="#">Contact Us</a></li>
			</ul>

		</div>
	</div>

</nav>
	<div id="vidContainer">
		<video autoplay muted loop>
			<source src="BrunswickVideo.mp4" type="video/mp4">
		</video>
	</div>
	
	<div id="textSectionWhite">
		<iframe id="videoLeft" width="560" height="315" src="https://www.youtube.com/embed/1vXSjSQOH14" frameborder="0" allowfullscreen></iframe>
			<div id="textRight">
				<h1>Real Estate</h1>
				<ul>
					<li>Be on The Cutting Edge of Drone footage in real estate and get never-seen-before aspects of your property. </li>
					<li>Help show your property in a more appealing way than ever and increase the perceived value by using aerial video.</li>
					<li>Stand out from the crowd by having 4K aerial video and see what a difference it can make. </li>
					<li>Receive an edited personalized high quality short film that will stand out while customers search online.</li>
				</ul>
			</div>
	</div>

	<div id="textSectionGray">
		<iframe id="videoRight" width="560" height="315" src="https://www.youtube.com/embed/uIR72cMMQac" frameborder="0" allowfullscreen></iframe>
		<div id="textLeft">
			<h1>Aerial 4K video </h1>
			<ul>
				<li>Inspection of hard to reach places that otherwise could take days can be achieved in only hours. </li>
				<li>Working on a film that is missing something special to make it stand out? We can get the aerial footage that you envision.</li>
				<li>Promote your outdoor venue with a bird's eye view to really encompass what you offer.</li>
				<li>Store front high quality video to add to your advertisement.</li>
				<li>Construction site overview to monitor progress. Show how far along you are with style at your next meeting with weekly or monthly flyovers.</li>	
			</ul>
		</div>

	</div>

	<div id="textSectionWhite">
		<h1>Delegate Today</h1>
		<div id="contactForm">
		<form method="post" name="myemailform" action="Form-To-Email.php">
		First Name:
			<input type="text" name="firstName"><br><br>
		Last Name:
			<input type="text" name="lastName">
			<br><br>
		Email Address:
			<input type="text" name="email">
			<br><br>
		Message:<br>
		<textarea name="message" rows="10" cols="30">
		Inquire here!

		</textarea>
		<input type="submit" name="Submit">

		</form>
			

	</div>
	
</body>
</html>