<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Tambah Admin</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
    	<span class="navbar-brand mb-0 h1">Sistem Pakar Diagnosa Penyakit Lambung</span>
  	</nav>
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group">
					<li class="list-group-item active">MAIN MENU</li> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Dashboard</a> 
                <a href="<?php echo base_url() ?>index.php/admin/" class="list-group-item" style="color: #212529;">Admin</a> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Users</a> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Basis Pengetahuan</a> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Gejala</a> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Hasil</a> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Penyakit</a> 
                <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Post Informasi</a>
                            <!-- <li class="list-group-item">Profile</li> -->
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item list-group-item-action list-group-item-danger" style="color: #ab1340;">Logout</a> 
                </ul>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header"> EDIT ADMIN </div>
					<div class="card-body">
						<form action="<?php echo base_url() ?>index.php/admin/update" method="POST">
							<div class="form-group">
								<label>USERNAME</label>
								<input type="text" name="username" value="<?php echo $data_admin->username ?>" placeholder="Masukkan Username" class="form-control"> </div>
							<div class="form-group">
								<label>EMAIL</label>
								<input type="text" name="email" value="<?php echo $data_admin->email ?>"placeholder="Masukkan Email" class="form-control"> </div>
							<div class="form-group">
								<label>PASSWORD</label>
								<input type="password" name="password" value="<?php echo $data_admin->password ?>" placeholder="Masukkan Password" class="form-control"> </div>
							<div class="form-group">
								<input type="hidden" name="role" class="form-control" value="2"> </div>
							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-warning">RESET</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<footer class="footer bg-light text-center text-lg-start">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2023 Copyright:
			<a class="text-dark" >Master</a>
		</div>
		<style type="text/css">
			.footer{
			width: 100%;
			height: 90px;
			line-height: 50px;
			background: #333;
			color: #fff;
			position: absolute;
			bottom: 0px;
			}
		</style>
	</footer>
</body>

</html>