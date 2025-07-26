<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="form-signin">
	<form action="<?= site_url('login/submit') ?>" method="post" class="needs-validation" novalidate>
		<img class="mb-4" src="<?= base_url() ?>public/images/logo.webp">
		<h1 class="h3 mb-3 fw-normal text-center">Por favor faça o login</h1>

		<?php if ($this->session->flashdata('error')): ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('error'); ?>
			</div>
		<?php endif; ?>

		<div class="form-floating mb-3">
			<input type="email" class="form-control" id="email" name="email" required>
			<label for="email" class="form-label">Email</label>
			<div class="invalid-feedback">Informe um email válido.</div>
		</div>
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="cpf" name="cpf" required>
			<label for="cpf" class="form-label">CPF</label>
			<div class="invalid-feedback">Informe um CPF válido.</div>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Lembre de mim
			</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
	</form>
</main>
