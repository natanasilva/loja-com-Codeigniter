<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url(); ?>/index.php" class="brand-link">
    <!-- <img src="<?= base_url(); ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <img src="<?= base_url(); ?>/public/dist/img/logo-site.png" alt="Logo Sistema" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Minha Loja</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://pt.seaicons.com/wp-content/uploads/2016/09/User-icon.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"> Olá, NOMEUSUARIO </a>
        <!-- a href="#" class="d-block"> Olá, { NomeUsuário } </a> -->
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item"><a href="<?php echo base_url('/'); ?>" class="nav-link"><span class="iconify" data-icon="material-symbols:dashboard" data-width="23" data-height="23"></span>
            <p>Início</p>
          </a> </li>
        <!-- MENU DE PRODUTOS -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="iconify" data-icon="ps:cart-supermarket" data-width="23" data-height="23"></span>
            <p>
              Produtos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>/produtos/lista" class="nav-link">
                <span class="iconify" data-icon="material-symbols:format-list-bulleted" data-width="23" data-height="23"></span>
                <p>Listar Produtos</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url(); ?>/produtos/inserir" class="nav-link">
                <span class="iconify" data-icon="material-symbols:format-list-bulleted-add" data-width="23" data-height="23"></span>
                <p>Adicionar Produto</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- MENU DE FORNECEDORES -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="iconify" data-icon="mdi:store" data-width="23" data-height="23"></span>
            <p>
              Fornecedores
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>/fornecedores/lista" class="nav-link">
                <span class="iconify" data-icon="material-symbols:format-list-bulleted" data-width="23" data-height="23"></span>
                <p>Listar Fornecedores</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url(); ?>/fornecedores/inserir" class="nav-link">
                <span class="iconify" data-icon="material-symbols:format-list-bulleted-add" data-width="23" data-height="23"></span>
                <p>Adicionar Fornecedor</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- MENU DE CLIENTES -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="iconify" data-icon="mdi:user-heart" data-width="23" data-height="23"></span>
            <p>
              Clientes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>/clientes/lista" class="nav-link">
                <span class="iconify" data-icon="material-symbols:format-list-bulleted" data-width="23" data-height="23"></span>
                <p>Listar Clientes</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url(); ?>/clientes/inserir" class="nav-link">
                <span class="iconify" data-icon="material-symbols:format-list-bulleted-add" data-width="23" data-height="23"></span>
                <p>Adicionar Clientes</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item"><a href="#" class="nav-link"><span class="iconify" data-icon="bx:bx-user" data-width="26" data-height="26"></span>
            <p> Seu Perfil </p>
          </a> </li>
        <li class="nav-item"><a href="<?php echo base_url('logout'); ?>" class="nav-link"><span class="iconify" data-icon="bx:bx-power-off" data-width="26" data-height="26"></span>
            <p> Sair do Sistema </p>
          </a> </li>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>