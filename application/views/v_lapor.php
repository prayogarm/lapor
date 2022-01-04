<section class="content-header">
  <h1>
    Beranda
    <small>Aduan Jaringan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Lapor</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="box box-warning" id="box-laporan">
    <div class="box-header with-border">
      <h3 class="box-title">Form Aduan Jaringan</h3>
    </div>
    <div class="box-body" style="font-size: 1.0em">
      <div class="col-sm-8">
        <?php if ($this->session->flashdata('success') != null): ?>
          <div class="alert alert-success" style="margin-top: 20px"><i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success');?></div>
        <?php endif ?>
        <?php if ($this->session->flashdata('failed') != null): ?>
          <div class="alert alert-danger" style="margin-top: 20px"><i class="fa fa-times-circle"></i> <?php echo $this->session->flashdata('failed');?></div>
        <?php endif ?>
        <form class="form-horizontal" id="form-lapor" method="post" action="<?php echo base_url('beranda/insertLapor'); ?>" enctype='multipart/form-data'>
          <div class="form-group">
            <label class="col-sm-4 control-label">Jenis Kaduan</label>
            <div class="col-sm-8">
              <select class="form-control" name="jenis" id="jenisAduan">
                <option value="">Pilih Jenis Aduan Jaringan</option>
                <option value="Account Comoromise">Account Comoromise (Pembajakan Akun)</option>
                <option value="Data Theft">Data Theft (Pencurian Data)</option>
                <option value="Exploitaion of Weak Configuration">Exploitaion of Weak Configuration (Eksploitasi pada sistem yang lemah)</option>
                <option value="Exploitaion of Weak Network Architecture">Exploitaion of Weak Network Architecture (Eksploitasi pada arsitektur jaringan yang lemah)</option>
                <option value="Patched Software Exploitation">Patched Software Exploitation (Eksploitasi pada Perangkat Lunak yang telah di Patch)</option>
                <option value="Network Penetration">Network Penetration (Penetrasi Jaringan)</option>
                <option value="Service Disruption">Service Disruption (Gangguan Layanan)</option>
                <option value="Spoofing or DNS Poisoning">Spoofing or DNS Poisoning (Pengalihan DNS)</option>
                <option value="Unauthorized System Access">Unauthorized System Access (Akses sistem yang ilegal/tidak sah)</option>
                <option value="Unintentional Information System Exposure">Unintentional Information System Exposure (Pembukaan Informasi yang tidak disengaja)</option>
                <option value="Unpatched Vulnerable Software Exploitation">Unpatched Vulnerable Software Exploitation (Eksploitasi Kerentanan Software yang tidak di Patch)</option>
                <option value="Website Defacement">Website Defacement (Perusakan Tampilan Situs Web)</option>
                <option value="Wireless Access Point Exploitation">Wireless Access Point Exploitation (Eksploitasi pada WAP)</option>
                <option value="Kerentanan">Kerentanan (Vulnerability Disclosure)</option>
                <option value="Phising">Phising</option>
                <option value="Indikator Serangan">Indikator Serangan</option>
                <option value="Malware">Malware</option>
                <option value="Konten Negatif">Konten Negatif</option>
              </select>
            </div>
          </div>
          <div id="setelahmemilihjenis" style="display: none">
            <div class="form-group">
            <label class="col-sm-4 control-label">Perkiraan Waktu Kejadian</label>
            <div class="col-sm-8">
              <input type="date" name="waktu_kejadian" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Deskripsi Umum</label>
            <div class="col-sm-8">
              <textarea class="form-control" placeholder="Deskripsi Umum" name="desc_umum" style="height: 150px"></textarea>
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-4 control-label">Deskripsi Gangguan</label>
            <div class="col-sm-8">
              <hr>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Nama Aset</label>
            <div class="col-sm-8">
              <input type="text" name="nama_aset" class="form-control" placeholder="Nama Aset">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Lokasi</label>
            <div class="col-sm-8">
              <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Lokasi Pada Peta</label>
            <div class="col-sm-8">
              <div id="map"style="height: 300px;"></div>
            </div>
          </div>

          <div class="row" style="display:none;">
            <div class="form-group col-sm-6">
              <label class="col-sm-4 control-label">Lat</label>
                <input type="text display:hidden" name="lat" id="lat" class="form-control" placeholder="">
            </div>
            
            <div class="form-group col-sm-6">
              <label class="col-sm-4 control-label">lng</label>
                <input type="text" name="lng" id="lng" class="form-control" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Identitas Pemilik/Penanggung Jawab</label>
            <div class="col-sm-8">
              <input type="text" name="id_pemilik" class="form-control" placeholder="Identitas Pemilik">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Bukti</label>
            <div class="col-sm-8">
              <input type="file" name="bukti" class="form-control">
            </div>
          </div>
          <button class="btn btn-success btn-flat btn-block" style="margin-left: auto;margin-right: auto; width: 400px; margin-bottom: 10px" id="btn-submit" type="submit">Submit Form</button>
          <button class="btn btn-warning btn-flat btn-block" style="margin-left: auto;margin-right: auto; width: 400px; margin-bottom: 10px" id="btn-reset" type="reset">Reset Form</button> 
          </div>
        </form>
      </div>
      <div class="col-sm-4">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Info</h3>
          </div>
          <div class="box-body">
            <p id="infoJenis">
              
            </p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>


    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
      <!-- /.content -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function () {
    var peta = L.map('map').setView([0.5249466196592965, 101.44810698310228], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicHJheW9nYXJtIiwiYSI6ImNrdGsyMGt5bTAyazEycG1rb2FkY2wxbmoifQ.REfln_zjBBJMSZjvhjOCMw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        accessToken: 'pk.eyJ1IjoicHJheW9nYXJtIiwiYSI6ImNrdGsyMGt5bTAyazEycG1rb2FkY2wxbmoifQ.REfln_zjBBJMSZjvhjOCMw'
    }).addTo(peta);

    var marker = L.marker([0.5249466196592965, 101.44810698310228], { draggable: true }).addTo(peta);

    marker.on('dragend', function(event){
      var position = marker.getLatLng();
      $('#lat').val(position.lat);
      $('#lng').val(position.lng);
    });

  });
</script>

