<?php

include_once '../model/conexao.php';

/** 
 * Aqui se cria a maior SQL vista na historia da humanidade, testar só localmente!!
 */

/**
 * Cadastrando Equipe
 * Deve-se cadastrar a equipe primeiro para pega o id_equipe do BD, e salvar na tabela de modalidades como a FK
 */

/**
 * Cadastro equipe
 */
if (
  $_SERVER['REQUEST_METHOD'] == 'POST' &&
  isset($_POST["team-name"]) &&
  isset($_POST["team-acronym"]) &&
  isset($_POST["team-facebookLink"]) &&
  isset($_POST["college-name"]) &&
  isset($_POST["team-representative-name"]) &&
  isset($_POST["team-representative-cellPhone"]) &&
  isset($_POST["team-representative-email"])
) {

  $team_name = $_POST['team-name'];
  $team_acronym = $_POST['team-acronym'];
  $team_facebookLink = $_POST['team-facebookLink'];
  $college_name = $_POST['college-name'];

  //o ideal que representante ja esteja cadastrado no BD
  $team_representative_name = $_POST['team-representative-name'];
  $team_representative_cellPhone = $_POST['team-representative-cellPhone'];
  $team_representative_email = $_POST['team-representative-email'];
}


/**
 * Cadastro CS
 */

if (
  $_SERVER['REQUEST_METHOD'] == 'POST' &&
  isset($_POST["CPFCS1"]) &&
  isset($_POST["CPFCS2"]) &&
  isset($_POST["CPFCS3"]) &&
  isset($_POST["CPFCS4"]) &&
  isset($_POST["CPFCS5"]) &&
  isset($_POST["nameCS1"]) &&
  isset($_POST["nameCS2"]) &&
  isset($_POST["nameCS3"]) &&
  isset($_POST["nameCS4"]) &&
  isset($_POST["nameCS5"]) &&
  isset($_POST["emailCS1"]) &&
  isset($_POST["emailCS2"]) &&
  isset($_POST["emailCS3"]) &&
  isset($_POST["emailCS4"]) &&
  isset($_POST["emailCS5"]) &&
  isset($_POST["proofCS1"]) &&
  isset($_POST["proofCS2"]) &&
  isset($_POST["proofCS3"]) &&
  isset($_POST["proofCS4"]) &&
  isset($_POST["proofCS5"]) &&
  isset($_POST["steam-linkCS1"]) &&
  isset($_POST["steam-linkCS2"]) &&
  isset($_POST["steam-linkCS3"]) &&
  isset($_POST["steam-linkCS4"]) &&
  isset($_POST["steam-linkCS5"]) &&
  isset($_POST["raCS1"]) &&
  isset($_POST["raCS2"]) &&
  isset($_POST["raCS3"]) &&
  isset($_POST["raCS4"]) &&
  isset($_POST["raCS5"])
) {

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

  $sql = "insert into jogador_csgo
            (cpf_csgo, nome_csgo, email_csgo, comprovante_matricula_csgo, steam_link, id_equipe, ra_csgo)
          values  (?,?,?,?,?,?,?)";
  $id_equipe = 1;
  if ($stmt = mysqli_prepare($conn, $sql)) {

    /* bind parameters for markers */
    mysqli_stmt_bind_param(
      $stmt, 
      "sssssis", 
      $_POST["CPFCS1"], 
      $_POST["nameCS1"], 
      $_POST["emailCS1"], 
      $_POST["proofCS1"], 
      $_POST["steam-linkCS1"], 
      $id_equipe, 
      $_POST["raCS1"]
    );

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* close statement */
    mysqli_stmt_close($stmt);
    //header("Location: ../view/index.php");
  }

}


/**
 * Cadastro LOL
 */
