<div class="x_title">
  <h2>Master Jadwal</h2>
  <div class="clearfix"></div>
</div>
<?php echo $this->session->flashdata('pesan'); ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-jadwal"><i class="fa fa-plus"></i> Tambah Data</button>
<table id="example" class="table table-striped responsive-utilities jambo_table">
  <thead>
    <tr class="headings">
      <th>No.</th>
      <th>Kode Jadwal</th>
      <th>Tahun Ajar</th>
      <th>Semester</th>
      <th>Kode Mapel</th>
      <th>Emp. ID</th>
      <th>Kode Kelas</th>
      <th>Hari</th>
      <th>Ruang</th>
      <th class="no-link last" style='text-align:center;'>
        <span class="nobr">Action</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($isi as $key) {
      ?>
      <tr class="even pointer">
        <td><?= $no++ ?></td>
        <td><?= $key['kd_jadwal']; ?></td>
        <td><?= $key['thn_ajar']; ?></td>
        <td><?= $key['semester']; ?></td  >
        <td><?= $key['kd_mapel']; ?></td>
        <td><?= $key['employee_id']; ?></td>
        <td><?= $key['kd_kelas']; ?></td>
        <td><?= $key['hari']; ?></td>
        <td><?= $key['ruang']; ?></td>

        <td align="center">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detil-jadwal<?= $key['kd_jadwal']; ?>"><i class="fa fa-th-list"></i> Detil</button>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-jadwal<?= $key['kd_jadwal']; ?>"><i class="fa fa-edit"></i> Ubah</button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-jadwal<?= $key['kd_jadwal']; ?>"><i class="fa fa-trash"></i> Hapus</button>
        </td>
      </tr>

      <!-- HAPUS JADWAL -->
      <div class="modal fade bs-example-modal" id="delete-jadwal<?= $key['kd_jadwal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel2">Hapus Data Jadwal</h4>
            </div>
            <div class="modal-body">
              <p align="center">Apakah anda yakin ingin menghapus data <?= $key['kd_jadwal']; ?>?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <a href="<?= base_url().'dashboard/do_delete_jadwal/'.$key['kd_jadwal']; ?>" type="button" class="btn btn-danger">Ya, Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <!-- EDIT JADWAL -->
      <div class="modal fade" id="edit-jadwal<?= $key['kd_jadwal']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title" id="myModalLabel">Ubah Data Jadwal</h3>
            </div>
            <form class="form-horizontal form-label-left" action="<?= base_url(); ?>dashboard/do_edit_jadwal" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Jadwal</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="kd_jadwal" type="text" class="form-control" value="<?= $key['kd_jadwal']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Tahun Ajar</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="thn_ajar" type="text" class="form-control" value="<?= $key['thn_ajar']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Hari</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <select name="semester" class="form-control" >
                      <option value="Gasal"<?php if ($key['hari']=="Gasal")  echo " selected";?>>Gasal</option>
                      <option value="Genap"<?php if ($key['hari']=="Genap")  echo " selected";?>>Genap</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Mapel</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="kd_mapel" type="text" class="form-control" value="<?= $key['kd_mapel']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Emp. ID</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="employee_id" type="text" class="form-control" value="<?= $key['employee_id']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Kelas</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="kd_kelas" type="text" class="form-control" value="<?= $key['kd_kelas']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Hari</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <select name="hari" class="form-control" >
                      <option value="Senin"<?php if ($key['hari']=="Senin")  echo " selected";?>>Senin</option>
                      <option value="Selasa"<?php if ($key['hari']=="Selasa")  echo " selected";?>>Selasa</option>
                      <option value="Rabu"<?php if ($key['hari']=="Rabu")  echo " selected";?>>Rabu</option>
                      <option value="Kamis"<?php if ($key['hari']=="Kamis")  echo " selected";?>>Kamis</option>
                      <option value="Jum'at"<?php if ($key['hari']=="Jum'at")  echo " selected";?>>Jum'at</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Ruang</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="ruang" type="text" class="form-control" value="<?= $key['ruang']; ?>"required>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- DETIL JADWAL -->
      <div class="modal fade" id="detil-jadwal<?= $key['kd_jadwal']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h3 class="modal-title" id="myModalLabel2">Detil Data Jadwal</h3>
            </div>
            <!-- modal body -->
            <div class="modal-body">
              <div class="dashboard-widget-content">
                <ul class="list-unstyled timeline widget">
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Kode Jadwal</h2>
                        <p class="excerpt"><?= $key['kd_jadwal']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Tahun Ajar</h2>
                        <p class="excerpt"><?= $key['thn_ajar']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Semester</h2>
                        <p class="excerpt"><?= $key['semester']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Kode Mapel</h2>
                        <p class="excerpt"><?= $key['kd_mapel']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Emp. ID</h2>
                        <p class="excerpt"><?= $key['employee_id']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Kode Kelas</h2>
                        <p class="excerpt"><?= $key['kd_kelas']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Hari</h2>
                        <p class="excerpt"><?= $key['hari']; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block">
                      <div class="block_content">
                        <h2 class="title" style="font-weight: bold;">Ruang</h2>
                        <p class="excerpt"><?= $key['ruang']; ?></p>
                      </div>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
    }
    ?>

  </tbody>
</table>

<!-- TAMBAH JADWAL -->
<div class="modal fade" id="add-jadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- modal header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title" id="myModalLabel2">Tambah Data Jadwal</h3>
      </div>
      <form class="form-horizontal form-label-left" action="<?= base_url(); ?>dashboard/do_insert_jadwal" method="post" enctype="multipart/form-data">
        <!-- modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Jadwal</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <input name="kd_jadwal" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Tahun Ajar</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <input name="thn_ajar" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Semester</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <select name="semester" class="form-control" >
                <option value="Gasal">Gasal</option>
                <option value="Genap">Genap</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Mapel</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <select name="kd_mapel"  class="select2_single form-control" >
              <?php foreach ($isi2 as $key2): ?>
                <option value="<?= $key2['kd_mapel'];?>"><?= $key2['nm_mapel'].' - '.$key2['kd_mapel'];?></option>
              <?php endforeach; ?>
              </select>
              <!-- <input name="kd_mapel" type="text" class="form-control"> -->
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Emp. ID</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <input name="employee_id" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Kelas</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <input name="kd_kelas" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Hari</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <select name="hari" class="form-control" >
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jum'at">Jum'at</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12">Ruang</label>
            <div class="col-md-8 col-sm-9 col-xs-12">
              <input name="ruang" type="text" class="form-control">
            </div>
          </div>
        </div>
        <!-- modal footer -->
        <div class="modal-footer ">
          <div class="pull-right">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
