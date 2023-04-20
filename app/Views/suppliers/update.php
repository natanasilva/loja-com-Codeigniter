<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Editar Fornecedor</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Início</a></li>
          <li class="breadcrumb-item active"> Editar Fornecedor </li>
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
          Atualização de Fornecedor
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="<?= base_url(); ?>/fornecedores/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label> Nome do Fornecedor: <span class="text-danger">*</span> </label><br>
              <input type="text" name="suppliers_name" class="form-control" required placeholder="Digite o nome" value="<?= $result['suppliers_name']; ?>"><br>
            </div>

            <div class="form-group col-md-6">
              <label> Código do Fornecedor: <span class="text-danger">*</span></label><br>
              <input type="text" name="suppliers_code" class="form-control" required placeholder="Digite o Código" maxlength="12" value="<?= $result['suppliers_code']; ?>"><br>
            </div>

            <div class="form-group col-md-6">
              <label> CNPJ do Fornecedor: <span class="text-danger">*</span> </label><br>
              <input type="text" name="cnpj_suppliers" class="form-control cnpj-mask" required placeholder="Digite o CNPJ" value="<?= $result['cnpj_suppliers']; ?>"><br>
            </div>
            <input type="hidden" name="id_suppliers" value="<?= $result['id_suppliers']; ?>">

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salva Fornecedor</button>
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
  </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>