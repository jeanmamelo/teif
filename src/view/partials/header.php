<!DOCTYPE html>
<html lang="pt-br">

<?php require_once 'head.php' ?>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-md-5 ">

        <a class="navbar-brand" href="../index">
            <img src="../assets/img/logo.png" alt="Logo do Torneio de Esports Institutos Federais">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../index">Home</a>
                <a class="nav-item nav-link" href="#which-is">Sobre</a>
                <a class="nav-item nav-link" href="#previous-editions">Edições anteriores</a>
                <a class="nav-item nav-link" href="#team">Equipe</a>
                <a class="nav-item nav-link" href="#contact">Contato</a>
            </div>

            <div>

                <?php if (!isset($_SESSION['login'])): ?>
                
                    <a href="login" type="button" class="btn btn-login font-weight-bold mx-md-3">Login</a>
                    <a href="register" type="button" class="btn btn-register font-weight-bold mr-md-3">Criar conta</a>

                <?php else: ?>

                    <a href="sign-up#make-your-registration" type="button" class="btn btn-register font-weight-bold">Inscreva-se</a>
                    <a href="logout" type="button" class="btn btn-login font-weight-bold mx-md-3">Lougout</a>

                <?php endif ?>

            </div>
        </div>

    </nav>