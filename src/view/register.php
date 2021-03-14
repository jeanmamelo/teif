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
                <form method="post" class="box mx-auto" id="registerForm" action="">
                    <h1> Cadastro </h1>
                    <p> Preencha os dados abaixo </p>

                    <label hidden for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome" maxlength="60" required>

                    <label hidden for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail" maxlength="60" required>

                    <label hidden for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha" maxlength="30" required>

                    <label hidden for="passwordConfirmation">Confirmar senha</label>
                    <input type="password" name="passwordConfirmation" placeholder="Confirmar senha" maxlength="30" required>

                    <label hidden for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" placeholder="CPF" pattern="[0-9]{11}" minlength="11" maxlength="11" required>

                    <p> Já possiu uma conta? <a class="under" href="login"> Logue-se </a></p>

                    <input type="submit" name="register" value="Cadastrar" form="registerForm">
                </form>
            </div>
        </div>
    </div>
</body>

</html>