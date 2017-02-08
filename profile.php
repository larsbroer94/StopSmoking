<?php require_once('includes/sessiondata.php');
if(sessionCheck() == false) {
	//header("Location: login.php");
	echo 'fuck';
	die();
} ?>
<!doctype html>
<html>

<head>
	<title>ThunderDrone Profiel</title>
	<meta name="description" content="width=device-width, user-scalable=no" />
	<meta charset="utf-8" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

	<script src="sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>

<body>
<div class="site-wrapper" id="contact">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="masthead clearfix">

				<div class="inner" id="navbar">
					<nav class="nav nav-masthead">
						<a class="nav-link" href="./">Home</a>
						<a class="nav-link" href="login.php">Login</a>
						<a class="nav-link active" href="profile.php">Profiel</a>
					</nav>
				</div>
			</div>

			<div class="inner cover">
				<div class="headercontact">
					<h1 class="cover-heading">Profiel</h1>
				</div>



				<div class="map">
					<img src="css/img/LocatieRotterdam.png"></img>
				</div>
				<div class="userinfo_labeltop">
					Bedrijf-/adresgegevens
				</div>
				<div class="userinfo">
					<i class="fa fa-key" aria-hidden="true"></i>
					Veiligheidsregio Rotterdam-Rijnmond
				</div>
				<div class="userinfo">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					Wilhelminakade 947
					postcode
					Rotterdam
				</div>

				<div class="userinfo_labelbot">
					Contactpersoon
				</div>
				<div class="userinfo">
					<i class="fa fa-address-book-o" aria-hidden="true"></i>
					Pascal de Jager
				</div>
				<div class="userinfo">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<a href="mailto:Testmail@mail.com">Testmail@mail.com</a>
				</div>
				<div class="userinfo">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<a href="tel:0612345678">06 - 12 34 56 78</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script>
	var confirm = document.getElementById("submitbutton");
	confirm.onclick = function(){
		swal({
			title: "Successvol",
			type: "success",
			text: "Het ingloggen is gelukt! <br><br> Althans, dat denken we...",
			allowOutsideClick: true,
			showConfirmButton: true,
			html: true,
			confirmButtonText: "Sluit"
		});
	}
</script>

<script type="text/javascript">
	document.getElementById('first').addEventListener('input', function (e) {
		var target = e.target, position = target.selectionEnd, length = target.value.length;

		target.value = target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
		target.selectionEnd = position += ((target.value.charAt(position - 1) === ' ' && target.value.charAt(length - 1) === ' ' && length !== target.value.length) ? 1 : 0);
	});
</script>
</html>