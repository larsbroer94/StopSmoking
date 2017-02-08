<!doctype html>
<html>

	<head>
		<title>ThunderDrone Login</title>
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
							<a class="nav-link active" href="login.php">Login</a>
							<a class="nav-link" href="profile.php">Profiel</a>
						</nav>
					</div>
				</div>

				<div class="inner cover">
					<div class="headercontact">
						<h1 class="cover-heading">Login</h1>
					</div>

					<form action="loginparse.php" autocomplete="off" method="post">
						<div class="stakeholderkey" id="stakeholderkey">
							<i class="fa fa-key" aria-hidden="true"></i>
							<input type="text" name="unitkey" class="customform" id="first" maxlength="19" placeholder="Vul uw key in d.m.v. 0-9 & A-Z">
						</div>
						<button type="submit" class="submitbutton" id="submitbutton">Login!</button>
					</form>
				</div>
			</div>
		</div>
	</div>

    </body>
	<script>
		//var confirm = document.getElementById("submitbutton");

		function GetURLParameter(sParam)
		{
			var sPageURL = window.location.search.substring(1);
			var sURLVariables = sPageURL.split('&');
			for (var i = 0; i < sURLVariables.length; i++)
			{
				var sParameterName = sURLVariables[i].split('=');
				if (sParameterName[0] == sParam)
				{
					return sParameterName[1];
				}
			}
		}

		if(GetURLParameter('success') == 'false') {
			swal({
				title: "Fout",
				type: "error",
				text: "De ingevulde key is ongeldig!",
				allowOutsideClick: true,
				showConfirmButton: true,
				html: true,
				confirmButtonText: "Sluit"
			});
		}
	</script>

	<script type="text/javascript">
		/*document.getElementById('first').addEventListener('input', function (e) {
			var target = e.target, position = target.selectionEnd, length = target.value.length;

			target.value = target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
			target.selectionEnd = position += ((target.value.charAt(position - 1) === ' ' && target.value.charAt(length - 1) === ' ' && length !== target.value.length) ? 1 : 0);
		});*/
	</script>
</html>
