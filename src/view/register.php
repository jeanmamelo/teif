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
                <form class="box mx-auto" id="registerForm">
                    <h1>Cadastro</h1>
                    <p class="text-muted">Preencha os dados abaixo</p>

                    <label hidden for="username">Usuário</label>
                    <input type="text" name="username" id="username" placeholder="Usuário">

                    <label hidden for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha">

                    <label hidden for="passwordConfirmation">Confirmar senha</label>
                    <input type="password" name="passwordConfirmation" placeholder="Confirmar senha">

                    <label hidden for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail">

                    <input type="submit" name="register" value="Cadastrar" href="#" form="registerForm">
                </form>
            </div>
        </div>
    </div>
</body>

</html>