<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">
				<h5>Tambah kompetisi ITFest 4.0 Universitas Sumatera Utara</h5>
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
							<label class="form-control-label" for="deskripsiSeleksi">Nama Kompetisi</label>
							<input type="text" class="form-control" name="nama">
								<div class="invalid-feedback">Tolong isi nama kompetisi</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="deskripsiSeleksi">Deskripsi Kompetisi</label>
							<textarea name="deskripsi" class="form-control" id="deskripsiSeleksi"></textarea>
								<div class="invalid-feedback">Tolong isi deskripsi</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="custom-file">
						    <input name="rule" id="rule" type="file" class="custom-file-input" id="validatedCustomFile" required>
						    <label class="custom-file-label" for="validatedCustomFile">Upload File Rule Kompetisi</label>
						    <div class="invalid-feedback">Tolong input file</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="custom-file">
						    <input name="logo" id="logo" type="file" class="custom-file-input" id="validatedCustomFile" required>
						    <label class="custom-file-label" for="validatedCustomFile">Upload Logo Kompetisi</label>
						    <div class="invalid-feedback">Tolong input file</div>
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

	$('#rule').on('change',function(){
    	var fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName);
    })

    $('#logo').on('change',function(){
    	var fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName);
    })

	$('#form').submit(function(event) {
		event.preventDefault(); 
		$.ajax({
			url: '<?php echo base_url('admin/DoTambahlomba') ?>',
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
            	Swal.fire('Berhasil !!', 'Kompetisi berhasil ditambahkan !!', 'success')
            	var delay = 1500; 
				setTimeout(function(){ 
					$('#loading').show();
					$('#contentPage').addClass('lodtime');
					$('#contentPage').load('<?php echo base_url('admin/lomba') ?>', function(){
						$('#loading').hide();
						$('#contentPage').removeClass('lodtime');
					})}, delay);
            	}
            	else
            		Swal.fire('Kesalahan!!', 'Gagal upload !!', 'error')
            }
		})
	});

	$('#return').click(function(event) {
		event.preventDefault();
		$('#loading').show();
		$('#contentPage').addClass('lodtime');
		$('#contentPage').load('<?php echo base_url('admin/lomba') ?>', function(){
			$('#loading').hide();
			$('#contentPage').removeClass('lodtime');
		});
	});
</script>