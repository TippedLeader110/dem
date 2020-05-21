
<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>Tambah Artikel</h5>
				<hr>
			</div>
		</div>
		<form id="formPost">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<input type="text" hidden name="id" value="<?php echo $this->session->userdata('id_u'); ?>" required>
							<label class="form-control-label" for="judul">Judul Artikel</label>
							<input type="text" name="judul" class="form-control" id="judul"></input>
								<div class="invalid-feedback">Tolong isi judul</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
						  <label for="kategori">Kategori</label>
						  <select class="custom-select" name="kategori" id="kategori">
								<option value="null" selected>Pilih Kategori</option>
									<?php foreach ($kat as $key => $value): ?>
									 	<option value="<?php echo $value->id ?>"><?php echo $value->nama_kat ?></option>									
									<?php endforeach ?>
							</select>
						  <div id="sel01" class="invalid-feedback">Tolong Pilih Kategori</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<label class="form-control-label" for="isi">Isi Artikel</label>
						<textarea name="isi" class="form-control" id="isi" id="isi"></textarea>
						<div class="invalid-feedback">Tolong Deskripsi</div>
					<div class="col-12" style="margin-top: 20px;padding-left: 0px;">
						<button class="btn btn-outline-primary"><i class="fas fa-plus"></i>Tambah</button>&nbsp;<button type="button" class="btn btn-outline-warning" id="return">Kembali</button>
					</div>
				</div>
			</div>
			</div>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	CKEDITOR.replace( 'isi' );

	$('#return').click(function(event) {
		event.preventDefault();
		$('#loading').show();
	    $('#contentPage').addClass('lodtime');
        $('#contentPage').load('<?php echo base_url('admin/')?>Post',function() {
            $('#loading').hide();
            $('#contentPage').removeClass('lodtime');
        });   
	});

	$('#formPost').submit(function(event) {
		event.preventDefault();
		// var t = $('#title').val();
		// var waktu = $('#waktu').val();
		if ($('#kategori').val()!='null') {

		CKEDITOR.instances.isi.updateElement();
		var isi = CKEDITOR.instances.isi.getData();
		var form = new FormData(this)
		form.append('isi', isi);

		$.ajax({
			url: '<?php echo base_url('admin/doTambahPost') ?>',
			type: 'post',
			data:form,
			processData:false,
            contentType:false,
            cache:false,
			success: function(er){
				if (er=='done') {
					console.log(er);
					Swal.fire('Berhasil','Artikel berhasil ditambahkan', 'success');
					$('#loading').show();
	    			$('#contentPage').addClass('lodtime');
        			$('#contentPage').load('<?php echo base_url('admin/')?>post',function() {
            			$('#loading').hide();
            			$('#contentPage').removeClass('lodtime');
        			});   
				}
				else{
					console.log(er);
					Swal.fire('Gagal','Terjadi kesalahan', 'error');
				}

			},
			error: function(er){
				console.log(er);
				Swal.fire('Gagal','Terjadi kesalahan', 'error');
			}
		});
		}	
		else{
			$('#sel01').fadeIn("fast");
		}
	});
</script>
