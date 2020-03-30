<div class="container bg-white" style="margin-top: 40px;">
	<div class="content">
		<h3>Upload paper baru</h3>
		<hr>
		TAHAP->>>>TAHAPTAHAP->>>>TAHAPTAHAP->>>>TAHAPTAHAP->>>>TAHAP
		<div class="row" style="margin-top: 10px;">
			<div class="col-12 col-md-6">
				<div class="form-group">
				    <label for="judul">Judul Paper</label>
				    <input type="text" class="form-control" id="judul" placeholder="Judul paper">
				</div>
				<div class="form-group">
				    <label for="judul">Judul Paper</label>
				    <input type="text" class="form-control" id="judul" placeholder="Judul paper">
				</div>
				<div class="form-group">
				    <label for="judul">Judul Paper</label>
				    <input type="text" class="form-control" id="judul" placeholder="Judul paper">
				</div>
				<div class="form-group">
				    <label for="judul">Judul Paper</label>
				    <input type="text" class="form-control" id="judul" placeholder="Judul paper">
				</div>
				<div class="form-group">
				    <label for="judul">Judul Paper</label>
				    <input type="text" class="form-control" id="judul" placeholder="Judul paper">
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="Abstract">Abstract</label>
					<textarea id="Abstract" class="form-control" style="height: 326px;"></textarea>
				</div>
				<div style="float: right;">
					<button class="btn btn-primary">Upload File</button>&nbsp;<button class="btn btn-danger" id="cancel01">Batal</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#cancel01').click(function(event) {
		event.preventDefault();
		$('#content').load('<?php echo base_url('repository/profile') ?>').fadeIn('slow');
	});
</script>