<?php
defined('BASEPATH') or exit('No direct script access allowed');
$segment = $this->uri->segment(1);
?>
<nav class="navbar navbar-light mb-5 p-2 justify-content-end" style="background-color: #e3f2fd;">
	<ul class="nav nav-pills justify-content-end">
		<?php if ($this->session->userdata('logged_in')): ?>
			<li class="nav-item">
				<a class="nav-link <?= ($segment == 'usuarios' ? 'active' : '') ?>" href="<?= base_url() ?>usuarios">Usuários</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= ($segment == 'logout' ? 'active' : '') ?>" href="<?= base_url() ?>login/logout">Logout</a>
			</li>
		<?php endif; ?>
	</ul>
</nav>
