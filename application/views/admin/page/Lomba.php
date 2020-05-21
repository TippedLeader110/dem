<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12">
			<h5>kelolah kompetisi | ITFest4.0 Universitas Sumatera Utara</h5>
			<hr>
			
		</div>
		<div class="container-fluid">
			<button class="btn btn-primary" id="tambahDO">Tambah Lomba</button>
		</div>
	</div>
	<div class="row" style="margin-top: 0px;">
		<?php if (isset($dataLomba)): ?>
			<?php $cout = 1 ?>
			<?php foreach ($dataLomba as $key => $dLomba): ?>
				<div class="col-12 col-md-6" style="margin-top: 20px;">
					<div class="card">
					    <div class="card-header bg-custom text-white" id="headingThree">
						   	<div class="text-title">
						   		<h5 class="mb-0">
						   		#<?php echo $cout ?>
						   		<?php $cout++; ?>. <?php echo $dLomba->nama_lomba ?>
						   		</h5>
						   	</div>
						</div>
					  	<img src="<?php echo base_url('public/kompetisi/logo/'); echo $dLomba->url_logo ?>" class="card-img" alt="..." style="opacity: 0.2;height: 400px;background-size: cover;background-repeat: no-repeat;background-position: 50% 50%;">
						<div class="card-img-overlay overflow-auto" style="margin-bottom: 50px;margin-top: 60px;" id="marg">
					    	<div>
					    		<?php echo $dLomba->deskripsi ?>
					    	</div>
							<!-- <script>
								var a = $('#headingThree').height();
								$('#marg').css('margin-top',a);
								
							</script> -->
						</div>
						<ul class="list-group list-group-flush">
					    	<li class="list-group-item">
					    		<center><button class="btn btn-outline-success" onclick="openInNewTab('<?php echo $dLomba->rule ?>');">Rule Book</button>&nbsp;<button onclick="editLomba(<?php echo $dLomba->id_lomba ?>);" class="btn btn-outline-primary">Edit</button>&nbsp;<button onclick="hapusLomba(<?php echo $dLomba->id_lomba ?>)" class="btn btn-outline-danger">Hapus</button></center>	
					    	</li>
					    </ul>
					</div>
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>
</div>

<script type="text/javascript">
	$('#tambahDO').click(function(event) {
		event.preventDefault();
		$('#loading').show();
		$('#contentPage').addClass('lodtime');
		$('#contentPage').load('<?php echo base_url("admin/tambahLomba"); ?>', function(){
			$('#loading').hide();
			$('#contentPage').removeClass('lodtime');
		});
	});

	function openInNewTab(va) {
		var url = "<?php echo base_url('public/kompetisi/rule/')?>" + va;
	  	var win = window.open(url, '_blank');
	  	win.focus();
	}

	function editLomba(id){
		$('#loading').show();
		$('#contentPage').addClass('lodtime');
		$('#contentPage').load('<?php echo base_url('admin/editLomba/') ?>'+id, function(){
			$('#loading').hide();
			$('#contentPage').removeClass('lodtime');
		});
	}

	function reload(){
		
	}

	function hapusLomba(value){
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
			    	url: '<?php echo base_url('admin/dohapusLomba') ?>',
			    	type: 'post',
			    	data: {value:value},
			    	success: function(er){
							console.log(er);
							Swal.fire(
						      'Terhapus!',
						      'Lomba/Kompetisi dengan id #'+ value +' telah di hapus!!.',
						      'success'
						    );
						    $('#loading').show();
							$('#contentPage').addClass('lodtime');
						    $('#contentPage').load('<?php echo base_url('admin/lomba') ?>', function(){
						    	$('#loading').hide();
								$('#contentPage').removeClass('lodtime');
						    });
			    	},
			    	error: function(er){
						console.log(er);
						Swal.fire('Gagal','Terjadi kesalahan', 'error');

			    	}
			    });
			}
			else{
			}
		})
	}


</script>