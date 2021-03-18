<?php
session_start();

include_once '../model/conexao.php';

/**
 * Armazenamento de campos preenchidos em SESSION
 */
if (!empty($_POST["team-name"]) && $_POST["team-name"] !== NULL) $_SESSION["team-name"]= $_POST["team-name"];
if (!empty($_POST["team-acronym"])) $_SESSION["team-acronym"]= $_POST["team-acronym"];
if (!empty($_POST["team-facebookLink"])) $_SESSION["team-facebookLink"]= $_POST["team-facebookLink"];
if (!empty($_POST["college-name"])) $_SESSION["college-name"]= $_POST["college-name"];

if (!empty($_POST["nameCS1"])) $_SESSION["nameCS1"] = $_POST["nameCS1"];
if (!empty($_POST["steam-linkCS1"])) $_SESSION["steam-linkCS1"] = $_POST["steam-linkCS1"];
if (!empty($_POST["CPFCS1"])) $_SESSION["CPFCS1"] = $_POST["CPFCS1"];
if (!empty($_POST["raCS1"])) $_SESSION["raCS1"] = $_POST["raCS1"];
if (!empty($_POST["proofCS1"])) $_SESSION["proofCS1"] = $_POST["proofCS1"];
if (!empty($_POST["emailCS1"])) $_SESSION["emailCS1"] = $_POST["emailCS1"];

if (!empty($_POST["nameCS2"])) $_SESSION["nameCS2"] = $_POST["nameCS2"];
if (!empty($_POST["steam-linkCS2"])) $_SESSION["steam-linkCS2"] = $_POST["steam-linkCS2"];
if (!empty($_POST["CPFCS2"])) $_SESSION["CPFCS2"] = $_POST["CPFCS2"];
if (!empty($_POST["raCS2"])) $_SESSION["raCS2"] = $_POST["raCS2"];
if (!empty($_POST["proofCS2"])) $_SESSION["proofCS2"] = $_POST["proofCS2"];
if (!empty($_POST["emailCS2"])) $_SESSION["emailCS2"] = $_POST["emailCS2"];

if (!empty($_POST["nameCS3"])) $_SESSION["nameCS3"] = $_POST["nameCS3"];
if (!empty($_POST["steam-linkCS3"])) $_SESSION["steam-linkCS3"] = $_POST["steam-linkCS3"];
if (!empty($_POST["CPFCS3"])) $_SESSION["CPFCS3"] = $_POST["CPFCS3"];
if (!empty($_POST["raCS3"])) $_SESSION["raCS3"] = $_POST["raCS3"];
if (!empty($_POST["proofCS3"])) $_SESSION["proofCS3"] = $_POST["proofCS3"];
if (!empty($_POST["emailCS3"])) $_SESSION["emailCS3"] = $_POST["emailCS3"];

if (!empty($_POST["nameCS4"])) $_SESSION["nameCS4"] = $_POST["nameCS4"];
if (!empty($_POST["steam-linkCS4"])) $_SESSION["steam-linkCS4"] = $_POST["steam-linkCS4"];
if (!empty($_POST["CPFCS4"])) $_SESSION["CPFCS4"] = $_POST["CPFCS4"];
if (!empty($_POST["raCS4"])) $_SESSION["raCS4"] = $_POST["raCS4"];
if (!empty($_POST["proofCS4"])) $_SESSION["proofCS4"] = $_POST["proofCS4"];
if (!empty($_POST["emailCS4"])) $_SESSION["emailCS4"] = $_POST["emailCS4"];

if (!empty($_POST["nameCS5"])) $_SESSION["nameCS5"] = $_POST["nameCS5"];
if (!empty($_POST["steam-linkCS5"])) $_SESSION["steam-linkCS5"] = $_POST["steam-linkCS5"];
if (!empty($_POST["CPFCS5"])) $_SESSION["CPFCS5"] = $_POST["CPFCS5"];
if (!empty($_POST["raCS5"])) $_SESSION["raCS5"] = $_POST["raCS5"];
if (!empty($_POST["proofCS5"])) $_SESSION["proofCS5"] = $_POST["proofCS5"];
if (!empty($_POST["emailCS5"])) $_SESSION["emailCS5"] = $_POST["emailCS5"];

