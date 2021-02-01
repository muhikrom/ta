<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              	<div class="card-body">
                  <a href="<?php echo site_url('backend/dashboard/add_suplier'); ?>" class="btn btn-success">Tambah</a>
                 <table class="table table-bordered">
                  <br><br>
                  <thead>
                 	<tr>
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Alamat</th>
                      <th>Kota</th>
                      <th>Telepon</th>
                      <th>#</th>
                    </tr>
                    </thead>
                     <tbody>
                    <?php
                     $no = 1;
                    foreach ($isi_suplier as $isi):
                    ?>
                    <tr>
                      <td><?php echo $isi++?></td>
                      <td><?php echo $isi->nama_suplier; ?></td>
                      <td><?php echo $isi->alamat_suplier; ?></td>
                      <td><?php echo $isi->kota_suplier; ?></td>
                      <td><?php echo $isi->telepon_suplier; ?></td>
                      <td>
                        <a href="<?php echo site_url('administrator/pegawai/edit/' .$isi->id); ?>">Edit |</a>
                        <a href="<?php echo site_url('administrator/pegawai/delete/' .$isi->id); ?>">Delete </a>
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