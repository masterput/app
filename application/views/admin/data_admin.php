<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Admin</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA ADMIN
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/siswa/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                    $no = 1;
                    foreach($data_admin as $admin){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $admin->username ?></td>
                      <td><?php echo $admin->email ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>index.php/siswa/edit/<?php echo $admin->id_admin ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="<?php echo base_url() ?>index.php/siswa/hapus/<?php echo $admin->id_admin ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html> -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>Data Admin</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Sistem Pakar Diagnosa Penyakit Lambung</span>
  </nav>
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group">
					<li class="list-group-item active">MAIN MENU</li> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Dashboard</a> <a href="<?php echo base_url() ?>index.php/admin/" class="list-group-item" style="color: #212529;">Admin</a> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Users</a> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Basis Pengetahuan</a> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Gejala</a> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Hasil</a> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Penyakit</a> <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Post Informasi</a>
					<!-- <li class="list-group-item">Profile</li> --><a href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item list-group-item-action list-group-item-danger" style="color: #ab1340;">Logout</a> </ul>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header"> DATA ADMIN </div>
					<div class="card-body"> <a href="<?php echo base_url() ?>index.php/admin/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
						<table class="table table-bordered" id="myTable">
							<thead>
								<tr>
									<th scope="col">NO.</th>
									<th scope="col">USERNAME</th>
									<th scope="col">EMAIL</th>
									<th scope="col">AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                    $no = 1;
                    foreach($data_admin as $admin){
                  ?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $admin->username ?>
										</td>
										<td>
											<?php echo $admin->email ?>
										</td>
										<td class="text-center"> <a href="<?php echo base_url() ?>index.php/admin/edit/<?php echo $admin->id_admin ?>" class="btn btn-sm btn-primary">EDIT</a> 
                    <a href="<?php echo base_url() ?>index.php/admin/hapus/<?php echo $admin->id_admin ?>" class="btn btn-sm btn-danger">HAPUS</a> 
                  </td>
									</tr>
									<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
	</script>
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