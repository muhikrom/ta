<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                   <a href="<?php echo site_url('backend/data_obat_masuk/add_obat_masuk'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                 <table id="example1" class="table table-bordered">
                  <br><br>
                  <thead>
                   	<tr>
                      <th>No</th>
                      <th>Nama Obat</th>
                      <th>Stok</th>
                      <th>Tanggal Masuk</th>
                      <th>Supplier</th>
                      <th>Keterangan</th>
                      <th>Tanggal Expired</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach ($isi_obat_masuk as $isi):
                     ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $isi->nama_obat; ?></td>
                      <td><?php echo $isi->stok; ?></td>
                      <td><?php echo $isi->tgl_obat_masuk; ?></td>
                      <td><?php echo $isi->nama_suplier; ?></td>
                      <td><?php echo $isi->keterangan; ?></td>
                      <td><?php echo $isi->tgl_expired; ?></td>
                      <td>
                        <a href="<?php echo site_url('backend/data_obat_masuk/edit/' .$isi->id); ?>">Edit |</a>
                        <a href="<?php echo site_url('backend/data_obat_masuk/delete/' .$isi->id); ?>">Delete </a>
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