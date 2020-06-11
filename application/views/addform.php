<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/style_css/addform.css">


</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Members</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Full_name:</label>
					<input type="text" class="form-control" name="Full_name"required>
				</div>
				<div class="form-group">
					<label>National_id:</label>
					<input type="text" class="form-control" name="National_id"required>
				</div>
				<div class="form-group">
					<label>Date_of_Birth:</label>
					<input type="Date" class="form-control" name="Date_of_Birth"required>
				</div>
				<div class="form-group">
					<label>Gender:</label>
					<input type="text" class="form-control" name="Gender">
				</div>
				<div class="form-group">
					<label>Marital_status:</label>
					<input type="text" class="form-control" name="Marital_status">
				</div>
				<div class="form-group">
					<label>Job_title:</label>
					<input type="text" class="form-control" name="Job_title">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="Address">
				</div>
				<div class="form-group">
					<label>Mobile:</label>
					<input type="text" class="form-control" name="Mobile">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" name="Email">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>