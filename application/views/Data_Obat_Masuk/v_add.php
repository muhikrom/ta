<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php echo validation_errors(); ?>

                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/data_obat_masuk/proses_addout') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_obat">Nama Obat</label>
						<select class="form-control" name="nama_obat" id="nama_obat" required>
						<?php foreach ($data_obat as $isi) { ?>
						<option value="<?=$isi->kd_obat?>"><?=$isi->nama_obat;?></option>
						<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="stok">Stok</label>
						<input type="number" name="stok" id="stok" class="form-control" value="<?php echo set_value('stok')?>" >
						<small style="color: red"><?= form_error('stok');?></small>
					</div>
					<div class="form-group">
						<label for="tgl_obat_masuk">Tanggal Obat Masuk</label>
						<input type="date" name="tgl_obat_masuk" id="tgl_obat_masuk" class="form-control" value="<?php echo set_value('tgl_obat_masuk')?>" >
						<small style="color: red"><?= form_error('tgl_obat_masuk');?></small>
					</div>
					<div class="form-group">
						<label for="nama_suplier">Suplier</label>
						<select class="form-control" name="nama_suplier" id="nama_suplier" required>
						<?php foreach ($data_suplier as $isi) { ?>
						<option value="<?=$isi->kd_suplier?>"><?=$isi->nama_suplier;?></option>
						<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo set_value('keterangan')?>" >
						<small style="color: red"><?= form_error('keterangan');?></small>
					</div>
					<div class="form-group">
						<label for="tgl_expired">Tanggal expired</label>
						<input type="date" name="tgl_expired" id="tgl_expired" class="form-control" value="<?php echo set_value('tgl_expired')?>" >
						<small style="color: red"><?= form_error('tgl_expired');?></small>
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