<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-user-plus"></i> Novo Funcionário</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/clientes" class="btn btn-success" style="margin-right: 15px"> <i class="fas fa-undo"></i>  Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
              <li class="breadcrumb-item"><a href="/funcionarios">Funcionário</a></li>
              <li class="breadcrumb-item active">Novo</li>
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
                <h3 class="card-title">Dados Pessoais</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/funcionarios/store" method="post">
                <div class="card-body">
                 <div class="row">
                     <div class="col-lg-6">
                           <div class="form-group">
                            <label for="">Nome</label>
                             <input type="text" class="form-control"  name="nome">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Data de Nascimento</label>
                             <input type="date" class="form-control"  name="data_de_nascimento">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">CPF</label>
                             <input type="text" class="form-control"  name="CPF">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">RG</label>
                             <input type="text" class="form-control"  name="RG">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Telefone</label>
                             <input type="text" class="form-control"  name="telefone">
                        </div>
                     </div>
                      <div class="col-lg-8">
                           <div class="form-group">
                            <label for="">Endereço</label>
                             <input type="text" class="form-control"  name="endereco">
                        </div>
                     </div>
                     <div class="col-lg-4">
                           <div class="form-group">
                            <label for="">Data de Contratação</label>
                             <input type="date" class="form-control"  name="data_de_contratacao">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Cargo</label>
                             <input type="text" class="form-control"  name="cargo">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Salário</label>
                             <input type="text" class="form-control"  name="salario">
                        </div>
                     </div>
                     <div class="col-lg-3">
                           <div class="form-group">
                            <label for="">Dia de Pagamento</label>
                             <input type="text" class="form-control"  name="dia_de_pagamento">
                        </div>
                     </div>
                 </div>
                  
                
                </div>
                <!-- /.card-body -->
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
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