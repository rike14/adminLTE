 <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="/funcionarios/excluir" method="post">
              <div class="modal-header">
              <h4 class="modal-title">Confirme sua Ação!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Deseja realmente excluir esse funcionário?!&hellip;</p>
              <input type="hidden" id="id_funcionario" name="id_funcionario" value="">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Sim</button>
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
            <h1 class="m-0">Funcionários</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/inicio">Home</a></li>
              <li class="breadcrumb-item active">Funcionário</li>
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
        <?php if(isset($alert)): ?>

          <?php if($alert == 'success_create'): ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Funcionário cadastrado com sucesso!
                  </div>
              </div>
            </div>
            <?php elseif ($alert == 'success_delete'): ?>
              <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Funcionário excluído com sucesso!
                  </div>
              </div>
            </div>
          <?php endif;  ?>

        <?php endif;  ?>


        <div class="row">
          <div class="col-lg-12">
           <div class="card">
              <div class="card-header">
                <a href="funcionarios/novo" class="btn btn-info"><i class="fas fa-user-plus"></i>  Novo Funcionário</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Cód.:</th>
                      <th>Nome</th>
                      <th>Data de Nascimento</th>
                      <th>CPF</th>
                      <th>RG</th>
                      <th>Telefone</th>
                      <th>Endereço</th>
                      <th>Dia de Contratação</th>
                      <th>Cargo</th>
                      <th>Salário</th>
                      <th>Dia de Pagamento</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php if(!empty($funcionarios)): ?>
                      <?php foreach($funcionarios as $funcionario): ?>
                      <tr>
                          <td><?= $funcionario['id_funcionario']?></td>
                          <td><?= $funcionario['nome']?></td>
                          <td><?= $funcionario['data_de_nascimento']?></td>
                          <td><?= $funcionario['CPF']?></td>
                          <td><?= $funcionario['RG']?></td>
                          <td><?= $funcionario['telefone']?></td>
                          <td><?= $funcionario['endereco']?></td>
                          <td><?= $funcionario['data_de_contratacao']?></td>
                          <td><?= $funcionario['cargo']?></td>
                          <td><?= $funcionario['salario']?></td>
                          <td><?= $funcionario['dia_de_pagamento']?></td>
                          <td><a href="/funcionarios/ver/<?=$funcionario['id_funcionario'] ?>" class="btn btn-info " ><i class="fas fa-search"></i></a>
                          <a href="/funcionarios/editar/ <?=$funcionario['id_funcionario'] ?>" class="btn btn-warning" ><i class="fas fa-user-edit"></i></a>
                          <button type="button" class="btn btn-danger" onclick="document.getElementById('id_funcionario').value='<?=$funcionario['id_funcionario'] ?>'" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-trash"></i></button></td>
                      </tr>


                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="7"> Nenhum registro encontrado!</td>
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