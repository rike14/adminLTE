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
                Employee updated successfully!
              </div>
            </div>
          </div>

        <?php endif;  ?>

      <?php endif;  ?>

      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update employee</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/employees" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-arrow-left"></i> Back</a>
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/employees">Employees</a></li>
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
              <h3 class="card-title">Employee details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/employees/update" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name" value="<?= $employee['name'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Date of birth</label>
                      <input type="date" class="form-control" name="date_of_birth" value="<?= $employee['date_of_birth'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">CPF</label>
                      <input type="text" class="form-control" name="CPF" value="<?= $employee['CPF'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">RG</label>
                      <input type="text" class="form-control" name="RG" value="<?= $employee['RG'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="text" class="form-control" name="phone" value="<?= $employee['phone'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" name="address" value="<?= $employee['address'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Hiring day</label>
                      <input type="date" class="form-control" name="hiring_day" value="<?= $employee['hiring_day'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Role</label>
                      <input type="text" class="form-control" name="role" value="<?= $employee['role'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Salary</label>
                      <input type="number" step="0.01" class="form-control" name="salary" value="<?= $employee['salary'] ?>">
                    </div>
                  </div>

                  <input type="hidden" name="id_employee" value="<?= $employee['id_employee'] ?>">

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