<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="modal modal-xl fade" id="modalListagem" aria-hidden="true" aria-labelledby="listagemModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="listagemModalLabel">Listar usuários</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php if ($usuarios) : ?>
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
							<tbody>
								<?php foreach ($usuarios as $usuario): ?>
									<tr>
										<td><?php echo $usuario['id']; ?></td>
										<td><?php echo $usuario['nome']; ?></td>
										<td><?php echo $usuario['email']; ?></td>
										<td><?php echo $usuario['telefone']; ?></td>
										<td><?php echo $usuario['celular']; ?></td>
										<td><?php echo date('d/m/Y', strtotime($usuario['data_nascimento'])); ?></td>
										<td><?php echo $usuario['estado_civil']; ?></td>
										<td><?php echo $usuario['cpf']; ?></td>
										<td><?php echo $usuario['rg']; ?></td>
										<td><?php echo date('d/m/Y', strtotime($usuario['data_emissao'])); ?></td>
										<td><?php echo $usuario['observacoes']; ?></td>
										<td>
											<button class="btn btn-warning btn-sm" onclick="editUser(<?php echo $usuario['id']; ?>)">Editar</button>
											<button class="btn btn-danger btn-sm" onclick="deleteUser(<?php echo $usuario['id']; ?>)">Excluir</button>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				<?php else: ?>
					<div class="alert alert-warning" role="alert">
						Nenhum usuário encontrado.
					</div>
				<?php endif; ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
