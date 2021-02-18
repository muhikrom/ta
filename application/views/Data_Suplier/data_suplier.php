<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              	<div class="card-body">
                  <a href="<?php echo site_url('backend/suplier/add_suplier'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                 <table id="example1" class="table table-bordered">
                  <br><br>
                  <thead>
                 	<tr>
                      <th>No</th>
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
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $isi->nama_suplier; ?></td>
                      <td><?php echo $isi->alamat_suplier; ?></td>
                      <td><?php echo $isi->kota_suplier; ?></td>
                      <td><?php echo $isi->telepon_suplier; ?></td>
                      <td>
                        <a href="<?php echo site_url('backend/suplier/edit/' .$isi->kd_suplier); ?>">Edit |</a>
                        <a href="<?php echo site_url('backend/suplier/delete/' .$isi->kd_suplier); ?>">Delete </a>
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