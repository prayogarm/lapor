    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box box-solid">
          <div class="box-body">

            <ul class="nav nav-pills nav-justified" style="margin-bottom: 10px">
              <li class="active"><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="<?php echo base_url(); ?>admin/laporan">Laporan</a></li>
              <?php endif ?>
              <li><a href="<?php echo base_url(); ?>admin/progress">Sedang Ditangani</a></li>
              <?php if ($this->session->userdata('admin') == 1): ?>
                <li><a href="<?php echo base_url(); ?>admin/user">Manajemen User</a></li>
              <?php endif ?>
            </ul>
            
            <div class="chart">
              <h3 class="text-center"><b>Tahun 2022</b></h3>
              <canvas id="areaChart" style="height:250px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

        <!-- DONUT CHART -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="aduan-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
        </div>
      <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Morris.js charts -->
    <script src="<?php echo base_url(); ?>assets/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/morris.js/morris.min.js"></script>

    <script>
      //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [
      {
        label               : 'Jumlah Aduan',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [<?php echo $jan; ?>, 
                               <?php echo $feb; ?>,
                               <?php echo $mar; ?>,
                               <?php echo $apr; ?>,
                               <?php echo $mei; ?>,
                               <?php echo $jun; ?>,
                               <?php echo $jul; ?>,
                               <?php echo $ags; ?>,
                               <?php echo $sep; ?>,
                               <?php echo $okt; ?>,
                               <?php echo $nov; ?>,
                               <?php echo $des; ?>
                            ]
      }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

        //DONUT CHART
    var donut = new Morris.Donut({
      element: 'aduan-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a", "#f39c12"],
      data: [
        {label: "Aduan Open", value: 
        <?php 
          if (isset($this->m_admin->donutChart(1)->jumlah)) {
            echo $this->m_admin->donutChart(1)->jumlah;
          } else {
            echo '0';
          };
         ?>
        },
        {label: "Aduan Close Unsuccessful", value: 
        <?php 
          if (isset($this->m_admin->donutChart(2)->jumlah)) {
            echo $this->m_admin->donutChart(2)->jumlah;
          } else {
            echo '0';
          };
         ?>
        },
        {label: "Aduan Close Successful", value: 
        <?php 
          if (isset($this->m_admin->donutChart(3)->jumlah)) {
            echo $this->m_admin->donutChart(3)->jumlah;
          } else {
            echo '0';
          };
         ?>
        },
        {label: "Aduan Pending", value: 
          <?php 
          if (isset($this->m_admin->donutChart(4)->jumlah)) {
            echo $this->m_admin->donutChart(4)->jumlah;
          } else {
            echo '0';
          };
           ?>
        }
      ],
      hideHover: 'auto'
    });
</script>