<div class="x_title">
  <h2>Master Peserta</h2>
  <div class="clearfix"></div>
</div>
<?php echo $this->session->flashdata('pesan'); ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-peserta"><i class="fa fa-plus"></i> Tambah Data</button>
<table id="example" class="table table-striped responsive-utilities jambo_table">
  <thead>
    <tr class="headings">
      <th>No. </th>
      <th>NIS </th>
      <th>Kode Kelas </th>
      <th>Tahun Ajar </th>
      <th class="no-link last" style='text-align:center;'>
        <span class="nobr">Action</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($isi as $key) { ?>

      <tr class="even pointer">
        <td><?= $no++ ?></td>
        <td><?= $key['nis']; ?></td>
        <td><?= $key['kd_kelas']; ?></td>
        <td><?= $key['thn_ajar']; ?></td>
        <td align="center">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detil-peserta<?= $key['nis']; ?>"><i class="fa fa-th-list"></i> Detil</button>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-peserta<?= $key['nis']; ?>"><i class="fa fa-edit"></i> Ubah</button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-peserta<?= $key['nis']; ?>"><i class="fa fa-trash"></i> Hapus</button>
        </td>
      </tr>

      <!-- HAPUS PESERTA -->
      <div class="modal fade" id="delete-peserta<?= $key['nis']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h3 class="modal-title" id="myModalLabel2">Hapus Data Peserta</h3>
            </div>
            <div class="modal-body">
              <p align="center">Apakah anda yakin ingin menghapus data <?= $key['nis']; ?>?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <a href="<?= base_url().'dashboard/do_delete_peserta/'.$key['nis']; ?>" type="button" class="btn btn-danger">Ya, Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <!-- EDIT PESERTA   -->
      <div class="modal fade" id="edit-peserta<?= $key['nis']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h3 class="modal-title" id="myModalLabel2">Ubah Data Peserta</h3>
            </div>
            <form class="form-horizontal form-label-left" action="<?= base_url(); ?>dashboard/do_edit_peserta" method="post" enctype="multipart/form-data">
              <!-- modal body -->
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">NIS</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="nis" type="text" class="form-control" value="<?= $key['nis']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Kode Kelas</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="kd_kelas" type="text" class="form-control" value="<?= $key['kd_kelas']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-3 col-xs-12">Tahun Ajar</label>
                  <div class="col-md-8 col-sm-9 col-xs-12">
                    <input name="thn_ajar" type="text" class="form-control" value="<?= $key['thn_ajar']; ?>" required>
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

      <!-- DETIL PESERTA -->
      <div class="modal fade" id="detil-peserta<?= $key['nis']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h3 class="modal-title" id="myModalLabel2">Detil Data Peserta</h3>
            </div>
            <!-- modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                  <img width="250px" src="<?= base_url();?>assets/images/user.png" class="img-thumbnail" alt="Avatar">
                  <!-- <h3 style="text-align: center;"><?= $key['nis']; ?></h3>
                  <h4><i class="fa fa-key"></i> Emp. ID : <?= $key['nis']; ?></h4>
                  <br>

                  <h4><u>Main Profile</u></h4>
                  <ul class="list-unstyled user_data">
                    <li><i class="fa fa-birthday-cake"></i> </li>
                    <li><i class="fa fa-user"></i> </li>
                    <li><i class="fa fa-star"></i> </li>
                    <li><i class="fa fa-phone"></i> </li>
                    <li><i class="fa fa-envelope"></i> </li>
                    <li><i class="fa fa-briefcase"></i> </li>
                  </ul> -->
                  <!-- end of skills -->
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="dashboard-widget-content">
                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title" style="font-weight: bold;">NIS</h2>
                            <p class="excerpt"><?= $key['nis']; ?></p>
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
                            <h2 class="title" style="font-weight: bold;">Tahun Ajar</h2>
                            <p class="excerpt"><?= $key['thn_ajar']; ?></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
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

<!-- TAMBAH PESERTA -->
<div class="modal fade" id="add-peserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- modal header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title" id="myModalLabel2">Tambah Data Peserta</h3>
      </div>
      <form class="form-horizontal form-label-left" action="<?= base_url(); ?>dashboard/do_insert_peserta" method="post" enctype="multipart/form-data">
        <!-- modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">NIS</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input name="nis" type="text" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Kelas</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input name="kd_kelas" type="text" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Ajar</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input name="thn_ajar" type="text" class="form-control" required>
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
