<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<nav class="navbar navbar-light mb-5 justify-content-end" style="background-color: #e3f2fd;">
	<ul class="nav nav-pills justify-content-end">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url() ?>usuarios">Usuários</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url() ?>login">Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url() ?>logout">Logout</a>
		</li>
	</ul>
</nav>
