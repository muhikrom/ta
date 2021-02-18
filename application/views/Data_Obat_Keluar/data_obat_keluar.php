<div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-body">
                  <a href="<?php echo site_url('backend/data_obat_keluar/add_obat_keluar'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                  <table id="example1" class="table table-bordered">
                  <br><br>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Obat</th>
                      <th>Tanggal Keluar</th>
                      <th>Pasien</th>
                      <th>Jumlah</th>
                      <th>keterangan</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach ($isi_obat_keluar as $isi):
                     ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $isi->nama_obat; ?></td>
                      <td><?php echo $isi->tgl_obat_keluar; ?></td>
                      <td><?php echo $isi->kd_rekam_medik; ?></td>
                      <td><?php echo $isi->jumlah; ?></td>
                      <td><?php echo $isi->keterangan; ?></td>
                      <td>
                        <a href="<?php echo site_url('backend/data_obat_keluar/edit/' .$isi->id); ?>">Edit |</a>
                        <a href="<?php echo site_url('backend/data_obat_keluar/delete/' .$isi->id); ?>">Delete </a>
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