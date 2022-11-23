<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title;?></title>
	<!-- load bootstrap css file -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
<div class="container">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4"><?php echo $content ;?></h1>
			<p class="lead">This is my first blog.</p>
		</div>
	</div>
</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery-3.6.1.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>