if (!empty($_POST["nameLOL1"])) $_SESSION["nameLOL1"] = $_POST["nameLOL1"];
if (!empty($_POST["summoner-nameLOL1"])) $_SESSION["summoner-nameLOL1"] = $_POST["summoner-nameLOL1"];
if (!empty($_POST["cpfLOL1"])) $_SESSION["cpfLOL1"] = $_POST["cpfLOL1"];
if (!empty($_POST["raLOL1"])) $_SESSION["raLOL1"] = $_POST["raLOL1"];
if (!empty($_POST["proofLOL1"])) $_SESSION["proofLOL1"] = $_POST["proofLOL1"];
if (!empty($_POST["emailLOL1"])) $_SESSION["emailLOL1"] = $_POST["emailLOL1"];

if (!empty($_POST["nameLOL2"])) $_SESSION["nameLOL2"] = $_POST["nameLOL2"];
if (!empty($_POST["summoner-nameLOL2"])) $_SESSION["summoner-nameLOL2"] = $_POST["summoner-nameLOL2"];
if (!empty($_POST["cpfLOL2"])) $_SESSION["cpfLOL2"] = $_POST["cpfLOL2"];
if (!empty($_POST["raLOL2"])) $_SESSION["raLOL2"] = $_POST["raLOL2"];
if (!empty($_POST["proofLOL2"])) $_SESSION["proofLOL2"] = $_POST["proofLOL2"];
if (!empty($_POST["emailLOL2"])) $_SESSION["emailLOL2"] = $_POST["emailLOL2"];

if (!empty($_POST["nameLOL3"])) $_SESSION["nameLOL3"] = $_POST["nameLOL3"];
if (!empty($_POST["summoner-nameLOL3"])) $_SESSION["summoner-nameLOL3"] = $_POST["summoner-nameLOL3"];
if (!empty($_POST["cpfLOL3"])) $_SESSION["cpfLOL3"] = $_POST["cpfLOL3"];
if (!empty($_POST["raLOL3"])) $_SESSION["raLOL3"] = $_POST["raLOL3"];
if (!empty($_POST["proofLOL3"])) $_SESSION["proofLOL3"] = $_POST["proofLOL3"];
if (!empty($_POST["emailLOL3"])) $_SESSION["emailLOL3"] = $_POST["emailLOL3"];

if (!empty($_POST["nameLOL4"])) $_SESSION["nameLOL4"] = $_POST["nameLOL4"];
if (!empty($_POST["summoner-nameLOL4"])) $_SESSION["summoner-nameLOL4"] = $_POST["summoner-nameLOL4"];
if (!empty($_POST["cpfLOL4"])) $_SESSION["cpfLOL4"] = $_POST["cpfLOL4"];
if (!empty($_POST["raLOL4"])) $_SESSION["raLOL4"] = $_POST["raLOL4"];
if (!empty($_POST["proofLOL4"])) $_SESSION["proofLOL4"] = $_POST["proofLOL4"];
if (!empty($_POST["emailLOL4"])) $_SESSION["emailLOL4"] = $_POST["emailLOL4"];

if (!empty($_POST["nameLOL5"])) $_SESSION["nameLOL5"] = $_POST["nameLOL5"];
if (!empty($_POST["summoner-nameLOL5"])) $_SESSION["summoner-nameLOL5"] = $_POST["summoner-nameLOL5"];
if (!empty($_POST["cpfLOL5"])) $_SESSION["cpfLOL5"] = $_POST["cpfLOL5"];
if (!empty($_POST["raLOL5"])) $_SESSION["raLOL5"] = $_POST["raLOL5"];
if (!empty($_POST["proofLOL5"])) $_SESSION["proofLOL5"] = $_POST["proofLOL5"];
if (!empty($_POST["emailLOL5"])) $_SESSION["emailLOL5"] = $_POST["emailLOL5"];

if (!empty($_POST["nameFIFA1"])) $_SESSION["nameFIFA1"] = $_POST["nameFIFA1"];
if (!empty($_POST["psnFIFA1"])) $_SESSION["psnFIFA1"] = $_POST["psnFIFA1"];
if (!empty($_POST["cpfFIFA1"])) $_SESSION["cpfFIFA1"] = $_POST["cpfFIFA1"];
if (!empty($_POST["raFIFA1"])) $_SESSION["raFIFA1"] = $_POST["raFIFA1"];
if (!empty($_POST["proofFIFA1"])) $_SESSION["proofFIFA1"] = $_POST["proofFIFA1"];
if (!empty($_POST["emailFIFA1"])) $_SESSION["emailFIFA1"] = $_POST["emailFIFA1"];

