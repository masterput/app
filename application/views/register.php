<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Register Akun</title>
</head>

<body>
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-5 offset-md-3">
				<div class="card">
					<div class="card-body">
						<label>REGISTER</label>
						<hr>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" id="username" placeholder="Masukkan Username"> </div>
						<!-- <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                </div> -->
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" id="email" placeholder="Masukkan Email"> </div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" id="password" placeholder="Masukkan Password"> </div>
						<div class="form-group">
							<label>Role</label>
							<input type="hidden" class="form-control" id="role" value='2'> </div>
						<button class="btn btn-register btn-block btn-success">REGISTER</button>
					</div>
				</div>
				<div class="text-center" style="margin-top: 15px"> Sudah punya akun? <a href="<?php echo base_url() ?>index.php/login">Silahkan Login</a> </div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
	<script>
	$(document).ready(function() {
		$(".btn-register").click(function() {
			var username = $("#username").val();
			var email = $("#email").val();
			var password = $("#password").val();
			var role = $("#role").val();
			if(username.length == "") {
				Swal.fire({
					type: 'warning',
					title: 'Oops...',
					text: 'Username Wajib Diisi !'
				});
				// } else if(nama_lengkap.length == "") {
				// Swal.fire({
				//     type: 'warning',
				//     title: 'Oops...',
				//     text: 'Nama Lengkap Wajib Diisi !'
				// });
			} else if(email.length == "") {
				Swal.fire({
					type: 'warning',
					title: 'Oops...',
					text: 'Email Wajib Diisi !'
				});
			} else if(password.length == "") {
				Swal.fire({
					type: 'warning',
					title: 'Oops...',
					text: 'Password Wajib Diisi !'
				});
			} else {
				//ajax
				$.ajax({
					url: "<?php echo base_url() ?>index.php/register/simpan",
					type: "POST",
					data: {
						"username": username,
						"email": email,
						"password": password,
						"role": role
					},
					success: function(response) {
						if(response == "success") {
							Swal.fire({
								type: 'success',
								title: 'Register Berhasil!',
								text: 'silahkan login!'
							});
							$("#username").val('');
							$("#nama_lengkap").val('');
							$("#email").val('');
							$("#password").val('');
						} else {
							Swal.fire({
								type: 'error',
								title: 'Register Gagal!',
								text: 'silahkan coba lagi!'
							});
						}
						console.log(response);
					},
					error: function(response) {
						Swal.fire({
							type: 'error',
							title: 'Opps!',
							text: 'server error!'
						});
					}
				})
			}
		});
	});
	</script>
</body>

</html>