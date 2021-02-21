
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Pemesanan</h1>
                <?php 
                  if($this->session->flashdata('alert')){
                    echo $this->session->flashdata('alert');
                  }
                ?>
              </div>
              <form action="<?php echo site_url('pemesanan/index/'. $katalog->id_katalog) ?>" method="post" class="form-horizontal">
                <div class="form-group row">
                  <label class="col-sm-4 control-label">Nama Pemesanan</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_customer" class="form-control" placeholder="Nama Lengkap" value="<?php echo $this->session->userdata('c_global')->nama_customer ?>" readonly>
                      <small class="text-danger"><?php echo form_error('nama_customer'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Nama Katalog</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_katalog" class="form-control" value="<?php echo $katalog->nama_katalog ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Harga</label>
                    <div class="col-sm-8">
                      <input type="text" name="harga" class="form-control" value="<?php echo $katalog->harga ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="wilayah" class="col-sm-4 control-label">Tipe Pembayaran</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="wilayah" name="wilayah">
                        <option value="jabodetabek">Jabodetabek</option>
                        <option value="non jabodetabek">Non Jabodetabek</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 control-label">Alamat Event</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat_event" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_pemakaian" class="col-sm-4 control-label">Tanggal pemakaian</label>
                    <div class="col-sm-8">
                      <input type="date" class="input-small form-control" name="tanggal_pemakaian" value="<?php echo date('Y-m-d'); ?>">
                      <small class="text-danger"><?php echo form_error('tanggal_pemakaian'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_selesai" class="col-sm-4 control-label">Tanggal selesai</label>
                    <div class="col-sm-8">
                      <input type="date" class="input-small form-control" name="tanggal_selesai" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Pesan Sekarang</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
