<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php echo validation_errors(); ?>

                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/data_obat_keluar/proses_edit') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_obat">Nama Obat</label>
						<input type="hidden" name="id" value="<?php echo $isi_form->id ?>">
						<select class="form-control" name="nama_obat" id="nama_obat" required>
						<?php foreach ($data_obat as $isi) { ?>
						<option value="<?=$isi->kd_obat?>"><?=$isi->nama_obat;?></option>
						<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="tgl_obat_keluar">Tanggal Keluar</label>
						<input type="date" name="tgl_obat_keluar" id="tgl_obat_keluar" class="form-control" value="<?php echo $isi_form->tgl_obat_keluar ?>">
					</div>
					<div class="form-group">
						<label for="kd_rekam_medik">Pasien</label>
						<input type="number" name="kd_rekam_medik" id="kd_rekam_medik" class="form-control" value="<?php echo $isi_form->kd_rekam_medik ?>">
					</div>
					<div class="form-group">
						<label for="jumlah">Jumlah</label>
						<input type="number" name="jumlah" id="jumlah" class="form-control" value="<?php echo $isi_form->jumlah ?>">
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo $isi_form->keterangan ?>">
					</div>
					<div class="form-group">
						<label for="username">Nama User</label>
						<select class="form-control" name="username" id="username" required>
						<?php foreach ($data_user as $isi) { ?>
						<option value="<?=$isi->id_user?>"><?=$isi->username;?></option>
						<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>