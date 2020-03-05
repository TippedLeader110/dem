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
		<span id="span" style="margin-top: 10px;display: none;" class="text-danger"><b>Username / Password tidak valid !!</b></span>
		<input type="text" name="username" id="username" placeholder="Username" required="required" pattern="[A-Za-z0-9]{1,20}" class="input-box input-group">
		<input type="password" name="password" id="password" placeholder="Password" required="required" pattern="[A-Za-z0-9]{1,20}" class="input-box input-group">
		<button class="input-box" id="login">Login</button>
		<a href="" class="forgot">Lupa Password</a>
		</form>
	</div>
</body>
</html>

<script type="text/javascript">
	$('#login').click(function(event) {
		event.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		$.ajax({
			url: '<?php echo base_url('repository/do_login') ?>',
			type: 'post',
			data: {username: username, password: password},
			success: function(re){
				if (re==0) {
					$('#span').fadeIn('fast');
					$('#username').removeClass('done');
					$('#password').removeClass('done');
					$('#username').addClass('fail');
					$('#password').addClass('fail');
				}
				else{
					$('#span').hide();
					$('#username').removeClass('fail');
					$('#password').removeClass('fail');
					$('#username').addClass('done');
					$('#password').addClass('done');
				}
			},
			error: function(re){
				
			}
		});
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
