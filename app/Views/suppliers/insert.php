<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Cadastrar um Fornecedor</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Início</a></li>
          <li class="breadcrumb-item active"> Cadastro de Fornecedor </li>
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
          Cadastrar um novo fornecedor
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <form action="<?= base_url(); ?>/fornecedores/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label> Nome do Fornecedor: <span class="text-danger">*</span> </label><br>
              <input type="text" name="suppliers_name" class="form-control" required placeholder="Digite o nome"><br>
            </div>

            <div class="form-group col-md-6">
              <label> Código do Fornecedor: <span class="text-danger">*</span></label><br>
              <input type="text" name="suppliers_code" class="form-control" required placeholder="Digite o Código" maxlength="12"><br>
            </div>

            <div class="form-group col-md-6">
              <label> CNPJ do Fornecedor: <span class="text-danger">*</span> </label><br>
              <input type="text" id="cnpj_suppliers" name="cnpj_suppliers" class="form-control cnpj-mask" required placeholder="Digite o CNPJ"><br>
            </div>
            <input type="hidden" value="" name="id_product">

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Fornecedor</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>