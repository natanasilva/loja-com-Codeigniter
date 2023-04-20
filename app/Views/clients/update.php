<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Editar Cliente</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Início</a></li>
          <li class="breadcrumb-item active"> Editar Cliente </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Tabela de resultados -->
    <div class="card">
      <div class="card-header bg-gradient-secondary">
        <h3 class="card-title">
          Atualização de Cliente
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="<?= base_url(); ?>/clientes/salvar" method="POST">
          <div class="card-body row">
            <input type="hidden" value="<?= $result["id_client"]; ?>" name="id_client">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Nome do Cliente</label>
              <input type="text" class="form-control" id="client_name" placeholder="Digite o dado" value="<?= $result["client_name"]; ?>" name="client_name">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Email do do Cliente</label>
              <input type="email" class="form-control" id="client_email" placeholder="Digite o dado" value="<?= $result["client_email"]; ?>" name="client_email">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Senha do do Cliente</label>
              <input type="password" class="form-control" id="client_password" placeholder="Digite o dado" value="<?= $result["client_password"]; ?>" name="client_password">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">CPF do Cliente</label>
              <input type="text" class="form-control" id="client_cpf" placeholder="Digite o dado" value="<?= $result["client_cpf"]; ?>" name="client_cpf">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Telefone do Cliente</label>
              <input type="text" class="form-control" id="client_phone" placeholder="Digite o dado" value="<?= $result["client_phone"]; ?>" name="client_phone">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tipo do Cliente</label>
              <input type="text" class="form-control" id="client_type" placeholder="Digite o dado" value="<?= $result["client_type"]; ?>" name="client_type">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Endereço do Cliente</label>
              <input type="text" class="form-control" id="client_adddress" placeholder="Digite o dado" value="<?= $result["client_adddress"]; ?>" name="client_adddress">
            </div>
            <div class="form-group col-md-6" hidden>
              <label for="exampleInputEmail1">Data de Cadastro do Cliente</label>
              <input type="text" class="form-control" id="client_created_in" placeholder="Digite o dado" value="<?= $result["client_created_in"]; ?>" name="client_created_in">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salva Cliente</button>
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
  </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>