if (
  $_SERVER['REQUEST_METHOD'] == 'POST' &&
  isset($_POST["nameLOL1"]) &&
  isset($_POST["nameLOL2"]) &&
  isset($_POST["nameLOL3"]) &&
  isset($_POST["nameLOL4"]) &&
  isset($_POST["nameLOL5"]) &&
  isset($_POST["summoner-nameLOL1"]) &&
  isset($_POST["summoner-nameLOL2"]) &&
  isset($_POST["summoner-nameLOL3"]) &&
  isset($_POST["summoner-nameLOL4"]) &&
  isset($_POST["summoner-nameLOL5"]) &&
  isset($_POST["cpfLOL1"]) &&
  isset($_POST["cpfLOL2"]) &&
  isset($_POST["cpfLOL3"]) &&
  isset($_POST["cpfLOL4"]) &&
  isset($_POST["cpfLOL5"]) &&
  isset($_POST["raLOL1"]) &&
  isset($_POST["raLOL2"]) &&
  isset($_POST["raLOL3"]) &&
  isset($_POST["raLOL4"]) &&
  isset($_POST["raLOL5"]) &&
  isset($_POST["proofLOL1"]) &&
  isset($_POST["proofLOL2"]) &&
  isset($_POST["proofLOL3"]) &&
  isset($_POST["proofLOL4"]) &&
  isset($_POST["proofLOL5"]) &&
  isset($_POST["emailLOL1"]) &&
  isset($_POST["emailLOL2"]) &&
  isset($_POST["emailLOL3"]) &&
  isset($_POST["emailLOL4"]) &&
  isset($_POST["emailLOL5"])
) {

  $nameLOL1 = $_POST['nameLOL1'];
  $nameLOL2 = $_POST['nameLOL2'];
  $nameLOL3 = $_POST['nameLOL3'];
  $nameLOL4 = $_POST['nameLOL4'];
  $nameLOL5 = $_POST['nameLOL5'];

  $summoner_nameLOL1 = $_POST['summoner-nameLOL1'];
  $summoner_nameLOL2 = $_POST['summoner-nameLOL2'];
  $summoner_nameLOL3 = $_POST['summoner-nameLOL3'];
  $summoner_nameLOL4 = $_POST['summoner-nameLOL4'];
  $summoner_nameLOL5 = $_POST['summoner-nameLOL5'];

  $cpfLOL1 = $_POST['cpfLOL1'];
  $cpfLOL2 = $_POST['cpfLOL2'];
  $cpfLOL3 = $_POST['cpfLOL3'];
  $cpfLOL4 = $_POST['cpfLOL4'];
  $cpfLOL5 = $_POST['cpfLOL5'];

  $raLOL1 = $_POST['raLOL1'];
  $raLOL2 = $_POST['raLOL2'];
  $raLOL3 = $_POST['raLOL3'];
  $raLOL4 = $_POST['raLOL4'];
  $raLOL5 = $_POST['raLOL5'];

  $proofLOL1 = $_POST['proofLOL1'];
  $proofLOL2 = $_POST['proofLOL2'];
  $proofLOL3 = $_POST['proofLOL3'];
  $proofLOL4 = $_POST['proofLOL4'];
  $proofLOL5 = $_POST['proofLOL5'];

  $emailLOL1 = $_POST['emailLOL1'];
  $emailLOL2 = $_POST['emailLOL2'];
  $emailLOL3 = $_POST['emailLOL3'];
  $emailLOL4 = $_POST['emailLOL4'];
  $emailLOL5 = $_POST['emailLOL5'];
}
/**
 * Cadastro FIFA
 */

