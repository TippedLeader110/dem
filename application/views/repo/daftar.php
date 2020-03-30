<!-- pattern="[A-Za-z0-9]{1,20}" -->
<!DOCTYPE html>
<html>
<head>
	<title>DEM Repositor</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/daftar.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<div class="daftar">
		<form class="fo">
		<h1 class="head" >Sign Up</h1>
		<span id="span" style="margin-top: 10px;display: none;" class="text-danger"></span>
		<div id="phase01">
			<input type="email" name="email" id="email" placeholder="Email" required="required" value="" class="input-box input-group">
			<input type="text" name="username" id="username" placeholder="Full name" required="required" value="" class="input-box input-group">
			<input type="password" name="password" id="password" placeholder="Password" required="required" value="" class="input-box input-group">
			<button class="input-box" id="login">Daftar</button>
			<a href="<?php echo base_url("repository/login") ?>" class="forgot">Sudah punya akun ?</a>
		</div>
		<div id="phase02" class="forgot" style="display: none;margin-top: 50px;">
			Tolong veriikasi email untuk mengaktifkan akun anda.
			<button class="input-box" id="verifikasi">Verifikasi Email</button>
			<span id="verk" style="display: none;">Link verifikasi email telah dikirim ke email anda.</span>
		<div>
			
		</div>
		</form>
	</div>
</body>
</html>
	
<script type="text/javascript">
var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

	$('#verifikasi').click(function(event) {
		event.preventDefault();
		$('#verk').fadeIn('fast');
	});



	$('#login').click(function(event) {
		event.preventDefault();
		var fullname = $('#username').val();
		var email = $('#email').val();
		var password = $('#password').val();
		if (username.length!=0 && password.length!=0 && email.length!=0) {
			$.ajax({
				url: '<?php echo base_url('repository/do_signup') ?>',
				type: 'post',
				data: {fullname: fullname, password: password, email: email},
				success: function(re){
					if (re==0) {
						Swal.fire('Kesalahan !!', 'Terjadi kesalahan dengan server !!!', 'error');
					}
					else{
						$('#phase01').fadeOut('fast');
						$('#phase02').fadeIn('fast');
					}
				},
				error: function(re){
					
				}
			});
		}
		else{
			$('#span').html('<b>Tolong isi semua kolom !!</b>');
			$('#span').fadeIn('slow');
			$('#username').removeClass('done');
			$('#password').removeClass('done');
			$('#email').removeClass('done');
			$('#username').addClass('fail');
			$('#email').addClass('fail');
			$('#password').addClass('fail');
		}
	});

	$('input').each(function() {
		$(this).on('click change', function(event) {
			event.preventDefault();
			$('#username').removeClass('fail');
			$('#email').removeClass('fail');
			$('#password').removeClass('fail');
			$('#span').hide();
		});
	});

	$('#email').on('click change keyup', function(event) {
		event.preventDefault();
		if (!pattern.test($(this).val())) {
			$('#email').addClass('fail');
		}
		else{
			$('#email').removeClass('fail');
		}
	});

</script>
