<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	<!--[if lt IE 9]>
	  <script type="text/javascript" src="/js/excanvas/excanvas.js"></script>
	<![endif]-->
	<script type="text/javascript" src="lib/js/spinners/spinners.min.js"></script>
	<script type="text/javascript" src="lib/js/lightview/lightview.js"></script>

	<link rel="stylesheet" type="text/css" href="lib/css/lightview/lightview.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>*{font-family: 'Montserrat', sans-serif;}</style>
    <title><?=$title?></title>
</head>
<body>
	<div class="w3-container w3-teal">
		<h1><?=$title?></h1>
	</div>
    <?php include $content; ?>
</body>
</html>