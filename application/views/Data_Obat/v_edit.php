<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <form action="<?php echo site_url('backend/Dashboard/proses_edit') ?>" method="post">
					<div class="form-group">
						<label for="nama_obat">Nama Obat</label>
						<input type="hidden" name="id_obat" value="<?php echo $isi_form->id_obat ?>">
						<input type="text" name="nama_obat" id="nama_obat" class="form-control"  value="<?php echo $isi_form->nama_obat ?>">
					</div>
					<div class="form-group">
						<label for="satuan">Satuan</label>
						<input type="text" name="satuan" id="satuan" class="form-control"  value="<?php echo $isi_form->satuan ?>">
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="number" name="harga" id="harga" class="form-control"  value="<?php echo $isi_form->harga ?>">
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control"  value="<?php echo $isi_form->keterangan ?>">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>