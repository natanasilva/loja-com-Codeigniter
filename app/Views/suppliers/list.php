<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">fornecedores cadastrados</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Início</a></li>
                    <li class="breadcrumb-item active"> fornecedores </li>
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
                    Lista de fornecedores
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="myTable" class="table table-bordered table-striped myTable table-sm" style="font-size: 20px !important">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Nome </th>
                            <th> Código </th>
                            <th> CNPJ </th>
                            <th> Data de Cadastro </th>
                            <th> Ações </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($result as $r) : ?>
                            <tr>
                                <td width="5%" class="text-center"><?= $r['id_suppliers']; ?></td>
                                <td><?= $r['suppliers_name']; ?></td>
                                <td><?= $r['suppliers_code']; ?></td>
                                <td><?= $r['cnpj_suppliers']; ?></td>
                                <td><?= $r['suppliers_created_in']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/fornecedores/editar/<?= $r['id_suppliers']; ?>" class="btn btn-xs btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?= $r['id_suppliers']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                    <div class="modal fade" id="delete-<?= $r['id_suppliers']; ?>">
                                        <form action="<?= base_url(); ?>/fornecedores/deletar" method="POST">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Excluir Fornecedor?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="font-size: 15px !important;">
                                                        Tem certeza que deseja excluir o fornecedor <strong><?= $r['suppliers_name']; ?></strong>?<br>
                                                        A operação não poderá ser desfeita!
                                                    </div>
                                                    <input type="hidden" value="<?= $r['id_suppliers']; ?>" name="id">
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                        <button type="submit" class="btn btn-primary">Sim, continuar!</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </form>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>