<?php

  include_once '../model/conexao.php';

  $cpf_csgo1 = $_POST['CPFCS1'];
  $cpf_csgo2 = $_POST['CPFCS2'];
  $cpf_csgo3 = $_POST['CPFCS3'];
  $cpf_csgo4 = $_POST['CPFCS4'];
  $cpf_csgo5 = $_POST['CPFCS5'];

  $nome_csgo1 = $_POST['nameCS1'];
  $nome_csgo2 = $_POST['nameCS2'];
  $nome_csgo3 = $_POST['nameCS3'];
  $nome_csgo4 = $_POST['nameCS4'];
  $nome_csgo5 = $_POST['nameCS5'];
  
  $email_csgo = $_POST['emailCS1'];
  $email_csgo = $_POST['emailCS2'];
  $email_csgo = $_POST['emailCS3'];
  $email_csgo = $_POST['emailCS4'];
  $email_csgo = $_POST['emailCS5'];

  $comprovante_matricula_csgo = $_POST['proofCS1'];
  $comprovante_matricula_csgo = $_POST['proofCS2'];
  $comprovante_matricula_csgo = $_POST['proofCS3'];
  $comprovante_matricula_csgo = $_POST['proofCS4'];
  $comprovante_matricula_csgo = $_POST['proofCS5'];
  
  $steam_link = $_POST['steam-linkCS1'];
  $steam_link = $_POST['steam-linkCS2'];
  $steam_link = $_POST['steam-linkCS3'];
  $steam_link = $_POST['steam-linkCS4'];
  $steam_link = $_POST['steam-linkCS5'];

  $ra_csgo = $_POST['raCS1'];
  $ra_csgo = $_POST['raCS2'];
  $ra_csgo = $_POST['raCS3'];
  $ra_csgo = $_POST['raCS4'];
  $ra_csgo = $_POST['raCS5'];

  //tire o TOMA NO CU
  $sql= "insert into jogador_csgo
      (cpf_csgo, nome_csgo, email_csgo, comprovante_matricula_csgo, steam_link, id_equipe, ra_csgo)
        values  (?,?,?,?,?,?,?)";
  $_tnc= 1;
    if ($stmt = mysqli_prepare($conn, $sql)) {

      /* bind parameters for markers */
      mysqli_stmt_bind_param($stmt,"sssssis", $_POST["CPFCS1"],$_POST["nameCS1"], $_POST["emailCS1"],$_POST["proofCS1"],$_POST["steam-linkCS1"],$_tnc,$_POST["raCS1"]);
  
      /* execute query */
      mysqli_stmt_execute($stmt);
     
      /* close statement */
      mysqli_stmt_close($stmt);
      header("Location: ../view/index.php");
  }

?>