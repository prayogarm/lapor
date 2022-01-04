    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box box-solid">
          <div class="box-body">

            <ul class="nav nav-pills nav-justified" style="margin-bottom: 10px">
              <li><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="<?php echo base_url(); ?>admin/laporan">Laporan</a></li>
              <?php endif ?>
              <li class="active"><a href="<?php echo base_url(); ?>admin/progress">Sedang Ditangani</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="<?php echo base_url(); ?>admin/user">Manajemen User</a></li>
              <?php endif ?>
            </ul>

            <table id="user" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Ticket</th>
                  <th>Waktu Laporan</th>
                  <th>Jenis Laporan</th>
                  <th>Action</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i=1;
                foreach ($laporan as $data) {

                  if ($this->session->userdata('tipe') == 'Direktorat Identifikasi Kerentanan dan Penilaian Risiko Pemerintah, Deputi I
') {
                    if ($data->d11 == 1) {
                      echo '
                      <tr>
                      <td>'.$i++.'</td>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      if ($data->status == 1) {
                        echo '<h4>Open</h4>';
                      } elseif ($data->status == 2) {
                        echo '<h4>Close Successful</h4>';
                      }elseif ($data->status == 3) {
                        echo '<h4>Close Unsuccessful</h4>';
                      }elseif ($data->status == 4) {
                        echo '<h4>Pending</h4>';
                      }
                      echo '</td>
                        </tr>
                        ';
                    } 
                  } 

                  if ($this->session->userdata('tipe') == 'Direktorat Identifikasi Kerentanan dan Penilaian Risiko Infrastruktur Informasi Kritikal Nasional, Deputi I
') {
                    if ($data->d12 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'Direktorat Identifikasi Kerentanan dan Penilaian Risiko Ekonomi Digital, Deputi I
') {
                    if ($data->d13 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'Direktorat Deteksi Ancaman, Deputi I') {
                    if ($data->d14 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'Direktorat Proteksi Pemerintah, Deputi II') {
                    if ($data->d21 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }
                  if ($this->session->userdata('tipe') == 'Direktorat Proteksi Infrastruktur Informasi Kritikal Nasional, Deputi II') {
                    if ($data->d22 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }
                  if ($this->session->userdata('tipe') == 'Direktorat Proteksi Ekonomi Digital, Deputi II
') {
                    if ($data->d23 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }
                  if ($this->session->userdata('tipe') == 'Direktorat Penanggulangan dan Pemulihan Pemerintah, Deputi III
') {
                    if ($data->d31 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }
                  if ($this->session->userdata('tipe') == 'Direktorat Penanggulangan dan Pemulihan Infrastruktur Informasi Kritikal Nasional, Deputi III
') {
                    if ($data->d32 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }
                  if ($this->session->userdata('tipe') == 'Direktorat Penanggulangan dan Pemulihan Ekonomi Digital, Deputi III
') {
                    if ($data->d33 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }

                  if ($this->session->userdata('tipe') == 'Kepala Pusat Data dan Teknologi Informasi Komunikasi
') {
                    if ($data->p4 == 1) {
                      echo '
                      <tr>
                      <td>'.$data->ticket.'</td>
                      <td>'.$data->waktu_laporan.'</td>
                      <td>'.$data->jenis_klasifikasi.'</td>
                      <td><a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a></td>
                      <td style="text-align: center">';
                      echo '</td>
                      </tr>
                      ';
                    }
                  }


                if ($this->session->userdata('admin') == 1) {
                  echo '
                  <tr>
                  <td>'.$i++.'</td>
                  <td>'.$data->ticket.'</td>
                  <td>'.$data->waktu_laporan.'</td>
                  <td>'.$data->jenis_klasifikasi.'</td>
                  <td>
                  <button class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModalDetail'.$data->id_aduan.'"><i class="glyphicon glyphicon-list-alt"></i> Detail</button>
                  <a href="'.base_url('index.php/admin/lapor/').''.$data->ticket.'/'.$data->id_aduan.'" class="btn btn-primary btn-flat">Diskusi</a>
                  </td>
                  <td style="text-align: center">';
                if ($this->session->userdata('tipe') == null) {
                  if ($data->status == 1) {
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="1">Open</option>
                      <option value="2">Close Successful</option>
                      <option value="3">Close Unsuccessful</option>
                      <option value="4">Pending</option>
                    </select>
                    ';
                  } elseif ($data->status == 2) {
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="2">Close Successful</option>
                      <option value="1">Open</option>                      
                      <option value="3">Close Unsuccessful</option>
                      <option value="4">Pending</option>
                    </select>
                    ';
                  } elseif($data->status == 3) {
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="3">Close Unsuccessful</option>
                      <option value="1">Open</option>
                      <option value="2">Close Successful</option>                      
                      <option value="4">Pending</option>
                    </select>
                    ';
                  } elseif($data->status == 4){
                    echo '
                    <select class="form-control" onchange="updateStatus('.$data->id_aduan.',this.value)">
                      <option value="4">Pending</option>
                      <option value="1">Open</option>
                      <option value="2">Close Successful</option>
                      <option value="3">Close Unsuccessful</option>
                    </select>
                    ';
                  }                   
                  } else {
                    if ($data->status == 1) {
                      echo '<h4>Open</h4>';
                    } elseif ($data->status == 2) {
                      echo '<h4>Close Successful</h4>';
                    }elseif ($data->status == 3) {
                      echo '<h4>Close Unsuccessful</h4>';
                    }elseif ($data->status == 4) {
                      echo '<h4>Pending</h4>';
                    }
                  }
                  echo '</td>
                  </tr>
                  ';
                  }  

                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    
<?php
foreach ($laporan as $data) {
  echo '
    <div id="myModalDetail'.$data->id_aduan.'" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Detail</h4>
          </div>
          <div class="modal-body">
            <p>
            <form method="post" action="#">

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Waktu Laporan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" disabled value="'.$data->waktu_laporan.'">
            </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Jenis Klasifikasi</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" disabled value="'.$data->jenis_klasifikasi.'">
            </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Perkiraan Waktu Kejadian</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" disabled value="'.$data->waktu_kejadian.'">
            </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Deskripsi Umum</label>
            <div class="col-sm-12">
              <textarea class="form-control" disabled>'.$data->deskripsi_umum.'</textarea>
            </div>
            </div>

            <hr> <h4 style="margin-bottom: 20px"><b>Dekripsi Aset</b></h4>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Nama Aset</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" disabled value="'.$data->nama_ket_aset.'">
            </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Lokasi Aset</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" disabled value="'.$data->lokasi_aset.'">
            </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Lokasi Pada Peta</label> 
            <div class="col-sm-12">
              <div id="map"style="height: 300px;"></div>
            </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" disabled value="'.$data->lat.'">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" disabled value="'.$data->lng.'">
              </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Identitas Pemilik/Penanggung Jawab</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" disabled value="'.$data->identitas_pemilik_aset.'">
            </div>
            </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Bukti</label>
            <div class="col-sm-12">
              <a href="'.base_url().'uploads/'.$data->bukti.'" target="blank" class="btn btn-block btn-md btn-primary">Download</a>
            </div>
            </div>

            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  ';
}?>

    <script type="text/javascript">
      function updateStatus(id,a) {
        $.ajax({
          url: '<?php echo base_url(); ?>admin/updateStatusAduan/'+id+'/'+a,
          type: 'POST',
          dataType: 'json',
          data: '',
          success: function(r){

          }
        })
      }
    </script> 

    <script type="text/javascript">

    $(document).ready(function () {
      var peta = L.map('map').setView([0.5249466196592965, 101.44810698310228], 13);

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicHJheW9nYXJtIiwiYSI6ImNrdGsyMGt5bTAyazEycG1rb2FkY2wxbmoifQ.REfln_zjBBJMSZjvhjOCMw', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 18,
          id: 'mapbox/streets-v11',
          accessToken: 'pk.eyJ1IjoicHJheW9nYXJtIiwiYSI6ImNrdGsyMGt5bTAyazEycG1rb2FkY2wxbmoifQ.REfln_zjBBJMSZjvhjOCMw'
      }).addTo(peta);

      var marker = L.marker([0.5249466196592965, 101.44810698310228]).addTo(peta);

      marker.on('dragend', function(event){
        var position = marker.getLatLng();
        $('#lat').val(position.lat);
        $('#lng').val(position.lng);
      });

    });
    </script>