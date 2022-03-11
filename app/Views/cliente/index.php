<?php

use app\Models\ClienteModel;
?>
<?= $this->extend('templates/admin_template')?>
<?= $this->section('content')?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <?php if (session()->getFlashdata('mensaje')): ?>
          <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('mensaje') ?>
          </div>
        <?php endif ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $title?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard')?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title?></li>
                </ol>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3 offset-md-9 ">
                <a href="<?= site_url('/cliente/add')?>" class="btn btn-success float-right"><i class="fas fa-plus"></i> Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista <?=$title?></h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 225px;">
                            <select name="opciones" class="form-control float-left" id="filtro">
                                <option selected value="nombre">Nombre</option>
                                <option value="dui">dui</option>
                            </select>
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>E-mail</th>
                                    <th>Dui</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($clientes): ?>
                            <?php foreach($clientes as $cliente): ?>
                                <tr>
                                    <td><?php echo $cliente['id'];?></td>
                                    <td><?php echo $cliente['nombre'];?></td>
                                    <td><?php echo $cliente['apellido'];?></td>
                                    <td><?php echo $cliente['email'];?></td>
                                    <td><?php echo $cliente['dui'];?></td>
                                    <td class="project-actions text-center"> 
                                        <a href="<?= base_url('/cliente/edit/'.$cliente['id'])?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="<?= base_url('/cliente/delete/'.$cliente['id'])?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>   
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <div class="row">
                            <div class="col-md-10">
                                <?= $pager->links('default','default_bootstrap');?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    
</script>

<?= $this->endSection()?>