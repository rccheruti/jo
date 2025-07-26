<?php
defined('BASEPATH') or exit('No direct script access allowed');
$segment = $this->uri->segment(1); // Pega o primeiro segmento da URL
?>
<nav class="navbar navbar-light mb-5 p-2 justify-content-end" style="background-color: #e3f2fd;">
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link <?= ($segment == '' ? 'active' : '') ?>" aria-current="page" href="<?= base_url() ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= ($segment == 'usuarios' ? 'active' : '') ?>" href="<?= base_url() ?>usuarios">Usuários</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link <?= ($segment == 'login' ? 'active' : '') ?>" href="<?= base_url() ?>login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= ($segment == 'logout' ? 'active' : '') ?>" href="<?= base_url() ?>logout">Logout</a>
        </li> -->
    </ul>
</nav>
