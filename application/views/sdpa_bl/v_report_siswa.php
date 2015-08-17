<div class="x_title">
  <h2>Laporan Nilai Siswa - <?php echo $cekw ?></h2>
  <div class="clearfix"></div>
</div>
<div class="dashboard-widget-content">
  <ul class="list-unstyled timeline widget">
    <?php
    foreach ($data_jadwal as $key_jadwal) {
      foreach ($data_mapel as $key_mapel) {
        if ($key_jadwal['kd_mapel']==$key_mapel['kd_mapel']) { ?>

          <li>
            <div class="block">
              <div class="block_content">
                <h2 class="title" style="font-weight: bold;">
                  <a href="#" data-toggle="modal" data-target="#see-<?= $key_mapel['kd_mapel']; ?>"><?= $key_mapel['nm_mapel']; ?></a>
                </h2>
              </div>
            </div>
          </li>

          <!-- MODAL LIHAT DETAIL -->
          <div class="modal fade bs-example-modal-lg" id="see-<?= $key_mapel['kd_mapel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <?php
                  foreach ($data_guru2 as $key_guru2) {
                    if ($key_guru2['employee_id']==$key_jadwal['employee_id']) {
                      $nmguru = $key_guru2['nama_guru'];
                    }
                  }
                  ?>
                  <h4 class="modal-title" id="myModalLabel2">Nilai <?= $key_mapel['nm_mapel']; ?> || Guru : <?php echo $nmguru; ?></h4>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">

                    <table class="table table-bordered table-hover table-compact">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>NIS</th>
                          <th>Nama Siswa</th>
                          <?php
                          $urut = 1;
                          foreach ($data_latihan as $key_data_latihan) {
                            $cek_isi_lat = isset($key_data_latihan['kd_lat']) ? $key_data_latihan['kd_lat'] : '';
                            $kode = "LT000";
                            $kodeurut = $kode.$urut;
                            if($key_data_latihan['kd_lat']==$kodeurut && $key_data_latihan['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                              echo "<th>Latihan ".$urut++."</th>";
                            }
                          }

                          $urut2 = 1;
                          foreach ($data_kuis as $key_data_kuis) {
                            $cek_isi_kuis = isset($key_data_kuis['kd_kuis']) ? $key_data_kuis['kd_kuis'] : '';
                            $kode2 = "QZ000";
                            $kodeurut2 = $kode2.$urut2;
                            if($key_data_kuis['kd_kuis']==$kodeurut2 && $key_data_kuis['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                              echo "<th>Kuis ".$urut2++."</th>";
                            }
                          }

                          $urut4 = 1;
                          foreach ($data_uts as $key_data_uts) {
                            $cek_isi_uts = isset($key_data_uts['kd_uts']) ? $key_data_uts['kd_uts'] : '';
                            $kode4 = "UT000";
                            $kodeurut4 = $kode4.$urut4;
                            if($key_data_uts['kd_uts']==$kodeurut4 && $key_data_uts['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                              echo "<th>UTS ".$urut4++."</th>";
                            }
                          }

                          $urut3 = 1;
                          foreach ($data_uas as $key_data_uas) {
                            $cek_isi_uas = isset($key_data_uas['kd_uas']) ? $key_data_uas['kd_uas'] : '';
                            $kode3 = "UA000";
                            $kodeurut3 = $kode3.$urut3;
                            if($key_data_uas['kd_uas']==$kodeurut3 && $key_data_uas['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                              echo "<th>UAS ".$urut3++."</th>";
                            }
                          }

                          ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($isi_peserta as $key_peserta) { ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $key_peserta['nis'] ?></td>
                            <?php
                            foreach ($isi_siswa as $key_siswa) {
                              if ($key_peserta['nis']==$key_siswa['NIS']) {
                                echo "<td>".$key_siswa['Nama']."</td>";
                              }
                            }

                            $urut = 1;
                            foreach ($data_latihan as $key_data_latihan) {
                              $kode = "LT000";
                              $kodeurut = $kode.$urut;
                              if($key_data_latihan['kd_lat']==$kodeurut AND $key_peserta['nis']==$key_data_latihan['nis'] && $key_data_latihan['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                                $rol = isset($key_data_latihan['nilai']) ? $key_data_latihan['nilai'] : '0';
                                echo "<td>".$rol."</td>";
                                $urut++;
                              }
                            }

                            $urut2 = 1;
                            foreach ($data_kuis as $key_data_kuis) {
                              $kode2 = "QZ000";
                              $kodeurut2 = $kode2.$urut2;
                              if($key_data_kuis['kd_kuis']==$kodeurut2 AND $key_peserta['nis']==$key_data_kuis['nis'] && $key_data_kuis['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                                $rol2 = isset($key_data_kuis['nilai']) ? $key_data_kuis['nilai'] : '0';
                                echo "<td>".$rol2."</td>";
                                $urut2++;
                              }
                            }

                            $urut4 = 1;
                            foreach ($data_uts as $key_data_uts) {
                              $kode4 = "UT000";
                              $kodeurut4 = $kode4.$urut4;
                              if($key_data_uts['kd_uts']==$kodeurut4 AND $key_peserta['nis']==$key_data_uts['nis'] && $key_data_uts['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                                $rol4 = isset($key_data_uts['nilai']) ? $key_data_uts['nilai'] : '0';
                                echo "<td>".$rol4."</td>";
                                $urut4++;
                              }
                            }

                            $urut3 = 1;
                            foreach ($data_uas as $key_data_uas) {
                              $kode3 = "UA000";
                              $kodeurut3 = $kode3.$urut3;
                              if($key_data_uas['kd_uas']==$kodeurut3 AND $key_peserta['nis']==$key_data_uas['nis'] && $key_data_uas['kd_jadwal']==$key_jadwal['kd_jadwal']) {
                                $rol3 = isset($key_data_uas['nilai']) ? $key_data_uas['nilai'] : '0';
                                echo "<td>".$rol3."</td>";
                                $urut3++;
                              }
                            }
                            ?>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success" data-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
          </div>

          <?php  }
        }
      }
      ?>
    </ul>
  </div>
