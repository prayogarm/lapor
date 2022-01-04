<section class="content-header">
  <h1>
    Beranda
    <small>Aduan Jaringan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">History</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="box box-success" id="box-laporan">
    <div class="box-header with-border">
      <h3 class="box-title">History Aduan Jaringan</h3>
    </div>
    <div class="box-body" style="font-size: 1.0em">
      <table id="example1" class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Ticket</th>
            <th>Waktu Laporan</th>
            <th>Jenis Laporan</th>
            <th>Action</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($history as $data) {
              $status = 'Belum Di Verifikasi';
              $btn = 'btn-warning';
              if ($data->status_verif == 1) {
                $status = 'Terverifikasi';
                $btn = 'btn-success';
              } 
              echo '
              <tr>
                <td>'.$data->ticket.'</td>
                <td>'.$data->waktu_laporan.'</td>
                <td>'.$data->jenis_klasifikasi.'</td>
                <td>'; 
                if ($data->status_verif == 1) {
                  echo '<a href="'.base_url('index.php/beranda/detail/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary">Diskusi</a>';
                }
                echo '</td>
                <td>
                <a href="#" style="cursor: default" class="btn '.$btn.' btn-flat btn-md">'.$status.'</a>
                </td>
              </tr>
              ';
            }
          ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
      <!-- /.content -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
