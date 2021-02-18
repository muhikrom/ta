<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php echo validation_errors(); ?>

                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/Dashboard/proses_edit') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_obat">Nama Obat</label>
						<input type="hidden" name="kd_obat" value="<?php echo $isi_form->kd_obat ?>">
						<input type="text" name="nama_obat" id="satuan" class="form-control"  value="<?php echo $isi_form->nama_obat ?>">
					</div>
					<div class="form-group">
						<label for="kategori">Kategori</label>
						<select class="form-control" name="kategori" id="kategori" required>
							<?php foreach ($data_kategori as $isi) { ?>
						<option value="<?=$isi->id_kategori;?>"><?=$isi->kategori;?></option>
					<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="kategori">Satuan</label>
						<select class="form-control" name="satuan" id="Satuan" required>
						<?php foreach ($data_satuan as $isi) { ?>
						<option value="<?=$isi->id_satuan;?>"><?=$isi->satuan;?></option>
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