<div class="container mt-5">
    <div class="card">
      <h5 class="card-header">Data Diri</h5>
      <div class="card-body">
        <div class="row">
        	<div class="col-md-4">
        		<img src="<?php echo base_url().'/uploads/'. $akun->foto_ktp ?>" class="card-img-top">
        	</div>
        	<div class="col-md-8">
        		<table class="table">
        			<tr>
        				<td>Nama</td>
        				<td><strong><?php echo $akun->nama_customer ?></strong></td>
        			</tr>

        			<tr>
        				<td>Username</td>
        				<td><strong><?php echo $akun->username ?></strong></td>
        			</tr>

        			<tr>
        				<td>Telepon</td>
        				<td><strong><?php echo $akun->telepon ?></strong></td>
        			</tr>

        			<tr>
        				<td>Alamat</td>
        				<td><strong><?php echo $akun->alamat ?></strong></td>
        			</tr>

        			<tr>
        				<td>Email</td>
        				<td><strong><?php echo $akun->email ?></strong></td>
        			</tr>

        		</table>

        		<?php echo anchor('beranda','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
        	</div>
        </div>	
      </div>
    </div>
</div>