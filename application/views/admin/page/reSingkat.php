<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h5>Dashboard Admin | ITFest4.0 Universitas Sumatera Utara</h5>
			<hr>
			<h6>Laporan Singkat</h6>
			<hr>
		</div>
	</div>
	<div class="row" style="margin-top: 0px;">
		<?php foreach ($reTahap as $key => $Ddash): ?>
			
			
		<?php endforeach ?>

	<div class="col-12 col-md-4">
		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
		    <div class="card-header text-capitalize text-center">Jumlah Tim</div>
		  	<div class="card-body">
		  		<div>
		    		<h1 class="card-title text-center">
						<?php echo $Ddash->jumlah_tim ?>
		    		</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Jumlah Tahap Seleksi</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php echo $Ddash->jumlah_tahap ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Jumlah Berkas belum di cek</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php echo $Ddash->jumlah_blmver ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Jumlah Tim sudah bayar</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php echo $Ddash->jumlah_bayar  ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Jumlah Tim lulus berkas</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php echo $Ddash->jumlah_suksesSeleksi ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Total Peserta</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php echo $Ddash->total_peserta ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Berkas ditolak</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php echo $Ddash->jumlah_tolak ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	
	<div class="col-12 col-md-4">
		<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Tim belum bayar</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php $nilai1 = $Ddash->jumlah_tim-$Ddash->jumlah_bayar; echo $nilai1;  ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	<div class="col-12 col-md-4">
		<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
	  	<div class="card-header text-capitalize text-center">Total Tim gugur</div>
	  		<div class="card-body">
	  			<div>
	    			<h1 class="card-title text-center">
						<?php $nilai = $Ddash->jumlah_tolak+$nilai1; echo $nilai; ?>
	    			</h1>
	    		</div>
	  		</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-12">
			<div>
				<h6>Jenis Kompetisi</h6>
				<hr>
			</div>
		</div>
		<div class="col-12">
			<div class="table-responsive">
				<table class="table table-active table-hover">
					<thead class="bg-custom text-white">
						<tr>
							<th>#</th><th>Nama Kompetisi</th><th>Jumlah Tim</th>
						</tr>
					</thead>
					<?php $count = 0 ?>
					<?php foreach ($reTahapkompe as $key => $Dtable): ?>
						<?php $count++; ?>
						<tr>
							<td><?php echo $count ?></td>
							<td><?php echo $Dtable->nama_lomba ?></td>
							<td><?php echo $Dtable->jumlah_tim ?></td>
						</tr>			
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
	</div>