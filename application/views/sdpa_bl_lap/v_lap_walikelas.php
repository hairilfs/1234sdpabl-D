<h4 class="text-center">LAPORAN DATA WALI KELAS</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Tahun Ajar</th>
      <th>Data Wali Kelas</th>
      <th>Data Kelas</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['Tahun_ajar_wali']; ?></td>
          <td><?= $key_lap['Employee_id']; ?></td>
          <td><?= $key_lap['Kd_kelas']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