if (!empty($_POST["nameFIFA2"])) $_SESSION["nameFIFA2"] = $_POST["nameFIFA2"];
if (!empty($_POST["psnFIFA2"])) $_SESSION["psnFIFA2"] = $_POST["psnFIFA2"];
if (!empty($_POST["cpfFIFA2"])) $_SESSION["cpfFIFA2"] = $_POST["cpfFIFA2"];
if (!empty($_POST["raFIFA2"])) $_SESSION["raFIFA2"] = $_POST["raFIFA2"];
if (!empty($_POST["proofFIFA2"])) $_SESSION["proofFIFA2"] = $_POST["proofFIFA2"];
if (!empty($_POST["emailFIFA2"])) $_SESSION["emailFIFA2"] = $_POST["emailFIFA2"];

if (!empty($_POST["nameFIFA3"])) $_SESSION["nameFIFA3"] = $_POST["nameFIFA3"];
if (!empty($_POST["psnFIFA3"])) $_SESSION["psnFIFA3"] = $_POST["psnFIFA3"];
if (!empty($_POST["cpfFIFA3"])) $_SESSION["cpfFIFA3"] = $_POST["cpfFIFA3"];
if (!empty($_POST["raFIFA3"])) $_SESSION["raFIFA3"] = $_POST["raFIFA3"];
if (!empty($_POST["proofFIFA3"])) $_SESSION["proofFIFA3"] = $_POST["proofFIFA3"];
if (!empty($_POST["emailFIFA3"])) $_SESSION["emailFIFA3"] = $_POST["emailFIFA3"];

if (!empty($_POST["nameHS1"])) $_SESSION["nameHS1"] = $_POST["nameHS1"];
if (!empty($_POST["battle-netHS1"])) $_SESSION["battle-netHS1"] = $_POST["battle-netHS1"];
if (!empty($_POST["cpfHS1"])) $_SESSION["cpfHS1"] = $_POST["cpfHS1"];
if (!empty($_POST["raHS1"])) $_SESSION["raHS1"] = $_POST["raHS1"];
if (!empty($_POST["proofHS1"])) $_SESSION["proofHS1"] = $_POST["proofHS1"];
if (!empty($_POST["emailHS1"])) $_SESSION["emailHS1"] = $_POST["emailHS1"];

if (!empty($_POST["nameHS2"])) $_SESSION["nameHS2"] = $_POST["nameHS2"];
if (!empty($_POST["battle-netHS2"])) $_SESSION["battle-netHS2"] = $_POST["battle-netHS2"];
if (!empty($_POST["cpfHS2"])) $_SESSION["cpfHS2"] = $_POST["cpfHS2"];
if (!empty($_POST["raHS2"])) $_SESSION["raHS2"] = $_POST["raHS2"];
if (!empty($_POST["proofHS2"])) $_SESSION["proofHS2"] = $_POST["proofHS2"];
if (!empty($_POST["emailHS2"])) $_SESSION["emailHS2"] = $_POST["emailHS2"];

if (!empty($_POST["nameHS3"])) $_SESSION["nameHS3"] = $_POST["nameHS3"];
if (!empty($_POST["battle-netHS3"])) $_SESSION["battle-netHS3"] = $_POST["battle-netHS3"];
if (!empty($_POST["cpfHS3"])) $_SESSION["cpfHS3"] = $_POST["cpfHS3"];
if (!empty($_POST["raHS3"])) $_SESSION["raHS3"] = $_POST["raHS3"];
if (!empty($_POST["proofHS3"])) $_SESSION["proofHS3"] = $_POST["proofHS3"];
if (!empty($_POST["emailHS3"])) $_SESSION["emailHS3"] = $_POST["emailHS3"];

