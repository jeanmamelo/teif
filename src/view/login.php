<?php
require_once 'partials/head.php';
?>

<body>
    <div class="d-flex align-items-center login-logoBar">
        <a class="mx-auto" href="../index">
            <img src="../assets/img/logo.png" alt="">
        </a>
    </div>

    <!-- Content-->
    <div class="container login-middleContainer d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 d-flex">
                <form method="post" class="box mx-auto" id="loginForm" action="">
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