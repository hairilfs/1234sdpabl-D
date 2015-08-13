<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-sis"><i class="fa fa-plus"></i> Tambah Data</button> 

<table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" class="tableflat">
            </th>

            <th>No. </th>
            <th>NIM </th>
            <th>Nama </th>
            <th>Alamat </th>

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
            <td class="a-center ">
                <input type="checkbox" class="tableflat">
            </td>

            <td><?= $no++ ?></td>
            <td><?= $key['nim']; ?></td>
            <td><?= $key['nama']; ?></td>
            <td><?= $key['alamat']; ?></td>

            <td align="center">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-sis<?= $key['nim']; ?>"><i class="fa fa-edit"></i> Edit</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".delete-sis<?= $key['nim']; ?>"><i class="fa fa-trash"></i> Delete</a>
            </td>
        </tr>

        <div class="modal fade delete-sis<?= $key['nim']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        <h4 class="modal-title" id="myModalLabel2">Ubah data siswa</h4>
                    </div>

                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" action="<?= base_url()."dashboard/doDelete/".$key['nim']; ?>" method="post">
                            <label>Are You Serious Will Delete This Data ?</LABEL>
                            <div class="modal-footer "></div>

                            <div class="pull-right">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Small modal -->
        <div class="modal fade bs-example-modal-sm" id="edit-sis<?= $key['nim']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        <h4 class="modal-title" id="myModalLabel2">Ubah data siswa</h4>
                    </div>

                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" action="<?= base_url(); ?>dashboard/doUpdate" method="post">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">NIM</label>
                                
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="nim" type="text" class="form-control" value="<?= $key['nim']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                                
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="nama" type="text" class="form-control" value="<?= $key['nama']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                                
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="alamat" class="form-control" rows="3"><?= $key['alamat']; ?></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /modals -->

        <?php   

            } 

        ?>
    </tbody>
</table>

<div class="modal fade bs-example-modal-sm" id="add-sis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel2">Tambah data siswa</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal form-label-left" action="<?= base_url(); ?>dashboard/do_insert_siswa" method="post">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIM</label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input name="nim" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input name="nama" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer "></div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>  