<div class="content" style="border-bottom: #f2f2f1 1px solid">
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="card">
				<div class="card-img">
					<img src="">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-8">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<td>Nama</td>
					</tr>
					<tr>
						<td>Email</td>
					</tr>
					<tr>
						<td>Dll</td>
					</tr>
					<tr>
						<td>Followers afilasi dll</td>
					</tr>
					<tr>
						<td><button class="btn btn-outline-success" id="upload">Upload</button></td><td>Edit</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="row">
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
	</div>

</div>

<script type="text/javascript">
	$('#upload').click(function(event) {
		event.preventDefault();
		$('#content').load('<?php echo base_url('repository/profile_fileupload') ?>').fadeIn('slow');
	});
</script>