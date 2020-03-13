<!DOCTYPE html>
<html>
<head>
	<title>DEM Repositor</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<div class="login">
		<form class="fo">
		<h1 class="head" >Sign In</h1>
		<span id="span" style="margin-top: 10px;display: none;"></span>
		<input type="text" name="username" id="username" placeholder="Email" required="required" value="" class="input-box input-group">
		<input type="password" name="password" id="password" placeholder="Password" required="required" value="" class="input-box input-group">
		<button class="input-box" id="login">Login</button>
		<div class="d-flex justify-content-between">
			<span><a href="<?php echo base_url("repository/signup") ?>" class="forgot">Daftar akun</a></span>
			<span><a href="<?php echo base_url("repository/login") ?>" class="forgot">Lupa Password</a></span>
		</div>
		</form>
	</div>
</body>
</html>

<script type="text/javascript">
	$('#login').click(function(event) {
		event.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		if (username.length!=0 && password.length!=0) {
			$.ajax({
				url: '<?php echo base_url('repository/do_login') ?>',
				type: 'post',
				data: {email: username, password: password},
				success: function(re){
					if (re==0) {
						$('#span').addClass('text-danger');
						$('#span').removeClass('text-success');
						$('#span').html('<b>Email / Password tidak valid !! </b>');
						$('#span').fadeIn('slow');
						$('#username').removeClass('done');
						$('#password').removeClass('done');
						$('#username').addClass('fail');
						$('#password').addClass('fail');
					}
					else{
						$('#span').addClass('text-success');
						$('#span').removeClass('text-danger');
						$('#span').html('<b>Selamat Datang</b>');
						$('#span').fadeIn('slow');
						$('#username').removeClass('fail');
						$('#password').removeClass('fail');
						$('#username').addClass('done');
						$('#password').addClass('done');
						setTimeout(function() {
							window.location.replace("<?php echo base_url("repository") ?>")
						}, 900);
					}
				},
				error: function(re){
					Swal.fire('Kesalahan !!', 'Terjadi kesalahan dengan server, silahkan hubungi admin ', 'error');
				}
			});
		}
		else{
			$('#span').html('<b>Tolong isi semua kolom !!</b>');
			$('#span').fadeIn('slow');
			$('#username').removeClass('done');
			$('#password').removeClass('done');
			$('#username').addClass('fail');
			$('#password').addClass('fail');
		}
	});

	$('input').each(function() {
		$(this).on('click change', function(event) {
			event.preventDefault();
			$('#username').removeClass('fail');
			$('#password').removeClass('fail');
			$('#span').hide();
		});
	});
</script>
