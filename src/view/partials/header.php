<!DOCTYPE html>
<html lang="pt-br">

<?php require_once 'head.php' ?>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 ">

        <a class="navbar-brand" href="../index">
            <img src="../assets/img/logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="">Home</a>
                <a class="nav-item nav-link" href="">Edições anteriores</a>
                <a class="nav-item nav-link" href="">Equipe</a>
                <a class="nav-item nav-link" href="">Sobre</a>
                <a class="nav-item nav-link" href="">Contato</a>
            </div>

            <div>
                <button onclick="location.href='login'" type="button" class="btn btn-login mx-md-3">Login</button>
                <button type="button" class="btn btn-register">Criar conta</button>
                <button type="button" class="btn btn-primary d-none">Registro</button>
            </div>
        </div>

    </nav>