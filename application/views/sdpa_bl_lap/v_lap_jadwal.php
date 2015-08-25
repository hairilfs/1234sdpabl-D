<h4 class="text-center">LAPORAN DATA JADWAL</h4>
<table class="table table-bordered table-condensed">
  <thead>
    <tr class="info">
      <th>No.</th>
      <th>Kode Jadwal</th>
      <th>Tahun Ajar</th>
      <th>Semester</th>
      <th>Kd. Mapel</th>
      <th>Emp. ID</th>
      <th>Kd. Kelas</th>
      <th>Hari</th>
      <th>Ruang</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_lap as $key_lap) { ?>
        <tr>
          <td><?= $no++;?></td>
          <td><?= $key_lap['kd_jadwal']; ?></td>
          <td><?= $key_lap['thn_ajar']; ?></td>
          <td><?= $key_lap['semester']; ?></td>
          <td><?= $key_lap['kd_mapel']; ?></td>
          <td><?= $key_lap['employee_id']; ?></td>
          <td><?= $key_lap['kd_kelas']; ?></td>
          <td><?= $key_lap['hari']; ?></td>
          <td><?= $key_lap['ruang']; ?></td>
        </tr>
    <?php }
     ?>
  </tbody>
</table>
