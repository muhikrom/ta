<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                	<?php if (isset($pesan)) echo $pesan; ?>
                  <form action="<?php echo site_url('backend/satuan/proses_add') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="satuan">Satuan</label>
						<input type="text" name="satuan" id="satuan" class="form-control" value="<?php echo set_value('kategori')?>">
						<small style="color: red"><?= form_error('satuan');?></small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>           
              </div>
            </div>
          </div>
        </div>