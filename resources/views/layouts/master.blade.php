<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="initial-scale=1">
	<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/opensans-web-font.css" />
	<link rel="stylesheet" href="../css/montserrat-web-font.css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" href="../css/plugins.css" />
	<title>@yield('title')</title>
</head>
<body>
	@yield('navigation')
	@yield('content')
	@yield('footer')
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
	<script src="../js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>