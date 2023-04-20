<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Clientes cadastrados</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Início</a></li>
                    <li class="breadcrumb-item active"> Clientes </li>
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
                    Lista de Clientes
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped myTable table-sm" style="font-size: 20px !important">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Tipo</th>
                            <th>Endereço</th>
                            <th>Data de Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($result as $r) : ?>
                            <tr>
                                <td><?= $r['id_client']; ?></td>
                                <td><?= $r['client_name']; ?></td>
                                <td><?= $r['client_email']; ?></td>
                                <td><?= $r['client_cpf']; ?></td>
                                <td><?= $r['client_phone']; ?></td>
                                <td><?= $r['client_type']; ?></td>
                                <td><?= $r['client_adddress']; ?></td>
                                <td><?= $r['client_created_in']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/clientes/editar/<?= $r['id_client']; ?>" class="btn btn-xs btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?= $r['id_client']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    
                                    <div class="modal fade" id="delete-<?= $r['id_client'];?>">
                                        <form action="<?=base_url();?>/clientes/deletar" method="POST">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Excluir Cliente?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="font-size: 15px !important;">
                                                        Tem certeza que deseja excluir o cliente <strong><?= $r['client_name']; ?></strong>?<br>
                                                        A operação não poderá ser desfeita!
                                                    </div>
                                                    <input type="hidden" value="<?=$r['id_client'];?>" name="id">
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