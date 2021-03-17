<?php
session_start();
unset($_SESSION['representative_cpf']);
unset($_SESSION['representative_name']);
unset($_SESSION['representative_email']);
unset($_SESSION['representative_celular']);
unset($_SESSION['login']);
session_destroy();
header('Location: index');