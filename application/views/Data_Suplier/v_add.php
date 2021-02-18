<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/suplier/proses_addout') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_suplier">Nama Suplier</label>
						<input type="text" name="nama_suplier" id="nama_suplier" class="form-control" value="<?php echo set_value('nama_suplier')?>" >
						<small style="color: red"><?= form_error('nama_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="alamat_suplier">Alamat Suplier</label>
						<input type="text" name="alamat_suplier" id="alamat_suplier" class="form-control" value="<?php echo set_value('alamat_suplier')?>" >
						<small style="color: red"><?= form_error('alamat_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="kota_suplier">Kota Suplier</label>
						<input type="text" name="kota_suplier" id="kota_suplier" class="form-control" value="<?php echo set_value('kota_suplier')?>" >
						<small style="color: red"><?= form_error('kota_suplier');?></small>
					</div>
					<div class="form-group">
						<label for="telepon_suplier">Telepon Suplier</label>
						<input type="number" name="telepon_suplier" id="telepon_suplier" class="form-control" value="<?php echo set_value('telepon_suplier')?>" >
						<small style="color: red"><?= form_error('telepon_suplier');?></small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>