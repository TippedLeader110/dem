<!DOCTYPE html>
<html>
<head>
	<title>DEM Repositor</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/all.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css'); ?>" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main_repo.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<?php $this->load->view('repo/layout/navbar') ?>
	<div id="content">
		<div id="loading-prog">
			<div class="line">
			</div>
			<div class="line">
			</div>
			<div class="line">
			</div>
			<div class="line">
			</div>
			<div class="line">
			</div>
			<div class="line">
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">

	$('#content').load('<?php echo base_url('repository/mainPage') ?>',function() {
		$('#loading-prog').hide();
	});

	$('#home').click(function(event) {
		event.preventDefault();
		$('#content').empty();
		$('#loading-prog').show();
		$('#content').load('<?php echo base_url('repository/mainPage') ?>',function() {
		$('#loading-prog').hide();
	});
		$('#profile').removeClass('active');
		$(this).addClass('active');
	});

	$('#profile').click(function(event) {
		event.preventDefault();
		$('#content').load('<?php echo base_url('repository/profile') ?>').fadeIn('slow');
		$('#home').removeClass('active');
		$(this).addClass('active');
	});

</script>
