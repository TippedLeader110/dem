<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h5>Daftar Panitia | ITFest4.0 Universitas Sumatera Utara</h5>
			<hr>
		</div>
		<div class="container-fluid">
			<button class="btn btn-primary" id="tambahDO">Tambah</button>
		</div>
	</div>
	<div class="row" style="margin-top: 15px;">
		<div class="col-12">
			<div class="form-group">
				<input type="text" class="form-control" name="car" id="cari" placeholder="Cari Panitia" style="max-width: 400px;">
			</div>
		</div>
		<div class="col-12">
			<div id='loadingmessage' style='display:none;margin-top: 50px;'>
		       <center><img src='<?php echo base_url('assets/file/load.gif') ?>'/></center>
			</div>
			<div class="subContent"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".subContent").load('<?php echo base_url('admin/dataPanitia') ?>');

	var timer = null;
	var encoded = null;
	var send = null;
	$('#cari').keyup(function(event) {
		clearTimeout(timer); 
       	timer = setTimeout(getData, 500)
		send = $(this).val();
		encoded = encodeURIComponent(send);
		console.log(encoded);
	});

	function getData(){
		$('#loadingmessage').show();
		$('.subContent').load('<?php echo base_url('admin/dataPanitia?cari=') ?>' + encoded ,function() {
			$('#loadingmessage').hide();
		});
	}

	$('#tambahDO').click(function(event) {
		$('#contentPage').load('<?php echo base_url("admin/tambahPanitia"); ?>');
	});
	
</script>