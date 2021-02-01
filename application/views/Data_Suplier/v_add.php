<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/Dashboard/proses_addout') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="kd_suplier">Kode Suplier</label>
						<input type="number" name="kd_suplier" id="kd_suplier" class="form-control" value="<?php echo set_value('Kode suplier')?>" >
						<small style="color: red"><?= form_error('kd_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="nama_suplier">Nama Suplier</label>
						<input type="text" name="nama_suplier" id="nama_suplier" class="form-control" value="<?php echo set_value('nama_suplier')?>" >
						<small style="color: red"><?= form_error('nama_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="kota_suplier">Alamat Suplier</label>
						<input type="text" name="alamat_suplier" id="total" class="form-control" value="<?php echo set_value('alamat_suplier')?>" >
						<small style="color: red"><?= form_error('alamat_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="kota_suplier">Kota Suplier</label>
						<input type="text" name="kota_suplier" id="kota_suplier" class="form-control" value="<?php echo set_value('kota_suplier')?>" >
						<small style="color: red"><?= form_error('kota_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="kota_suplier">Telepon Suplier</label>
						<input type="text" name="kota_suplier" id="kota_suplier" class="form-control" value="<?php echo set_value('kota_suplier')?>" >
						<small style="color: red"><?= form_error('kota_suplier');?></small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>