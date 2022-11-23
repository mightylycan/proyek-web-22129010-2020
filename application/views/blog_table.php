<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title;?></title>
	<!-- load bootstrap css file -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<style type="text/css">
		table{
  		width: 100%;
	}
		th, td {
  		background-color: #96D4D4;
	}
		tr{
		border: 1px solid black;
  		border-collapse: collapse;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4"><?php echo $content ;?></h1>
			<table>
				<tr>
					<th>#</th>
					<th>First</th>
					<th>Last</th>
					<th>Handle</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mido</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery-3.6.1.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>