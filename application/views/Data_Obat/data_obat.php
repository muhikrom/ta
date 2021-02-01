<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <a href="<?php echo site_url('backend/dashboard/add_obat'); ?>" class="btn btn-success">Tambah</a>
                  <a href="" class="btn btn-success">kategori</a>
                  <table class="table table-bordered">
                  <br><br>
                  <thead>
                    <tr>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Kategori</th>
                      <th>Stok</th>
                      <th>Satuan</th>
                      <th>Tanggal Expired</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;  
                    foreach ($isi_obat as $isi):
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $isi->nama_obat; ?></td>
                      <td><?php echo $isi->kategori; ?></td>
                      <td><?php echo $isi->stok; ?></td>
                      <td><?php echo $isi->satuan; ?></td>
                      <td><?php echo $isi->tgl_expired; ?></td>
                      <td>
                        <a href="<?php echo site_url(); ?>">Edit |</a>
                        <a href="<?php echo site_url(); ?>">Delete </a>
                      </td>
                    </tr>
                    <?php 
                    endforeach; 
                    ?>
                    </tbody>
                </table>               
              </div>
            </div>
          </div>
        </div>