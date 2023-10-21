 <div class="modal fade" id="modal-lg">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <form action="/products/remove" method="post">
                 <div class="modal-header">
                     <h4 class="modal-title">Confirm!</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <p>Are you sure do you want remove this products?!&hellip;</p>
                     
                     <input type="hidden" id="id_product" name="id_product" value="">
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                     <button type="submit" class="btn btn-primary">Yes</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 <!-- /.modal -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Products</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="/home">Home</a></li>
                         <li class="breadcrumb-item active">Product</li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <div class="content">
         <div class="container-fluid">
             <?php
                $session = session();
                $alert = $session->get('alert');
                ?>
             <?php if (isset($alert)) : ?>

                 <?php if ($alert == 'success_create') : ?>
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="alert alert-success alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 Product created successfully!
                             </div>
                         </div>
                     </div>
                 <?php elseif ($alert == 'success_delete') : ?>
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="alert alert-success alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 Product deleted successfully!
                             </div>
                         </div>
                     </div>
                 <?php endif;  ?>

             <?php endif;  ?>


             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <a href="products/newProduct" class="btn btn-info"><i class="fas fa-user-plus"></i> New product</a>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">ID:</th>
                                         <th>Name</th>
                                         <th>Description</th>
                                         <th>Quantity</th>
                                         <th>Quantity min.</th>
                                         <th>Price</th>
                                         <th>Price sale</th>
                                         <th>Profit</th>
                                         <th>Validity</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php if (!empty($products)) : ?>
                                         <?php foreach ($products as $product) : ?>
                                             <tr>
                                                 <td><?= $product['id_product'] ?></td>
                                                 <td><?= $product['name'] ?></td>
                                                 <td><?= $product['description'] ?></td>
                                                 <td><?= $product['quantity'] ?></td>
                                                 <td><?= $product['quantity_min'] ?></td>
                                                 <td><?= $product['price'] ?></td>
                                                 <td><?= $product['price_sale'] ?></td>
                                                 <td><?= $product['profit'] ?></td>
                                                 <td><?= $product['validity'] ?></td>
                                                 <td><a href="/products/seeProduct/<?= $product['id_product'] ?>" class="btn btn-info w-100 mb-2"><i class="fas fa-search"></i></a>
                                                     <a href="/products/editProduct/<?= $product['id_product'] ?>" class="btn btn-warning w-100 mb-2"><i class="fas fa-edit"></i></a>
                                                     <button type="button" class="btn btn-danger w-100" onclick="document.getElementById('id_product').value='<?= $product['id_product'] ?>'" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-trash"></i></button>
                                                 </td>
                                             </tr>


                                         <?php endforeach; ?>
                                     <?php else : ?>
                                         <tr>
                                             <td colspan="12"> No product found!</td>
                                         </tr>

                                     <?php endif; ?>


                                 </tbody>
                             </table>
                         </div>
                         <!-- /.card-body -->

                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col-md-6 -->
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->