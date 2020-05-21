<link href="<?php echo base_url('/assets/css/addons/datatables.min.css') ?>" rel="stylesheet">
<!-- <link rel="stylesheet" href="<?php echo base_url('/assets/css/mdb.min.css') ?>"> -->
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h5>Kelolah Kategori</h5>
			<hr>
			
		</div>
		<div class="container-fluid">
			<button class="btn btn-primary" id="tambahDO"><i class="fas fa-plus"></i>Tambah</button>&nbsp;
			<!-- <button class="btn btn-primary" id="backDo">Kembali</button> -->
		</div>
	</div>
	<div class="row" style="margin-top: 0px;">
		<div class="col-12">
			<div>
				<div class="table-responsive-small">
					<table id="dtBasicExample" class="table table-hover" cellspacing="0" width="100%">
						<thead class="bg-custom text-white">
							<th>#</th><th>Kategori</th><th></th><th></th>
						</thead>
						<?php $count=1; ?>
						<tbody>
						<?php foreach ($post as $key => $var): ?>
								<tr>
									<td>
										<?php echo $count;$count++; ?>
									</td>
									<td><?php echo $var->nama_kat ?></td>
									<!-- <td><button class="btn btn-primary" data-toggle='collapse' data-target='#cbody<?php echo $count ?>' aria-expanded='false'>Isi</button></td> -->
									<td><button class="btn btn-danger" onclick="hapusPost(<?php echo $var->id ?>)">Hapus</button></td><td><button class="btn btn-warning" onclick="editPost(<?php echo $var->id ?>)">Ubah</button></span></td>
								</tr>
							<?php $count++ ?>
						<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	$('#tambahDO').click(function(event) {
		sw1();
	});

	$('#backDo').click(function(event) {
		$('#loading').show();
	    $('#contentPage').addClass('lodtime');
        $('#contentPage').load('<?php echo base_url('Admin/')?>Post',function() {
            $('#loading').hide();
            $('#contentPage').removeClass('lodtime');
        });   
	});

	$(document).ready(function () {
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');
	});


	function sw1() {
	    Swal.fire({
	    	title: 'Tambah Kategori baru',
			html:
			  	'<form method="post" class="form-user">'+
			    '<input id="kat" name="kat" class="swal2-input" placeholder="Nama Kategori">' +
			    '</form>',
			showCancelButton: true,
			confirmButtonText: 'Simpan',
			cancelButtonText: 'Batal',
			cancelButtonColor: 'red',
			showLoaderOnConfirm: true
	    }).then(result => {
	  	if (result.value) {
	  		var data = $('.form-user').serialize();
	  		var kat = $('#kat').val();
	  		// alert(ab + " " + aa);
			$.ajax({
	        	url: '<?php echo base_url('Admin/')?>kategoriTambah',
	            type: 'POST',
	            data: {kat: kat},
	            error: function() {
	           		Swal.fire('Kesalahan !!','Terjadi kesalahan dengan server !!', "error");
	           		console.log(data);
	           	},
	           	success: function(res) {
	                if (res=='1') {
	                	Swal.fire({
		                 	title: 'Sukses',
		                 	text: 'Kategori berhasil disimpan !!',
		                 	type: "success",
		                 	timer: 3000
	                 	});
						$('#loading').show();
					    $('#contentPage').addClass('lodtime');
				        $('#contentPage').load('<?php echo base_url('Admin/')?>kategori',function() {
				            $('#loading').hide();
				            $('#contentPage').removeClass('lodtime');
				        });  
	                }
	                else{
	                	Swal.fire('Kesalahan !!','Terjadi kesalahan dengan server !!', "error");
	                }
	           }
	        });
	  	}
		else{
			Swal.fire('Peringatan !!','Membatalkan membuat kategori!!', "info");
		}
		})
	}


	function openInNewTab(va) {
		var url = "<?php echo base_url('public/kompetisi/tahap/')?>" + va;
	  	var win = window.open(url, '_blank');
	  	win.focus();
	}

	function editPost(id){
		$('#loading').show();
	    $('#contentPage').addClass('lodtime');
        $('#contentPage').load('<?php echo base_url('Admin/editPost/')?>'+ id,function() {
            $('#loading').hide();
            $('#contentPage').removeClass('lodtime');
        });   
		// $('#contentPage').load('<?php echo base_url('Admin/editPost/') ?>'+id);
	}

	function hapusPost(value){
		console.log(value);
		Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Perubahan tidak dapat diundurkan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus!!',
		cancelButtonText: 'Mungkin tidak'
		}).then((result) => {
			if (result.value) {
			    $.ajax({
			    	url: '<?php echo base_url('admin/kategoriHapus') ?>',
			    	type: 'post',
			    	data: {value:value},
			    	success: function(er){
			    		if (er==1) {
							console.log(er);
							Swal.fire(
						      'Terhapus!',
						      'Kategori dengan id #'+ value +' telah di hapus!!.',
						      'success'
						    );
						    $('#loading').show();
	    					$('#contentPage').addClass('lodtime');
        					$('#contentPage').load('<?php echo base_url('Admin/')?>kategori',function() {
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

			    	}
			    });
			}
			else{
			}
		})
	}


</script>