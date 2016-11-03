
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
</head>
	<body style="background:blue">
			<div class="col-md-4 col-md-offset-4" style="margin-top:15%">
				<div class="panel panel-default">
					<h3 align="center">Hello, <?php echo $nama_user;?>! <button type="button" class="btn btn-info btn-sm" onclick="window.location='<?php echo site_url("auth/keluar");?>'">Logout</button></h3>
				</div>
			</div>
	</body>
</html>
