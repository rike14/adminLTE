<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employee data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/employees" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-undo"></i>   Back</a>
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/employees">Employee</a></li>
              <li class="breadcrumb-item active">Employee data</li>
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
              <div class="card-body">
                 <div class="row">
                     <div class="col-lg-6">
                           <div class="form-group">
                            <label for="">Name</label>
                             <input type="text" class="form-control"   value="<?= $employee['name'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Date of birth</label>
                             <input type="date" class="form-control"  value="<?= $employee['date_of_birth'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Phone</label>
                             <input type="text" class="form-control"   value="<?= $employee['phone'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">CPF</label>
                             <input type="text" class="form-control"   value="<?= $employee['CPF'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">RG</label>
                             <input type="text" class="form-control"   value="<?= $employee['RG'] ?>" disabled>
                        </div>
                     </div>
                      <div class="col-lg-8">
                           <div class="form-group">
                            <label for="">Address</label>
                             <input type="text" class="form-control"  value="<?= $employee['address'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-4">
                           <div class="form-group">
                            <label for="">Hiring day</label>
                             <input type="date" class="form-control"  value="<?= $employee['hiring_day'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Role</label>
                             <input type="text" class="form-control"   value="<?= $employee['role'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Salary</label>
                             <input type="text" class="form-control"   value="<?= $employee['salary'] ?>" disabled>
                        </div>
                     </div>
                 </div>
                  
                
                </div>
                <!-- /.card-body -->
                  <div class="card-footer">
                 
                </div>
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