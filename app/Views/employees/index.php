 <div class="modal fade" id="modal-lg">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <form action="/employees/remove" method="post">
         <div class="modal-header">
           <h4 class="modal-title">Confirm!</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <p>Are you sure do you want remove this employee?!&hellip;</p>
           <input type="hidden" id="id_employee" name="id_employee" value="">
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
           <h1 class="m-0">Employees</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="/home">Home</a></li>
             <li class="breadcrumb-item active">Employee</li>
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
                 Employee created successfully!
               </div>
             </div>
           </div>
         <?php elseif ($alert == 'success_delete') : ?>
           <div class="row">
             <div class="col-lg-12">
               <div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 Employee deleted successfully!
               </div>
             </div>
           </div>
         <?php endif;  ?>

       <?php endif;  ?>


       <div class="row">
         <div class="col-lg-12">
           <div class="card">
             <div class="card-header">
               <a href="employees/newEmployee" class="btn btn-info"><i class="fas fa-user-plus"></i> New employee</a>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th style="width: 10px">ID:</th>
                     <th>Name</th>
                     <th>Date of birth</th>
                     <th>CPF</th>
                     <th>RG</th>
                     <th>Phone</th>
                     <th>Address</th>
                     <th>Hiring day</th>
                     <th>Role</th>
                     <th>Salary</th>
                     <th>Actions</th>
                   </tr>
                 </thead>
                 <tbody>

                   <?php if (!empty($employees)) : ?>
                     <?php foreach ($employees as $employee) : ?>
                       <tr>
                         <td><?= $employee['id_employee'] ?></td>
                         <td><?= $employee['name'] ?></td>
                         <td><?= $employee['date_of_birth'] ?></td>
                         <td><?= $employee['CPF'] ?></td>
                         <td><?= $employee['RG'] ?></td>
                         <td><?= $employee['phone'] ?></td>
                         <td><?= $employee['address'] ?></td>
                         <td><?= $employee['hiring_day'] ?></td>
                         <td><?= $employee['role'] ?></td>
                         <td><?= $employee['salary'] ?></td>
                         <td><a href="/employees/seeEmployee/<?= $employee['id_employee'] ?>" class="btn btn-info w-100 mb-2"><i class="fas fa-search"></i></a>
                           <a href="/employees/editEmployee/<?= $employee['id_employee'] ?>" class="btn btn-warning w-100 mb-2"><i class="fas fa-user-edit"></i></a>
                           <button type="button" class="btn btn-danger w-100" onclick="document.getElementById('id_employee').value='<?= $employee['id_employee'] ?>'" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-trash"></i></button>
                         </td>
                       </tr>


                     <?php endforeach; ?>
                   <?php else : ?>
                     <tr>
                       <td colspan="12"> No employee found!</td>
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