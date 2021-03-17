<?php
session_start();
require_once 'partials/head.php';
?>

<body>
    <!-- Content-->
    <div class="container d-flex flex-column justify-content-center h-100">
        <div class="row d-flex justify-content-center">
            <div class="d-flex flex-column">

                <div class="d-flex align-items-center justify-content-center mb-3">
                    <a href="../index">
                        <img src="../assets/img/logo.png" alt="Logo do Teif">
                    </a>
                </div>

                <form method="post" class="box" id="loginForm" action="../controller/login">
                    <h1> Login </h1>

                    <p> Já possiu uma conta? Logue-se </p>

                    <label hidden for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" placeholder="CPF" pattern="[0-9]{11}" minlength="11" maxlength="11" required>

                    <label hidden for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha" maxlength="30" required>

                    <p> Ainda não possui conta? <a class="under" href="register"> Cadastre-se </a></p>

                    <input type="submit" name="login" value="Login" href="#" form="loginForm">
                </form>
            </div>
        </div>
    </div>
</body>

</html>