if (!empty($_POST["nameCLASH1"])) $_SESSION["nameCLASH1"] = $_POST["nameCLASH1"];
if (!empty($_POST["nickCLASH1"])) $_SESSION["nickCLASH1"] = $_POST["nickCLASH1"];
if (!empty($_POST["cpfCLASH1"])) $_SESSION["cpfCLASH1"] = $_POST["cpfCLASH1"];
if (!empty($_POST["raCLASH1"])) $_SESSION["raCLASH1"] = $_POST["raCLASH1"];
if (!empty($_POST["proofCLASH1"])) $_SESSION["proofCLASH1"] = $_POST["proofCLASH1"];
if (!empty($_POST["emailCLASH1"])) $_SESSION["emailCLASH1"] = $_POST["emailCLASH1"];

if (!empty($_POST["nameCLASH2"])) $_SESSION["nameCLASH2"] = $_POST["nameCLASH2"];
if (!empty($_POST["nickCLASH2"])) $_SESSION["nickCLASH2"] = $_POST["nickCLASH2"];
if (!empty($_POST["cpfCLASH2"])) $_SESSION["cpfCLASH2"] = $_POST["cpfCLASH2"];
if (!empty($_POST["raCLASH2"])) $_SESSION["raCLASH2"] = $_POST["raCLASH2"];
if (!empty($_POST["proofCLASH2"])) $_SESSION["proofCLASH2"] = $_POST["proofCLASH2"];
if (!empty($_POST["emailCLASH2"])) $_SESSION["emailCLASH2"] = $_POST["emailCLASH2"];

if (!empty($_POST["nameCLASH3"])) $_SESSION["nameCLASH3"] = $_POST["nameCLASH3"];
if (!empty($_POST["nickCLASH3"])) $_SESSION["nickCLASH3"] = $_POST["nickCLASH3"];
if (!empty($_POST["cpfCLASH3"])) $_SESSION["cpfCLASH3"] = $_POST["cpfCLASH3"];
if (!empty($_POST["raCLASH3"])) $_SESSION["raCLASH3"] = $_POST["raCLASH3"];
if (!empty($_POST["proofCLASH3"])) $_SESSION["proofCLASH3"] = $_POST["proofCLASH3"];
if (!empty($_POST["emailCLASH3"])) $_SESSION["emailCLASH3"] = $_POST["emailCLASH3"];

/**
 * Queries a serem executadas
 */
$query_equipe = [];
$queries_jogadores = [];

/**
 * Montagem da query de cadastro da equipe
 */
if (
  !empty($_POST["team-name"]) &&
  !empty($_POST["team-acronym"]) &&
  !empty($_POST["team-facebookLink"]) &&
  !empty($_POST["college-name"]) &&
  !empty($_SESSION['representative_cpf'])
) {

  $query_equipe = [
    "INSERT INTO equipe (nome_equipe, sigla, faculdade, facebook, fk_cpf_representante) VALUES (?, ?, ?, ?, ?)",
    "sssss",
    [$_POST["team-name"], $_POST["team-acronym"], $_POST["college-name"], $_POST["team-facebookLink"], $_SESSION['representative_cpf']]];
    
} else {
  header("Location: ../view/sign-up.php?abaErro=nav-team-tab");
}

/**
 * Query de cadastro CS
 */
