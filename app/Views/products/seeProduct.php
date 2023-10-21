<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Product data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/products" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-arrow-left"></i> Back</a>
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">Product</a></li>
            <li class="breadcrumb-item active">Product data</li>
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
              <h3 class="card-title">Product data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="<?= $product['name'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" value="<?= $product['description'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" value="<?= $product['quantity'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Quantity min.</label>
                    <input type="number" class="form-control" value="<?= $product['quantity_min'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="double" class="form-control" value="<?= $product['price'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Price sale</label>
                    <input type="double" class="form-control" value="<?= $product['price_sale'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Profit</label>
                    <input type="double" class="form-control" value="<?= $product['profit'] ?>" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Validity</label>
                    <input type="date" class="form-control" value="<?= $product['validity'] ?>" disabled>
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