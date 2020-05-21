<div class="container bg-white" style="margin-top: 40px;">
	<div class="content">
		<h3>Upload paper baru</h3>
		<hr>
		<!-- TAHAP->>>>TAHAPTAHAP->>>>TAHAPTAHAP->>>>TAHAPTAHAP->>>>TAHAP -->
		<div id="sec01">
			<div class="row" style="margin-top: 10px;" id="sec01">
				<div class="col-12 col-md-12">
					<div class="table-responsive">
						<table class="table table-borderless">
							<tr>
								<td colspan="3">
									<div class="form-group">
									    <label for="judul">Judul Paper</label>
									    <input type="text" class="form-control form_upload" id="judul" placeholder="Ketik judul mu disini...." required>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
									    <label for="judul">Nama Publikasi</label>
									    <input type="text" class="form-control form_upload" id="judul" placeholder="">
									</div>
								</td>
								<td>
									<div class="form-group">
									    <label for="judul">Tahun</label>
									    <input type="text" class="form-control form_upload" id="judul" placeholder="">
									</div>
								</td>
								<td>
									<div class="form-group">
									    <label for="judul">Kategori</label>
									    <select class="form-control form_upload">
									    	<option></option>
									    	<?php foreach ($kat_nama as $key => $kat): ?>
									    		<option value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nama_kat ?></option>
									    	<?php endforeach ?>
									    </select>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<div class="form-group">
									    <label for="judul">Jenis Penelitian</label>
									    <input type="text" class="form-control form_upload" id="judul" placeholder="">
									</div>
								</td>
								<td>
									<div class="form-group">
									    <label for="judul">Nomor DOI</label>
									    <input type="text" class="form-control form_upload" id="judul" placeholder="">
									</div>
								</td>
							</tr>
						</table>
						</div>
					</div>
				<div class="col-12 col-md-12">
					<div class="table-responsive">
						<table class="table table-borderless">
							<tr>
								<td>
									<div class="form-group">
										<label for="Abstract">Abstract</label>
										<textarea id="Abstract" class="form-control form_upload" style="height: 326px;" placeholder="Ketik abstract mu disini...."></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div style="float: right;">
										<button class="btn btn-primary" id="doUp">Upload File</button>&nbsp;<button class="btn btn-danger" id="cancel01">Batal</button>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="sec02" style="display: none;">
			<div class="row" style="margin-top: 10px;">
				<div class="col-12 col-md-12">
					<div class="container">
						<div class="upload_border">
							<div id="up_ico">
								<center>
									<a href="#">
										<i class="fas fa-file-upload"></i>
									</a>
								</center>
							</div>
						</div>
						<div style="float: right;">
							<button class="btn btn-primary" id="doUp">Kirim</button>&nbsp;<button class="btn btn-danger" id="cancel02">Kembali</button>
						</div>
					</div>
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

	$('#cancel02').click(function(event) {
		event.preventDefault();
		$('#sec01').fadeIn('fast', function() {

		});
		$('#sec02').fadeOut('fast', function() {
				
		});
	});

	$('#doUp').click(function(event) {
		event.preventDefault();
		$('#sec02').fadeIn('fast', function() {
		});
		$('#sec01').fadeOut('fast', function() {
			
		});
	});


</script>