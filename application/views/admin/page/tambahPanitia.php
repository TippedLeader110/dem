<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">
				<h5>Menambahkan hak akses untuk panitia kompetisi | ITFest 4.0 Universitas Sumatera Utara</h5>
				<hr>
			</div>
		</div>
		<form id="form">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="row">
					<div class="col-12 col-md-12">
						<div class="form-group">
							<input type="text" hidden name="id" value="<?php echo $this->session->userdata('panitia-id'); ?>">
							<label class="form-control-label" for="deskripsiSeleksi">Username Panitia</label>
							<input type="text" class="form-control" name="username">
								<div class="invalid-feedback">Tolong isi Username</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="deskripsiSeleksi">Password Panitia</label>
							<input type="password" name="password" class="form-control">
								<div class="invalid-feedback">Tolong Password</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label class="form-control-label" for="optionKompetisi">Cabang Kompetisi</label>
							<select name="kompetisi" id="optionKompetisi" class="form-control">
									<option value="null">----- Pilih cabang kompetisi -----</option>
								<?php foreach ($dataLomba as $key => $value): ?>
									<option value="<?php echo $value->id_lomba ?>"><?php echo $value->nama_lomba ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="col-12 col-md-12" style="margin-top: 20px;">
						<button class="btn btn-outline-primary">Tambah</button>&nbsp;<button class="btn btn-outline-warning" id="return">Kembali</button>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>


<script type="text/javascript">
	$('#form').submit(function(event) {
		event.preventDefault(); 
		$.ajax({
			url: '<?php echo base_url('admin/DoTambahpanitia') ?>',
			type: 'POST',
			data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            error: function(data){

            	Swal.fire('Kesalahan!!', 'Gagal menghubungkan ke server !!', 'error')
            },
            success: function(data){
            	if (data==1) {
            	Swal.fire('Berhasil !!', 'Panitia berhasil ditambahkan !!', 'success')
            	var delay = 1500; 
				setTimeout(function(){ 
					$('#contentPage').load('<?php echo base_url('admin/panitia') ?>'); }, delay);
            	}
            	else
            		Swal.fire('Kesalahan!!', 'Username telah digunakan !!', 'error')
            }
		})
	});

	$('#return').click(function(event) {
		event.preventDefault();
		$('#contentPage').load('<?php echo base_url('admin/panitia') ?>');
	});
</script>