if (
  !empty($_POST["CPFCS1"]) && !empty($_POST["CPFCS2"]) && !empty($_POST["CPFCS3"]) && !empty($_POST["CPFCS4"]) && !empty($_POST["CPFCS5"]) &&
  !empty($_POST["nameCS1"]) && !empty($_POST["nameCS2"]) && !empty($_POST["nameCS3"]) && !empty($_POST["nameCS4"]) && !empty($_POST["nameCS5"]) &&
  !empty($_POST["emailCS1"]) && !empty($_POST["emailCS2"]) && !empty($_POST["emailCS3"]) && !empty($_POST["emailCS4"]) && !empty($_POST["emailCS5"]) &&
  !empty($_POST["proofCS1"]) && !empty($_POST["proofCS2"]) && !empty($_POST["proofCS3"]) && !empty($_POST["proofCS4"]) && !empty($_POST["proofCS5"]) &&
  !empty($_POST["steam-linkCS1"]) && !empty($_POST["steam-linkCS2"]) && !empty($_POST["steam-linkCS3"]) && !empty($_POST["steam-linkCS4"]) && !empty($_POST["steam-linkCS5"]) &&
  !empty($_POST["raCS1"]) && !empty($_POST["raCS2"]) && !empty($_POST["raCS3"]) && !empty($_POST["raCS4"]) && !empty($_POST["raCS5"])
) {

  array_push($queries_jogadores, [
    "insert into JOGADOR_CSGO
      (cpf_csgo, nome_csgo, email_csgo, comprovante_matricula_csgo, steam_link, ra_csgo, id_equipe)
      values (?, ?, ?, ?, ?, ?, ?)",
    "ssssssi",
    [
      [$_POST["CPFCS1"], $_POST["nameCS1"], $_POST["emailCS1"], $_POST["proofCS1"], $_SESSION['steam-linkCS1'], $_SESSION['raCS1']],
      [$_POST["CPFCS2"], $_POST["nameCS2"], $_POST["emailCS2"], $_POST["proofCS2"], $_SESSION['steam-linkCS2'], $_SESSION['raCS2']],
      [$_POST["CPFCS3"], $_POST["nameCS3"], $_POST["emailCS3"], $_POST["proofCS3"], $_SESSION['steam-linkCS3'], $_SESSION['raCS3']],
      [$_POST["CPFCS4"], $_POST["nameCS4"], $_POST["emailCS4"], $_POST["proofCS4"], $_SESSION['steam-linkCS4'], $_SESSION['raCS4']],
      [$_POST["CPFCS5"], $_POST["nameCS5"], $_POST["emailCS5"], $_POST["proofCS5"], $_SESSION['steam-linkCS5'], $_SESSION['raCS5']]
    ]
  ]);
  echo "passou";

} else if (
  !empty($_POST["CPFCS1"]) || !empty($_POST["CPFCS2"]) || !empty($_POST["CPFCS3"]) || !empty($_POST["CPFCS4"]) || !empty($_POST["CPFCS5"]) ||
  !empty($_POST["nameCS1"]) || !empty($_POST["nameCS2"]) || !empty($_POST["nameCS3"]) || !empty($_POST["nameCS4"]) || !empty($_POST["nameCS5"]) ||
  !empty($_POST["emailCS1"]) || !empty($_POST["emailCS2"]) || !empty($_POST["emailCS3"]) || !empty($_POST["emailCS4"]) || !empty($_POST["emailCS5"]) ||
  !empty($_POST["proofCS1"]) || !empty($_POST["proofCS2"]) || !empty($_POST["proofCS3"]) || !empty($_POST["proofCS4"]) || !empty($_POST["proofCS5"]) ||
  !empty($_POST["steam-linkCS1"]) || !empty($_POST["steam-linkCS2"]) || !empty($_POST["steam-linkCS3"]) || !empty($_POST["steam-linkCS4"]) || !empty($_POST["steam-linkCS5"]) ||
  !empty($_POST["raCS1"]) || !empty($_POST["raCS2"]) || !empty($_POST["raCS3"]) || !empty($_POST["raCS4"]) || !empty($_POST["raCS5"])
) {
  header("Location: ../view/sign-up.php?abaErro=nav-cs-tab");
}


/**
 * Query de cadastro LOL
 */
