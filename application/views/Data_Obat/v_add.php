<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php echo validation_errors(); ?>

                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/Dashboard/proses_add') ?>" method="post" enctype="multipart/form-data">
                  	<div class="form-group">
						<label for="nama_obat">Kode Obat</label>
						<input type="text" name="kode_obat" id="kode_obat" class="form-control" value="<?php echo set_value('kode_obat')?>" >
						<small style="color: red"><?= form_error('kode_obat');?></small>
					</div>
					<div class="form-group">
						<label for="nama_obat">Nama Obat</label>
						<input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?php echo set_value('nama_obat')?>" >
						<small style="color: red"><?= form_error('nama_obat');?></small>
					</div>
					<div class="form-group">
						<label for="keterangan">Kategori</label>
						<select class="form-control" name="kategori" id="kategori" required>
							<?php foreach ($data_kategori as $isi) { ?>
						<option value="<?=$isi->id_kategori;?>"><?=$isi->kategori;?></option>
					<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="satuan">Stok</label>
						<input type="text" name="stok" id="stok" class="form-control" value="<?php echo set_value('stok')?>">
						<small style="color: red"><?= form_error('stok');?></small>
					</div>
					<div class="form-group">
						<label for="keterangan">Satuan</label>
						<select class="form-control" name="satuan" id="Satuan" required>
						<?php foreach ($data_satuan as $isi) { ?>
						<option value="<?=$isi->id_satuan;?>"><?=$isi->satuan;?></option>
					<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="harga">Tanggal Expired</label>
						<input type="date" name="tgl_expired" id="tgl_expired" class="form-control" value="<?php echo set_value('tgl_expired')?>">
						<small style="color: red"><?= form_error('tgl_expired');?></small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>