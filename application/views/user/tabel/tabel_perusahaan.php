<br><br><br>
    <div class="container text-center" style="margin: 2em auto;">
    <h2 class="tex-center">Tabel Perusahaan</h2>
    <a href="<?=base_url('report/barangKeluarManual')?>" style="margin-bottom:10px;float:left;" type="button" class="btn btn-danger" name="laporan_data"><i class="fa fa-file-text" aria-hidden="true"></i> Invoice Manual</a>
    <div class="tabel" style="margin-top:80px">
    <table class="table table-bordered table-striped" style="margin: 2em auto;" id="tabel_barangkeluar">
    <thead>
      <tr>
        <th>id</th>
        <th>nama_perusahaan</th>
        <th>alamat</th>
        <th>kota</th>
        <th>provinsi</th>
        <th>kode_pos</th>
        <th>telepon</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(is_array($list_data)){ ?>
        <?php $no = 1;?>
        <?php foreach($list_data as $dd): ?>
          <td><?=$no?></td>
          <td><?=$dd->id?></td>
          <td><?=$dd->nama_perusahaan?></td>
          <td><?=$dd->alamat?></td>
          <td><?=$dd->kota?></td>
          <td><?=$dd->provinsi?></td>
          <td><?=$dd->kode_pos?></td>
          <td><?=$dd->telepon?></td>
          <td><?=$dd->email?></td>
          <td><a type="button" class="btn btn-danger btn-report"  href="<?=base_url('report/perusahaan/'.$dd->id.'/'.$dd->nama_perusahaan)?>" name="btn_report" style="margin:auto;"><i class="fa fa-file-text" aria-hidden="true"></i></a></td>
      </tr>
    <?php $no++; ?>
    <?php endforeach;?>
    <?php }else { ?>
          <td colspan="7" align="center"><strong>Data Kosong</strong></td>
    <?php } ?>
    </tbody>
  </table>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabel_barangkeluar').DataTable();
  });
</script>
