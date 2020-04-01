<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/profil.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<div class="cnavbar bscroll">
		<div class="logo">
			<a href="<?php echo base_url() ?>" style="color: white"><img class="logo" src="<?php echo base_url('assets/img/home/logo-pf.png') ?>" alt="DEM Indonesia" width="70" height="70"> DEM Indonesia</a>
		</div>
		<div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" style="color:white">Account</a>
              	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              		<a class="dropdown-item" href="#">Notifikasi</a>
              		<a class="dropdown-item" href="#">Pengaturan</a>
                	<a class="dropdown-item" href="#">Bantuan</a>
                	<a class="dropdown-item" href="#">Keluar</a>
              	</div>
        </div>
	</div>
	<div class="content" style="border-bottom: #f2f2f1 1px solid">
		<div class="row">
			<div class="col col-12 col-md-4">
				<div class="card" align="center">
					<div class="card-body">
						<div class="page-header-image">
							<img class="img" src="<?php echo base_url('assets/img/home/user.png') ?>">
						</div>
						<div class="field-wel">
	          				<h4 style="color: white">
	            			<b>user_id</b>
	          				</h4>
	        			</div>
        			</div>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<div class=" tbl table-responsive">
					<table class="table">
						<tr>
							<td>Nama</td>
						</tr>
						<tr>
							<td>Jabatan</td>
						</tr>
						<tr>
							<td>Email</td>
						</tr>
						<tr>
							<td>Telepon</td>
						</tr>
						<tr>
							<td>Status</td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!--<div class="row">
			<div class="col-12 col-md-12">
				<div class="bg-white content-border shadow-sm">
					<h4>My Papers</h4>
					<hr>
					<div class="card">
						<div class="card-header">
							<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h3>
						</div>
						<div class="card-body">
							Date: View: Dll.
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</div>

	<script type="text/javascript">
		$('#upload').click(function(event) {
			event.preventDefault();
			$('#content').load('<?php echo base_url('repository/profile_fileupload') ?>').fadeIn('slow');
		});
	</script>
</body>