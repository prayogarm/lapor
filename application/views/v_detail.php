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
  <section class="content container-fluid">


   <div class="box box-warning direct-chat direct-chat-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Tiket #<?php echo $aduan->ticket;?></h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <!-- Conversations are loaded here -->
      <div class="direct-chat-messages" style="height: 400px">
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg right">
          <div class="direct-chat-info clearfix">
            <span class="direct-chat-name pull-right"><?php echo $aduan->nama_user; ?></span>
            <span class="direct-chat-timestamp pull-left"><?php echo $aduan->waktu_laporan; ?></span>
          </div>
          <!-- /.direct-chat-info -->
          <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="message user image">
          <!-- /.direct-chat-img -->
          <div class="direct-chat-text">
            <p class="pull-right"><?php echo $aduan->deskripsi_umum; ?></p>
            <a href="<?php echo base_url(); ?>uploads/<?php echo $aduan->bukti; ?>" class="btn btn-primary btn-md" target="blank">Download Bukti</a>
          </div>
          <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

        <?php foreach ($chat as $data): ?>
          
            <?php if ($data->id_user != null): ?>
              <div class="direct-chat-msg right">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-right"><?php echo $aduan->nama_user; ?></span>
                  <span class="direct-chat-timestamp pull-left"><?php echo $data->datetime; ?></span>
                </div>
                <!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  <p class="text-right">
                  <?php if ($data->chat != null): ?>
                      <?php echo $data->chat; ?>
                    <?php else: ?>
                      <a href="<?php echo base_url(); ?>uploads/<?php echo $data->file; ?>" class="btn btn-primary btn-md" target="blank">Download Lampiran</a>
                  <?php endif ?>
                  </p>
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
            <?php endif ?>
            <?php if ($data->id_user == null): ?>
              <div class="direct-chat-msg">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-left">Admin</span>
                  <span class="direct-chat-timestamp pull-right"><?php echo $data->datetime; ?></span>
                </div>
                <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="message user image">
                <div class="direct-chat-text">
                  <?php if ($data->chat != null): ?>
                      <?php echo $data->chat; ?>
                    <?php else: ?>
                      <a href="<?php echo base_url(); ?>uploads/<?php echo $data->file; ?>" class="btn btn-primary btn-md" target="blank">Download Lampiran</a>
                  <?php endif ?>


                  <?php if ($this->session->userdata('admin') == 1 && $data->status == 0): ?>
                    <a href="<?php echo base_url('index.php/admin/tampilChat/'); ?><?php echo $data->id; ?>" class="btn btn-success btn-sm">Tampilkan</a>
                    <a href="<?php echo base_url('index.php/admin/deleteChat/'); ?><?php echo $data->id; ?>" class="btn btn-danger btn-sm">Hapus</a>  
                  <?php endif ?>

                </div>
              </div>
            <?php endif ?>
          

        <?php endforeach ?>

      </div>
      <!-- /.direct-chat-pane -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">

      <?php if ($this->session->flashdata('error') != null): ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
      <?php endif ?>
      
      <form action="<?php echo base_url('index.php/beranda/chat'); ?>" method="post">
        <div class="input-group">
          <input type="text" name="chat" placeholder="Type Message ..." class="form-control" required>
          <span class="input-group-btn">
            <button type="submit" class="btn btn-warning btn-flat">Send</button>
          </span>
        </div>
      </form>
    </div>
    <!-- /.box-footer-->
  </div>


</section>
<!-- /.content -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            var data = new FormData(document.getElementById("uploadFile"));

            $.ajax({
              url: '<?php echo base_url();?>beranda/uploadFile',
              data: data,
              type: 'POST',
              dataType: 'JSON',
              mimeType: 'multipart/form-data',
              processData: false,
              contentType: false,
              success: function(r) {
               
              },
            })

            window.location.reload();
        });
    });
</script>
