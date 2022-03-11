<?php

use app\Models\ClienteModel;
?>
<?= $this->extend('templates/admin_template')?>
<?= $this->section('content')?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
	<a href="/cliente" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> Regresar a la lista</a>

	<?php if (session()->getFlashdata('mensaje')): ?>
	<div class="alert alert-success" role="alert">
		<?= session()->getFlashdata('mensaje') ?>
	</div>
	<?php endif ?>

	<?php if (!empty($errores)): ?>
	<div class="alert alert-danger">
	<?php foreach ($errores as $error): ?>
		<p><?= $error ?></p>
	<?php endforeach ?>
	</div>
	<?php endif ?>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>cliente</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard')?>">Home</a></li>
                    <li class="breadcrumb-item active">cliente</li>
                </ol>
            </div>
            <div class="col-md-12 mt-3">
				<form action="/cliente/add" method="POST">
					<div class="card card-outline card-success">
						<div class="card-header">
							<h3 class="card-title">Registrar Cliente</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">

									<div class="form-group">
										<label for="">Nombres:</label>
										<input  type="text" name="nombre" id="nombres" class="form-control">
									</div>
									
									<div class="form-group">
										<label for="">DUI:</label>
										<input type="text" name="dui" id="dui" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Apellidos:</label>
										<input  type="text" name="apellido" id="apellidos" class="form-control">
									</div>
									<div class="form-group">
										<label for="email">E-mail:</label>
										<input  type="email" name="email" id="email" class="form-control">
									</div>	
													
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" id="btnGuardar" class="btn btn-success">
								Guardar
							</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
</section>
<script>
    
</script>

<?= $this->endSection()?>