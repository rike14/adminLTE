<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">

      <?php
      $session = session();
      $alert = $session->get('alert');
      ?>
      <?php if (isset($alert)) : ?>

        <?php if ($alert == 'success_update') : ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Client updated successfully!
              </div>
            </div>
          </div>

        <?php endif;  ?>

      <?php endif;  ?>

      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update client</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/clients" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-arrow-left"></i> Back</a>
            <li class="breadcrumb-item"><a href="/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="/clients">Clients</a></li>
            <li class="breadcrumb-item active">Update</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Personal data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/clients/update" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name" value="<?= $client['name'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Date of birth</label>
                      <input type="date" class="form-control" name="date_of_birth" value="<?= $client['date_of_birth'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="text" class="form-control" name="phone" value="<?= $client['phone'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" name="address" value="<?= $client['address'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Credit limit</label>
                      <input type="number" step="0.01" class="form-control" name="credit_limit" value="<?= $client['credit_limit'] ?>">
                    </div>
                  </div>

                  <input type="hidden" name="id_client" value="<?= $client['id_client'] ?>">

                </div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->