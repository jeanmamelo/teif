<?php

include_once '../model/conexao.php';

/**
 * login/autenticação
 */
try {
    if (!($_SERVER['REQUEST_METHOD'] == 'POST' &&
        (isset($_POST["cpf"]) &&
            isset($_POST["password"])))
    )
    {
        // header('Location: logout');
        die('Campos encontram-se com problemas.'); // tratar com echo, throw exception, etc...
    }
    else
    {
        $representative_cpf      = (int)$_POST['cpf'];
        $representative_password = md5($_POST['password']);

        $query = 'SELECT cpf_representante, nome, email, celular
                  FROM representante
                  WHERE cpf_representante = ? AND senha = ?';

        if ($stmt = mysqli_prepare($conn, $query))
        {
            // bind parameters for markers
            mysqli_stmt_bind_param($stmt,
                'ss',
                $representative_cpf,
                $representative_password
            );

            // execute query
            mysqli_stmt_execute($stmt);

            // get results
            $result = mysqli_stmt_get_result($stmt);

            // fetch results
            $row = mysqli_fetch_array($result, MYSQLI_NUM);

            // inicia a sessão
            if (empty($row)) {
                die('CPF e senha divergem'); // tratar com echo, throw exception, etc...
                unset($_SESSION['login']);
            }
            else {
                $_SESSION['representative_cpf']     = $row[0];
                $_SESSION['representative_name']    = $row[1];
                $_SESSION['representative_email']   = $row[2];
                $_SESSION['representative_celular'] = $row[3];
                $_SESSION['login'] = session_id();

                header('Location: ../view/index');
            }

            // close statement
            mysqli_stmt_close($stmt);

            // close connection
            $conn->close();
        }
    }
}
catch (Exception $e)
{
    die('DEU ERRO DE BANCO DE DADOS EM: controller/login.php, ARRUMA ISSO AE MANO'); // tratar com echo, throw exception, etc...
}