if (
  $_SERVER['REQUEST_METHOD'] == 'POST' &&
  isset($_POST["nameFIFA1"]) &&
  isset($_POST["nameFIFA2"]) &&
  isset($_POST["nameFIFA3"]) &&
  isset($_POST["psnFIFA1"]) &&
  isset($_POST["psnFIFA2"]) &&
  isset($_POST["psnFIFA3"]) &&
  isset($_POST["cpfFIFA1"]) &&
  isset($_POST["cpfFIFA2"]) &&
  isset($_POST["cpfFIFA3"]) &&
  isset($_POST["raFIFA1"]) &&
  isset($_POST["raFIFA2"]) &&
  isset($_POST["raFIFA3"]) &&
  isset($_POST["proofFIFA1"]) &&
  isset($_POST["proofFIFA2"]) &&
  isset($_POST["proofFIFA3"]) &&
  isset($_POST["emailFIFA1"]) &&
  isset($_POST["emailFIFA2"]) &&
  isset($_POST["emailFIFA3"])
) {


  $nameFIFA1 = $_POST['nameFIFA1'];
  $nameFIFA2 = $_POST['nameFIFA2'];
  $nameFIFA3 = $_POST['nameFIFA3'];
 
  $psnFIFA1 = $_POST['psnFIFA1'];
  $psnFIFA2 = $_POST['psnFIFA2'];
  $psnFIFA3 = $_POST['psnFIFA3'];

  $cpfFIFA1 = $_POST['cpfFIFA1'];
  $cpfFIFA2 = $_POST['cpfFIFA2'];
  $cpfFIFA3 = $_POST['cpfFIFA3'];
  
  $raFIFA1 = $_POST['raFIFA1'];
  $raFIFA2 = $_POST['raFIFA2'];
  $raFIFA3 = $_POST['raFIFA3'];

  $proofFIFA1 = $_POST['proofFIFA1'];
  $proofFIFA2 = $_POST['proofFIFA2'];
  $proofFIFA3 = $_POST['proofFIFA3'];

  $emailFIFA1 = $_POST['emailFIFA1'];
  $emailFIFA2 = $_POST['emailFIFA2'];
  $emailFIFA3 = $_POST['emailFIFA3'];
}
  /**
   * Cadastro HS
   */

  if (
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST["nameHS1"]) &&
    isset($_POST["nameHS2"]) &&
    isset($_POST["nameHS3"]) &&
    isset($_POST["battle-netHS1"]) &&
    isset($_POST["battle-netHS2"]) &&
    isset($_POST["battle-netHS3"]) &&
    isset($_POST["cpfHS1"]) &&
    isset($_POST["cpfHS2"]) &&
    isset($_POST["cpfHS3"]) &&
    isset($_POST["raHS1"]) &&
    isset($_POST["raHS2"]) &&
    isset($_POST["raHS3"]) &&
    isset($_POST["proofHS1"]) &&
    isset($_POST["proofHS2"]) &&
    isset($_POST["proofHS3"]) &&
    isset($_POST["emailHS1"]) &&
    isset($_POST["emailHS2"]) &&
    isset($_POST["emailHS3"])
  ) {

    $nameHS1 = $_POST['nameHS1'];
    $nameHS2 = $_POST['nameHS2'];
    $nameHS3 = $_POST['nameHS3'];

    $battle_netHS1 = $_POST['battle-netHS1'];
    $battle_netHS2 = $_POST['battle-netHS2'];
    $battle_netHS3 = $_POST['battle-netHS3'];

    $cpfHS1 = $_POST['cpfHS1'];
    $cpfHS2 = $_POST['cpfHS2'];
    $cpfHS3 = $_POST['cpfHS3'];

    $raHS1 = $_POST['raHS1'];
    $raHS2 = $_POST['raHS2'];
    $raHS3 = $_POST['raHS3'];

    $proofHS1 = $_POST['proofHS1'];
    $proofHS2 = $_POST['proofHS2'];
    $proofHS3 = $_POST['proofHS3'];

    $emailHS1 = $_POST['emailHS1'];
    $emailHS2 = $_POST['emailHS2'];
    $emailHS3 = $_POST['emailHS3'];
  }
  /**
   * Cadastro clash
   */

  if (
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST["nameCLASH1"]) &&
    isset($_POST["nameCLASH2"]) &&
    isset($_POST["nameCLASH3"]) &&
    isset($_POST["nickCLASH1"]) &&
    isset($_POST["nickCLASH2"]) &&
    isset($_POST["nickCLASH3"]) &&
    isset($_POST["cpfCLASH1"]) &&
    isset($_POST["cpfCLASH2"]) &&
    isset($_POST["cpfCLASH3"]) &&
    isset($_POST["raCLASH1"]) &&
    isset($_POST["raCLASH2"]) &&
    isset($_POST["raCLASH3"]) &&
    isset($_POST["proofCLASH1"]) &&
    isset($_POST["proofCLASH2"]) &&
    isset($_POST["proofCLASH3"]) &&
    isset($_POST["emailCLASH1"]) &&
    isset($_POST["emailCLASH2"]) &&
    isset($_POST["emailCLASH3"])
  ) {
    $nameCLASH1 = $_POST['nameCLASH1'];
    $nameCLASH2 = $_POST['nameCLASH2'];
    $nameCLASH3 = $_POST['nameCLASH3'];

    $nickCLASH1 = $_POST['nickCLASH1'];
    $nickCLASH2 = $_POST['nickCLASH2'];
    $nickCLASH3 = $_POST['nickCLASH3'];

    $cpfCLASH1 = $_POST['cpfCLASH1'];
    $cpfCLASH2 = $_POST['cpfCLASH2'];
    $cpfCLASH3 = $_POST['cpfCLASH3'];

    $raCLASH1 = $_POST['raCLASH1'];
    $raCLASH2 = $_POST['raCLASH2'];
    $raCLASH3 = $_POST['raCLASH3'];

    $proofCLASH1 = $_POST['proofCLASH1'];
    $proofCLASH2 = $_POST['proofCLASH2'];
    $proofCLASH3 = $_POST['proofCLASH3'];

    $emailCLASH1 = $_POST['emailCLASH1'];
    $emailCLASH2 = $_POST['emailCLASH2'];
    $emailCLASH3 = $_POST['emailCLASH3'];
  }

/*

$sql = "insert into jogador_csgo
      (cpf_csgo, nome_csgo, email_csgo, comprovante_matricula_csgo, steam_link, id_equipe, ra_csgo)
        values  (?,?,?,?,?,?,?)";
$id_equipe = 1;
if ($stmt = mysqli_prepare($conn, $sql)) {

  // bind parameters for markers
  mysqli_stmt_bind_param($stmt, "sssssis", $_POST["CPFCS1"], $_POST["nameCS1"], $_POST["emailCS1"], $_POST["proofCS1"], $_POST["steam-linkCS1"], $id_equipe, $_POST["raCS1"]);

  // execute query
  mysqli_stmt_execute($stmt);

  // close statement
  mysqli_stmt_close($stmt);
  //header("Location: ../view/index.php");
}*/

?>