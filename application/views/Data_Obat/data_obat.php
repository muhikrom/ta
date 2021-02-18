<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                  <div class="card-body">
                    <a href="<?php echo site_url('backend/dashboard/add_obat'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo site_url('backend/kategori/add_kategori'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Kategori</a>
                    <a href="<?php echo site_url('backend/satuan/add_satuan'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Satuan</a>
                  <table id="example1" class="table table-bordered">
                  <br><br>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Obat</th>
                      <th>Kategori</th>
                      <th>Satuan</th>
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
                      <td><?php echo $isi->satuan; ?></td>
                      <td>
                        <a href="<?php echo site_url('backend/dashboard/edit/' .$isi->kd_obat); ?>">Edit |</a>
                        <a href="<?php echo site_url('backend/dashboard/delete/' .$isi->kd_obat); ?>">Delete </a>
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