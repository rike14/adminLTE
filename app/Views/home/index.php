<?php

$session = session();

$firstName = $session->get('first_name');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Welcome <?= $firstName ?> !</h1>
        </div><!-- /.col -->
        <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div> -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Clients</span>
              <span class="info-box-number"><?= $total_clients ?></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-user-tie"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Employees</span>
              <span class="info-box-number"><?= $total_employees ?></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number"><?= $total_products ?></span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quantity of Clients, Employees and Products</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="442" height="250" class="chartjs-render-monitor"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Quantity of Products</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="442" height="250" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Quantity of Clients, Employees and Products</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="442" height="250" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  new Chart(document.getElementById("barChart"), {
    type: 'bar',
    data: {
      labels: ["Clients", "Employees", "Products"],
      datasets: [{
        label: "Quantity",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
        data: [<?= $total_clients ?>, <?= $total_employees ?>, <?= $total_products ?>]
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 1,
          }
        }]
      }
    }
  });

  new Chart(document.getElementById("donutChart"), {
    type: 'doughnut',
    data: {
      labels: ["Clients", "Employees", "Products"],
      datasets: [{
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
        data: [<?= $total_clients ?>, <?= $total_employees ?>, <?= $total_products ?>]
      }]
    },
    options: {
      legend: {
        display: true
      },
      title: {
        display: true,
        text: ''
      }
    }
  });

  new Chart(document.getElementById("pieChart"), {
    type: 'pie',
    data: {
      labels: [<?php foreach ($products as $product) {
                  echo "'" . $product['name'] . "',";
                }
                ?>],
      datasets: [{
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", ],
        data: [<?php foreach ($products as $product) {
                  echo $product['quantity'] . ",";
                }
                ?>]
      }]
    },
    options: {
      legend: {
        display: true
      },
      title: {
        display: true,
        text: ''
      }
    }
  });
</script>