<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container d-flex justify-content-center">
	<div class="row">
		<h1 class="title mb-4 text-center"><?php echo $titulo; ?></h1>
		<div class="d-grid gap-2">
			<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCadastro">Cadastrar</a>
			<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalListagem">Listar</a>
		</div>
	</div>
</div>

<?php require_once 'inc/modal_cadastro.php' ?>
<?php require_once 'inc/modal_listagem.php' ?>
