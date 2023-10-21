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
                Product updated successfully!
              </div>
            </div>
          </div>
          

        <?php endif;  ?>
          
      <?php endif;  ?>

      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="/products" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-arrow-left"></i> Back</a>
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">Product</a></li>
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
              <h3 class="card-title">Product data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/products/update" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" class="form-control" name="description" value="<?= $product['description'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Quantity</label>
                      <input type="number" class="form-control" name="quantity" value="<?= $product['quantity'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Quantity min.</label>
                      <input type="number" class="form-control" name="quantity_min" value="<?= $product['quantity_min'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Price</label>
                      <input type="double" class="form-control" name="price" value="<?= $product['price'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Price sale</label>
                      <input type="double" class="form-control" name="price_sale" value="<?= $product['price_sale'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Profit</label>
                      <input type="double" class="form-control" name="profit" value="<?= $product['profit'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="">Validity</label>
                      <input type="date" class="form-control" name="validity" value="<?= $product['validity'] ?>">
                    </div>
                  </div>

                  <input type="hidden" name="id_product" value="<?= $product['id_product'] ?>">

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