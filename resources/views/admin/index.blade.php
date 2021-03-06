@extends('admin.layout')

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h2 class="page-header top15">Dashboard</h2>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Grafik Pesantren Per Provinsi
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <canvas id="canvas"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<div class="row">
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Grafik Perbandingan Santri
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <canvas id="pie"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Line Chart Example
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="morris-line-chart"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Donut Chart Example
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="morris-donut-chart"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->
@endsection

@section('script')
<script src="{{ asset('js/Chart.bundle.js') }}"></script>
<script>
  var randomColorFactor = function() {
      return Math.round(Math.random() * 255);
  };
  var randomColor = function() {
      return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
  };
  var barChartData = {
      //labels: ["January", "February", "March", "April", "May", "June", "July"],
      labels: {!! json_encode($nama_provinsi) !!},
      datasets: [{
          label: 'Jumlah Pesantren',
          backgroundColor: randomColor(),
          //data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
          data: {!! json_encode($jmlpesantrens) !!}
      }]

  };

  window.onload = function() {
      var ctx2 = document.getElementById("canvas").getContext("2d");
      window.myBar = new Chart(ctx2, {
          type: 'bar',
          data: barChartData,
          options: {
              // Elements options apply to all of the options unless overridden in a dataset
              // In this case, we are setting the border of each bar to be 2px wide and green
              elements: {
                  rectangle: {
                      borderWidth: 0.5,
                      borderColor: 'rgb(0, 0, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              legend: {
                  position: 'top',
              },
              title: {
                  display: true,
                  text: 'Pesantren Berdasarkan Provinsi'
              }
          }
      });

      var ctx = document.getElementById("pie").getContext("2d");
      window.myPie = new Chart(ctx, config);
  };
</script>






<!-- pie chart :: created by agung -->
<script type="text/javascript">

var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                {!! json_encode($pie_chart[0]->jumlah_santri) !!},
                {!! json_encode($pie_chart[0]->jumlah_santri_mukim) !!},
            ],
            backgroundColor: [
                "#F7464A",
                "#46BFBD",
            ],
        }],
        labels: [
            "Santri Mukim",
            "Santri Non-Mukin",
        ]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Perbandingan Santri Mukim dari Total Santri'
        }
    }
};

// For a pie chart
// window.onload = function() {
//     var ctx = document.getElementById("pie").getContext("2d");
//     window.myPie = new Chart(ctx, config);
// };

</script>
@endsection
