<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="modal modal-xl fade" id="modalCadastro" aria-hidden="true" aria-labelledby="cadastroModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="cadastroModalLabel">Cadastrar usuário</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formCadastroUsuario" class="needs-validation" novalidate method="post" accept="application/x-www-form-urlencoded" action="<?php echo site_url('usuarios/add'); ?>">
					<input type="hidden" name="id" id="id">
					<div class="row">
						<div class="col-12 mb-3">
							<label for="nome" class="form-label">Nome *</label>
							<input type="text" class="form-control" id="nome" name="nome" required>
							<div class="invalid-feedback">Informe o nome.</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-3">
							<label for="email" class="form-label">Email *</label>
							<input type="email" class="form-control" id="email" name="email" required>
							<div class="invalid-feedback">Informe um e-mail válido.</div>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="telefone" class="form-label">Telefone</label>
							<input type="text" class="form-control" id="telefone" name="telefone">
						</div>

						<div class="col mb-3">
							<label for="celular" class="form-label">Celular *</label>
							<input type="text" class="form-control" id="celular" name="celular" required>
							<div class="invalid-feedback">Informe o celular com DDD.</div>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="data_nascimento" class="form-label">Data de Nascimento *</label>
							<input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
							<div class="invalid-feedback">Informe a data de nascimento.</div>
						</div>

						<div class="col mb-3">
							<label for="estado_civil" class="form-label">Estado Civil *</label>
							<select class="form-select" id="estado_civil" name="estado_civil" required>
								<option value="">Selecione</option>
								<option value="solteiro">Solteiro(a)</option>
								<option value="casado">Casado(a)</option>
								<option value="divorciado">Divorciado(a)</option>
								<option value="viuvo">Viúvo(a)</option>
							</select>
							<div class="invalid-feedback">Selecione o estado civil.</div>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="cpf" class="form-label">CPF *</label>
							<input type="text" class="form-control" id="cpf" name="cpf" required>
							<div class="invalid-feedback">Informe um CPF válido.</div>
						</div>

						<div class="col mb-3">
							<label for="rg" class="form-label">RG</label>
							<input type="text" class="form-control" id="rg" name="rg">
						</div>
						
						<div class="col mb-3">
							<label for="data_emissao" class="form-label">Data de Emissão</label>
							<input type="date" class="form-control" id="data_emissao" name="data_emissao">
						</div>
					</div>


					<div class="col mb-3">
						<label for="observacoes" class="form-label">Observações</label>
						<textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
					</div>

					<div class="d-flex justify-content-end">
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
