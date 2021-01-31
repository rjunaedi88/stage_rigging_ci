<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Laporan Pemesanan</h2>
				</div>
				<div class="panel-body">
					<?php
						if($this->session->flashdata('alert')){
							echo $this->session->flashdata('alert');
						}
					?>
					<form action="<?php echo site_url('admin/laporan_pesanan/cetak_laporan_pesanan') ?>" target="_blank">
						<div class="row">	
							<div class="col-md-6">
								<div class="form-group">
			                        <label>Mulai Tanggal</label>
			                        <div class='input-group date datepicker'>
							            <input type='date' name="tgl1" class="form-control" placeholder="Mulai Tanggal..." autocomplete="off" required/>
							        </div>
			                    </div>
			                    <div class="form-group">
			                        <label>Sampai Tanggal</label>
			                        <div class='input-group date datepicker'>
							            <input type='date' name="tgl2" class="form-control" placeholder="Sampai Tanggal..." autocomplete="off" required/>
							        </div>
			                    </div>
			                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Cetak Laporan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</div>
