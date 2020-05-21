
<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>Edit Pemberitahuan ITFest 4.0 Universitas Sumatera Utara</h5>
				<hr>
			</div>
		</div>
		<?php foreach ($editPost as $key => $value): ?>
			
		<?php endforeach ?>
		<form id="formPost">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<input type="text" name="oldid" value="<?php echo $post?>" hidden>
							<input type="text" hidden name="id" value="<?php echo $this->session->userdata('id_u'); ?>">
							<label class="form-control-label" for="judul">Judul Pemberitahuan</label>
							<input type="text" name="judul" class="form-control" id="judul" value="<?php echo $value->judul ?>"></input>
								<div class="invalid-feedback">Tolong Deskripsi</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
						  <label for="kategori">Kategori</label>
						  <select class="custom-select" name="kategori" id="kategori">
								<option value="null" selected>Pilih Kategori</option>
									<?php foreach ($kat as $key => $vv): ?>
									 	<option value="<?php echo $vv->id ?>"><?php echo $vv->nama_kat ?></option>									
									<?php endforeach ?>
							</select>
						  <div id="sel01" class="invalid-feedback">Tolong Pilih Kategori</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<textarea id="temp" hidden><?php echo $value->isi ?></textarea>
						<label class="form-control-label" for="isi">Isi Pemberitahuan</label>
						<textarea name="isi" class="form-control" id="isi" id="isi"></textarea>
						<div class="invalid-feedback">Tolong Deskripsi</div>
					<div class="col-12" style="margin-top: 20px;">
						<button class="btn btn-outline-primary">Simpan</button>&nbsp;<button type="button" class="btn btn-outline-warning" id="return">Kembali</button>
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
	var val = $('#temp').val();
	CKEDITOR.instances.isi.setData(val);

	$('#return').click(function(event) {
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


		CKEDITOR.instances.isi.updateElement();
		var isi = CKEDITOR.instances.isi.getData();
		var form = new FormData(this)
		form.append('isi', isi);

		$.ajax({
			url: '<?php echo base_url('admin/doSimpanPost') ?>',
			type: 'post',
			data:form,
			processData:false,
            contentType:false,
            cache:false,
			success: function(er){
				if (er=='done') {
					console.log(er);
					Swal.fire('Berhasil','Perubahan berhasil disimpan', 'success');
					$('#loading').show();
	    			$('#contentPage').addClass('lodtime');
        			$('#contentPage').load('<?php echo base_url('admin/')?>Post',function() {
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
		
	});
</script>
