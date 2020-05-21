
<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>Log Panitia | ITFest 4.0 Universitas Sumatera Utara</h5>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="table-responsive-sm">
					<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead class="bg-custom text-white">
						<th>#</th>
                        <th>Poster</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Waktu</th>
                        <th>IP Address</th>
						</thead>
						<tbody>
							<?php $count=0; ?>
							<?php foreach ($logTim as $key => $value): ?>
								<?php $count++; ?>
								<tr>
									<td>
										<?php echo $count ?>
									</td>
									<td>
										<?php echo $value->nama_team ?>
									</td>
									<td><?php echo $value->nama_lomba; ?></td>
									<td>
										<?php echo $value->keterangan ?>
									</td>
									<td>
										<?php echo $value->waktu ?>
									</td>
									<td>
										<?php echo $value->ip_address ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>			
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function () {
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');
	});
</script>