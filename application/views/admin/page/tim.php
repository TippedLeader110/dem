
<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>Dafftar Tim | ITFest 4.0 Universitas Sumatera Utara</h5>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="table-responsive-sm">
					<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead class="bg-custom text-white">
						<th>#</th>
                        <th>Nama Tim</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Nama Ketua</th>
                        <th>Bukti Pembayaran</th>
                        <th></th>
						</thead>
						<tbody>
							<?php $count=0; ?>
							<?php foreach ($dataTim as $key => $value): ?>
								<?php $count++; ?>
								<tr>
									<td><?php echo $count ?></td>
									<td>
										<?php echo $value->nama_team ?>
									</td>
									<td><?php echo $value->email; ?></td>
									<?php if ($value->status_tim==1): ?>
										<td>Sudah Terverifikasi</td>
									<?php endif ?>
									<?php if ($value->status_tim==NULL): ?>
										<td>Belum Terverifikasi</td>
									<?php endif ?>
									<?php if ($value->status_tim=='0'): ?>
										<td>Ditolak</td>
									<?php endif ?>
									<td>
										<?php echo $value->nama_peserta ?>
									</td>
										<?php if ($value->status_pembayaran=='Active'): ?>
											<td>Sudah Terverifikasi</td>
										<?php endif ?>
										<?php if ($value->status_pembayaran=='Non-Active'): ?>
											<td>Belum Melakukan pembayaran</td>
										<?php endif ?>
									<td><a href="#" onclick="timInfo(<?php echo $value->id_tim ?>)"><i class="fas fa-search"></i>Info</a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>			
		</div>
	</div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="modalTim">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h4 class="modal-title">Informasi Detail Tim</h4>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
        		
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      		</div>
    	</div>
  	</div>
</div>


<script type="text/javascript">
	$(document).ready(function () {
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');
	});
	function timInfo(id)
	{
		console.log(id);
		$('.modal-body').load('<?php echo base_url('admin/modalTim?tim=') ?>' + id);
		$('#modalTim').modal('toggle');
	}
</script>