if (
  !empty($_POST["nameLOL1"]) && !empty($_POST["nameLOL2"]) && !empty($_POST["nameLOL3"]) && !empty($_POST["nameLOL4"]) && !empty($_POST["nameLOL5"]) &&
  !empty($_POST["summoner-nameLOL1"]) && !empty($_POST["summoner-nameLOL2"]) && !empty($_POST["summoner-nameLOL3"]) && !empty($_POST["summoner-nameLOL4"]) && !empty($_POST["summoner-nameLOL5"]) &&
  !empty($_POST["cpfLOL1"]) && !empty($_POST["cpfLOL2"]) && !empty($_POST["cpfLOL3"]) && !empty($_POST["cpfLOL4"]) && !empty($_POST["cpfLOL5"]) &&
  !empty($_POST["raLOL1"]) && !empty($_POST["raLOL2"]) && !empty($_POST["raLOL3"]) && !empty($_POST["raLOL4"]) && !empty($_POST["raLOL5"]) &&
  !empty($_POST["proofLOL1"]) && !empty($_POST["proofLOL2"]) && !empty($_POST["proofLOL3"]) && !empty($_POST["proofLOL4"]) && !empty($_POST["proofLOL5"]) &&
  !empty($_POST["emailLOL1"]) && !empty($_POST["emailLOL2"]) && !empty($_POST["emailLOL3"]) && !empty($_POST["emailLOL4"]) && !empty($_POST["emailLOL5"])
) {

  array_push($queries_jogadores, [
    "insert into JOGADOR_LOL
      (cpf_lol, nome_lol, email_lol, comprovante_matricula_lol, nome_invocador, ra_lol, id_equipe)
      values (?, ?, ?, ?, ?, ?, ?)",
    "ssssssi",
    [
      [$_POST["cpfLOL1"], $_POST["nameLOL1"], $_POST["emailLOL1"], $_POST["proofLOL1"], $_SESSION['summoner-nameLOL1'], $_SESSION['raLOL1']],
      [$_POST["cpfLOL2"], $_POST["nameLOL2"], $_POST["emailLOL2"], $_POST["proofLOL2"], $_SESSION['summoner-nameLOL2'], $_SESSION['raLOL2']],
      [$_POST["cpfLOL3"], $_POST["nameLOL3"], $_POST["emailLOL3"], $_POST["proofLOL3"], $_SESSION['summoner-nameLOL3'], $_SESSION['raLOL3']],
      [$_POST["cpfLOL4"], $_POST["nameLOL4"], $_POST["emailLOL4"], $_POST["proofLOL4"], $_SESSION['summoner-nameLOL4'], $_SESSION['raLOL4']],
      [$_POST["cpfLOL5"], $_POST["nameLOL5"], $_POST["emailLOL5"], $_POST["proofLOL5"], $_SESSION['summoner-nameLOL5'], $_SESSION['raLOL5']]
    ]
  ]);

} else if (
  !empty($_POST["nameLOL1"]) || !empty($_POST["nameLOL2"]) || !empty($_POST["nameLOL3"]) || !empty($_POST["nameLOL4"]) || !empty($_POST["nameLOL5"]) ||
  !empty($_POST["summoner-nameLOL1"]) || !empty($_POST["summoner-nameLOL2"]) || !empty($_POST["summoner-nameLOL3"]) || !empty($_POST["summoner-nameLOL4"]) || !empty($_POST["summoner-nameLOL5"]) ||
  !empty($_POST["cpfLOL1"]) || !empty($_POST["cpfLOL2"]) || !empty($_POST["cpfLOL3"]) || !empty($_POST["cpfLOL4"]) || !empty($_POST["cpfLOL5"]) ||
  !empty($_POST["raLOL1"]) || !empty($_POST["raLOL2"]) || !empty($_POST["raLOL3"]) || !empty($_POST["raLOL4"]) || !empty($_POST["raLOL5"]) ||
  !empty($_POST["proofLOL1"]) || !empty($_POST["proofLOL2"]) || !empty($_POST["proofLOL3"]) || !empty($_POST["proofLOL4"]) || !empty($_POST["proofLOL5"]) ||
  !empty($_POST["emailLOL1"]) || !empty($_POST["emailLOL2"]) || !empty($_POST["emailLOL3"]) || !empty($_POST["emailLOL4"]) || !empty($_POST["emailLOL5"])
) {
  header("Location: ../view/sign-up.php?abaErro=nav-lol-tab");
}

/**
 * Query de cadastro FIFA
 */
