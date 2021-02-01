<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <form action="<?php echo site_url('backend/Dashboard/proses_editout') ?>" method="post">
					<div class="form-group">
						<label for="id_stok_obat_apotik">Kode Obat</label>
						<input type="hidden" name="id_pengeluaran" value="<?php echo $isi_form->id_pengeluaran ?>">
						<input type="number" name="id_stok_obat_apotik" id="id_stok_obat_apotik" class="form-control" value="<?php echo $isi_form->id_stok_obat_apotik ?>">
					</div>
					<div class="form-group">
						<label for="jumlah">Jumlah</label>
						<input type="number" name="jumlah" id="jumlah" class="form-control" value="<?php echo $isi_form->jumlah ?>">
					</div>
					<div class="form-group">
						<label for="total">Total</label>
						<input type="number" name="total" id="total" class="form-control" value="<?php echo $isi_form->total ?>">
					</div>
					<div class="form-group">
						<label for="tanggal_pengeluaran">Tanggal Pengeluaran</label>
						<input type="date" name="tanggal_pengeluaran" id="tanggal_pengeluaran" class="form-control" value="<?php echo $isi_form->tanggal_pengeluaran ?>">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>