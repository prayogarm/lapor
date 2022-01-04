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
              <li><a href="<?php echo base_url(); ?>admin/progress">Sedang Ditangani</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li class="active"><a href="<?php echo base_url(); ?>admin/user">Manajemen User</a></li>
              <?php endif ?>
            </ul>

              <?php if ($this->session->flashdata('notif') != null): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('notif'); ?></div>
              <?php endif ?>
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Email</th>
                  <th>No KTP/KK/SIM</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php $i=0; foreach ($user as $data): ?>
                  <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $data->nama_user; ?></td>
                    <td><?php echo $data->no_telp; ?></td>
                    <td><?php echo $data->email; ?></td>
                    <td><?php echo $data->no_id; ?></td>
                    <td>
                      <a href="#" data-toggle="modal" data-target="#myModal<?php echo $data->id_user; ?>" class="btn btn-sm btn-flat btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                      <a href="<?php echo base_url(); ?>admin/hapusUser/<?php echo $data->id_user; ?>" class="btn btn-sm btn-flat btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                    </tr>
                <?php endforeach ?>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<?php foreach ($user as $data): ?>
  
    <!-- Modal -->
  <div id="myModal<?php echo $data->id_user;?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profil</h4>
        </div>
        <div class="modal-body">
          <p>
                  <form method="post" action="<?php echo base_url('admin/updateUser/'); ?><?php echo $data->id_user;?>">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">Nama</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="regNama" id="inputNama" placeholder="Nama" required value="<?php echo $data->nama_user;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">No Telepon</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputTelepon" name="regTelp" required value="<?php echo $data->no_telp;?>" placeholder="No Telepon">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">No Identitas(SIM/KTP)</label>
                      <div class="col-sm-12">
                        <input type="number" class="form-control" id="inputId" name="regId" required value="<?php echo $data->no_id;?>" placeholder="No Identitas">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-12 col-form-label">Email</label>
                      <div class="col-sm-12">
                        <input type="email" class="form-control" id="inputEmail" name="regEmail" required value="<?php echo $data->email;?>" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <button type="button" data-dismiss="modal" class="btn btn-default btn-block">Batal</button>
                      </div>
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-block">Simpan</button>
                      </div>
                    </div>
                  </form>
          </p>
        </div>
      </div>

    </div>
  </div>

<?php endforeach ?>

