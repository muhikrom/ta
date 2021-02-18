<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/suplier/proses_edit') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_suplier">Nama Suplier</label>
						<input type="hidden" name="kd_suplier" value="<?php echo $isi_form->kd_suplier ?>">
						<input type="text" name="nama_suplier" id="nama_suplier" class="form-control"  value="<?php echo $isi_form->nama_suplier ?>">
					</div>
					<div class="form-group">
						<label for="alamat_suplier">Alamat Suplier</label>
						<input type="text" name="alamat_suplier" id="alamat_suplier" class="form-control" value="<?php echo $isi_form->alamat_suplier?>" >
					</div>
					<div class="form-group">
						<label for="kota_suplier">Kota Suplier</label>
						<input type="text" name="kota_suplier" id="kota_suplier" class="form-control" value="<?php echo  $isi_form->kota_suplier?>" >
					</div>
					<div class="form-group">
						<label for="telepon_suplier">Telepon Suplier</label>
						<input type="number" name="telepon_suplier" id="telepon_suplier" class="form-control" value="<?php echo  $isi_form->telepon_suplier?>" >
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>