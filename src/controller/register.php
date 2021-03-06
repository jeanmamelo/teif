<?php
session_start();

include_once '../model/conexao.php';

$_SESSION['sucessoCadastro'] = true;

/**
 * Cadastro inicial/representante
 */
try {
    if (md5($_POST["password"]) !== md5($_POST["passwordConfirmation"]))
    {
        die("As senhas não correspondem, verifique-as e tente novamente"); // tratar com echo, throw exception, etc...
    }
    else
    {
        if (!($_SERVER['REQUEST_METHOD'] == 'POST' &&
            (isset($_POST["name"]) &&
                isset($_POST["email"]) &&
                isset($_POST["password"]) &&
                isset($_POST["phone"]) &&
                isset($_POST["cpf"])))
        )
        {
            die('Campos encontram-se com problemas.'); // tratar com echo, throw exception, etc...
        }
        else
        {
            $representative_name     = $_POST['name'];
            $representative_email    = $_POST['email'];
            $representative_password = md5($_POST['password']);
            $representative_cpf      = (int)$_POST['cpf'];
            $representative_phone      = (int)$_POST['phone'];

            /**
             * Afected database:
             * teif
             *
             * Afected table:
             * representante
             *
             * Afected columns:
             * cpf_representante
             * nome
             * email
             * senha
             */
            $query = 'INSERT INTO representante (cpf_representante, nome, email, senha, celular)
            VALUES (?, ?, ?, ?, ?)';

            if ($stmt = mysqli_prepare($conn, $query))
            {
                // bind parameters for markers
                mysqli_stmt_bind_param($stmt,
                    'sssss',
                    $representative_cpf,
                    $representative_name,
                    $representative_email,
                    $representative_password,
                    $representative_phone
                );

                // execute query
                if (mysqli_stmt_execute($stmt)){
                    $_SESSION['sucessoCadastro'] = true;
                } else {
                    $_SESSION['sucessoCadastro'] = false;
                }

                // close statement
                mysqli_stmt_close($stmt);

                // close connection
                $conn->close();

                header('Location: ../view/login');
                // die('cadastro realizado com sucesso'); // tratar com echo, throw exception, etc...
            } else {
                $_SESSION['sucessoCadastro'] = false;
            }
        }
    }
}
catch (Exception $e)
{
    die('DEU ERRO DE BANCO DE DADOS EM: controller/register.php, ARRUMA ISSO AE MANO'); // tratar com echo, throw exception, etc...
}