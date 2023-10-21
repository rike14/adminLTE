<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/clients" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-undo"></i>   Back</a>
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/clients">Clients</a></li>
              <li class="breadcrumb-item active">Client data</li>
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
                             <input type="text" class="form-control"   value="<?= $client['name'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Date of birth</label>
                             <input type="date" class="form-control"  value="<?= $client['date_of_birth'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Phone</label>
                             <input type="text" class="form-control"   value="<?= $client['phone'] ?>" disabled>
                        </div>
                     </div>
                      <div class="col-lg-8">
                           <div class="form-group">
                            <label for="">Address</label>
                             <input type="text" class="form-control"  value="<?= $client['address'] ?>" disabled>
                        </div>
                     </div>
                     <div class="col-lg-4">
                           <div class="form-group">
                            <label for="">Credit limit</label>
                             <input type="text" class="form-control"  value="<?= $client['credit_limit'] ?>" disabled>
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