if (
  !empty($_POST["nameFIFA1"]) && !empty($_POST["nameFIFA2"]) && !empty($_POST["nameFIFA3"]) &&
  !empty($_POST["psnFIFA1"]) && !empty($_POST["psnFIFA2"]) && !empty($_POST["psnFIFA3"]) &&
  !empty($_POST["cpfFIFA1"]) && !empty($_POST["cpfFIFA2"]) && !empty($_POST["cpfFIFA3"]) &&
  !empty($_POST["raFIFA1"]) && !empty($_POST["raFIFA2"]) && !empty($_POST["raFIFA3"]) &&
  !empty($_POST["proofFIFA1"]) && !empty($_POST["proofFIFA2"]) && !empty($_POST["proofFIFA3"]) &&
  !empty($_POST["emailFIFA1"]) && !empty($_POST["emailFIFA2"]) && !empty($_POST["emailFIFA3"])
) {

  array_push($queries_jogadores, [
    "insert into JOGADOR_FIFA
      (cpf_fifa, nome_fifa, email_fifa, comprovante_matricula_fifa, psn, ra_fifa, id_equipe)
      values (?, ?, ?, ?, ?, ?, ?)",
    "ssssssi",
    [
      [$_POST["cpfFIFA1"], $_POST["nameFIFA1"], $_POST["emailFIFA1"], $_POST["proofFIFA1"], $_SESSION['psnFIFA1'], $_SESSION['raFIFA1']],
      [$_POST["cpfFIFA2"], $_POST["nameFIFA2"], $_POST["emailFIFA2"], $_POST["proofFIFA2"], $_SESSION['psnFIFA2'], $_SESSION['raFIFA2']],
      [$_POST["cpfFIFA3"], $_POST["nameFIFA3"], $_POST["emailFIFA3"], $_POST["proofFIFA3"], $_SESSION['psnFIFA3'], $_SESSION['raFIFA3']]
    ]
  ]);

} else if (
  !empty($_POST["nameFIFA1"]) || !empty($_POST["nameFIFA2"]) || !empty($_POST["nameFIFA3"]) ||
  !empty($_POST["psnFIFA1"]) || !empty($_POST["psnFIFA2"]) || !empty($_POST["psnFIFA3"]) ||
  !empty($_POST["cpfFIFA1"]) || !empty($_POST["cpfFIFA2"]) || !empty($_POST["cpfFIFA3"]) ||
  !empty($_POST["raFIFA1"]) || !empty($_POST["raFIFA2"]) || !empty($_POST["raFIFA3"]) ||
  !empty($_POST["proofFIFA1"]) || !empty($_POST["proofFIFA2"]) || !empty($_POST["proofFIFA3"]) ||
  !empty($_POST["emailFIFA1"]) || !empty($_POST["emailFIFA2"]) || !empty($_POST["emailFIFA3"])
) {
  header("Location: ../view/sign-up.php?abaErro=nav-fifa-tab");
}

/**
 * Query de cadastro HS
 */
if (
  !empty($_POST["nameHS1"]) && !empty($_POST["nameHS2"]) && !empty($_POST["nameHS3"]) &&
  !empty($_POST["battle-netHS1"]) && !empty($_POST["battle-netHS2"]) && !empty($_POST["battle-netHS3"]) &&
  !empty($_POST["cpfHS1"]) && !empty($_POST["cpfHS2"]) && !empty($_POST["cpfHS3"]) &&
  !empty($_POST["raHS1"]) && !empty($_POST["raHS2"]) && !empty($_POST["raHS3"]) &&
  !empty($_POST["proofHS1"]) && !empty($_POST["proofHS2"]) && !empty($_POST["proofHS3"]) &&
  !empty($_POST["emailHS1"]) && !empty($_POST["emailHS2"]) && !empty($_POST["emailHS3"])
) {

  array_push($queries_jogadores, [
    "insert into JOGADOR_HS
      (cpf_hs, nome_hs, email_hs, comprovante_matricula_hs, battle_net, ra_hs, id_equipe)
      values (?, ?, ?, ?, ?, ?, ?)",
    "ssssssi",
    [
      [$_POST["cpfHS1"], $_POST["nameHS1"], $_POST["emailHS1"], $_POST["proofHS1"], $_SESSION['battle-netHS1'], $_SESSION['raHS1']],
      [$_POST["cpfHS2"], $_POST["nameHS2"], $_POST["emailHS2"], $_POST["proofHS2"], $_SESSION['battle-netHS2'], $_SESSION['raHS2']],
      [$_POST["cpfHS3"], $_POST["nameHS3"], $_POST["emailHS3"], $_POST["proofHS3"], $_SESSION['battle-netHS3'], $_SESSION['raHS3']]
    ]
  ]);

} else if (
  !empty($_POST["nameHS1"]) || !empty($_POST["nameHS2"]) || !empty($_POST["nameHS3"]) ||
  !empty($_POST["battle-netHS1"]) || !empty($_POST["battle-netHS2"]) || !empty($_POST["battle-netHS3"]) ||
  !empty($_POST["cpfHS1"]) || !empty($_POST["cpfHS2"]) || !empty($_POST["cpfHS3"]) ||
  !empty($_POST["raHS1"]) || !empty($_POST["raHS2"]) || !empty($_POST["raHS3"]) ||
  !empty($_POST["proofHS1"]) || !empty($_POST["proofHS2"]) || !empty($_POST["proofHS3"]) ||
  !empty($_POST["emailHS1"]) || !empty($_POST["emailHS2"]) || !empty($_POST["emailHS3"])
) {
  header("Location: ../view/sign-up.php?abaErro=nav-hs-tab");
}

