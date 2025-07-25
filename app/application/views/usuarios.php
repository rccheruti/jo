<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<h1 class="title mb-4"><?php echo $titulo; ?></h1>
		<div class="col-md-12 mb-4">
			<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCadastro">Adicionar Usuário</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Telefone</th>
					<th scope="col">Celular</th>
					<th scope="col">Data Nascimento</th>
					<th scope="col">Estado Civil</th>
					<th scope="col">CPF</th>
					<th scope="col">RG</th>
					<th scope="col">Data Emissão</th>
					<th scope="col">Observações</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<!-- <tbody>
				<?php foreach ($usuarios as $usuario): ?>
				<tr>
					<td><?php echo $usuario['id']; ?></td>
					<td><?php echo $usuario['nome']; ?></td>
					<td><?php echo $usuario['email']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody> -->
		</table>
	</div>
</div>

<?php require_once 'inc/modal_cadastro.php' ?>
