<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>

	<!--link rel="stylesheet" type="text/css" href="<php echo base_url('style_css/user_list.css')?>"-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/style_css/user_list.css">


</head>
<body>

<!--style type="text/css">
/*body
{
	background-color: blue;
	background-image: url('../bootstrap/style_css/images/back.jpg');
	background-size: cover;
}
</style-->

<div class="container-fluid">

	<!--<img src "<php echo base_url('bootstrap/images/image1');?>" alt ="image1" style = "width=600px;"-->
	<h1 class="page-header text-center">Members</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered" style="background-color: #ffffff">
				<thead>
					<tr>
						<th>Id</th>
						<th>Full_name</th>
						<th>National_id</th>
						<th>Date_of_Birth</th>
						<th>Gender</th>
						<th>Marital_status</th>
						<th>Job_title</th>
						<th>Address</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($employee_details as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->Full_Name; ?></td>
							<td><?php echo $user->National_Id; ?></td>
							<td><?php echo $user->Date_of_birth; ?></td>
							<td><?php echo $user->Gender; ?></td>
							<td><?php echo $user->Marital_status; ?></td>
							<td><?php echo $user->Job_title; ?></td>
							<td><?php echo $user->Address; ?></td>
							<td><?php echo $user->Mobile; ?></td>
							<td><?php echo $user->Email; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>