/**
 * Query de cadastro clash
 */

if (
  !empty($_POST["nameCLASH1"]) && !empty($_POST["nameCLASH2"]) && !empty($_POST["nameCLASH3"]) &&
  !empty($_POST["nickCLASH1"]) && !empty($_POST["nickCLASH2"]) && !empty($_POST["nickCLASH3"]) &&
  !empty($_POST["cpfCLASH1"]) && !empty($_POST["cpfCLASH2"]) && !empty($_POST["cpfCLASH3"]) &&
  !empty($_POST["raCLASH1"]) && !empty($_POST["raCLASH2"]) && !empty($_POST["raCLASH3"]) &&
  !empty($_POST["proofCLASH1"]) && !empty($_POST["proofCLASH2"]) && !empty($_POST["proofCLASH3"]) &&
  !empty($_POST["emailCLASH1"]) && !empty($_POST["emailCLASH2"]) && !empty($_POST["emailCLASH3"])
) {

  array_push($queries_jogadores, [
    "insert into JOGADOR_CLASH
      (cpf_clash, nome_clash, email_clash, comprovante_matricula, nick, ra_clash, id_equipe)
      values (?, ?, ?, ?, ?, ?, ?)",
    "ssssssi",
    [
      [$_POST["cpfCLASH1"], $_POST["nameCLASH1"], $_POST["emailCLASH1"], $_POST["proofCLASH1"], $_SESSION['nickCLASH1'], $_SESSION['raCLASH1']],
      [$_POST["cpfCLASH2"], $_POST["nameCLASH2"], $_POST["emailCLASH2"], $_POST["proofCLASH2"], $_SESSION['nickCLASH2'], $_SESSION['raCLASH2']],
      [$_POST["cpfCLASH3"], $_POST["nameCLASH3"], $_POST["emailCLASH3"], $_POST["proofCLASH3"], $_SESSION['nickCLASH3'], $_SESSION['raCLASH3']]
    ]
  ]);
} else if (
  !empty($_POST["nameCLASH1"]) || !empty($_POST["nameCLASH2"]) || !empty($_POST["nameCLASH3"]) ||
  !empty($_POST["nickCLASH1"]) || !empty($_POST["nickCLASH2"]) || !empty($_POST["nickCLASH3"]) ||
  !empty($_POST["cpfCLASH1"]) || !empty($_POST["cpfCLASH2"]) || !empty($_POST["cpfCLASH3"]) ||
  !empty($_POST["raCLASH1"]) || !empty($_POST["raCLASH2"]) || !empty($_POST["raCLASH3"]) ||
  !empty($_POST["proofCLASH1"]) || !empty($_POST["proofCLASH2"]) || !empty($_POST["proofCLASH3"]) ||
  !empty($_POST["emailCLASH1"]) || !empty($_POST["emailCLASH2"]) || !empty($_POST["emailCLASH3"])
) {
  header("Location: ../view/sign-up.php?abaErro=nav-clash-tab");
}

/**
 * Inserção da equipe
 */

try {
  if ($stmt = mysqli_prepare($conn, $query_equipe[0])) {

    // bind parameters for markers
    mysqli_stmt_bind_param($stmt, $query_equipe[1], $query_equipe[2][0], $query_equipe[2][1], $query_equipe[2][2], $query_equipe[2][3], $query_equipe[2][4]);

    // execute query
    mysqli_stmt_execute($stmt);

    // close statement
    mysqli_stmt_close($stmt);

    $id_equipe = mysqli_insert_id($conn);
    echo $id_equipe;
  }

  foreach ($queries_jogadores as $query) {
    foreach ($query[2] as $valores) {
      if ($stmt = mysqli_prepare($conn, $query[0])) {

        // bind parameters for markers
        mysqli_stmt_bind_param($stmt, $query[1], $valores[0], $valores[1], $valores[2], $valores[3], $valores[4], $valores[5], $id_equipe);
    
        // execute query
        mysqli_stmt_execute($stmt);
    
        // close statement
        mysqli_stmt_close($stmt);
      }
    }
  }
  echo "Cadastro efetuado";
  header("Location: ../view/?cadastroComSucesso=true");
} catch (Exception $e) {
  echo $e;
}

?>