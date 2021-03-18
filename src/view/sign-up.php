<?php
session_start();

if (!$_SESSION['login']) {
    header('Location: index');
}

require_once 'partials/header.php';
require_once 'partials/carousel.php';
?>

<script>
    function irParaAba(idAba) {
        // Função com jQuery para mudar de aba
        $(`#nav-tab a[id=${idAba}]`).tab('show');
    }
</script>

<?php
    if (isset($_GET["abaErro"]) && !empty($_GET["abaErro"])) {
        echo "<script>$(document).ready(() => { irParaAba('" . $_GET["abaErro"] . "') });</script>";
    }
?>

<!-- Content-->
<section class="container py-5">
    <h1 class="section-title h2 py-4" id="make-your-registration">Faça sua inscrição</h2>
        <form action="../controller/cadastro.php" method="POST">
            <div class="card bg-dark">
                <div class="card-header">
                    <nav class="p-2">
                        <div class="nav nav-pills font-weight-bold justify-content-center justify-content-lg-around" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-team-tab" data-toggle="tab" href="#nav-team" role="tab" aria-controls="nav-team" aria-selected="true">Equipe</a>
                            <a class="nav-link" id="nav-cs-tab" data-toggle="tab" href="#nav-cs" role="tab" aria-controls="nav-cs" aria-selected="false">CS GO</a>
                            <a class="nav-link" id="nav-lol-tab" data-toggle="tab" href="#nav-lol" role="tab" aria-controls="nav-lol" aria-selected="false">Lol</a>
                            <a class="nav-link" id="nav-fifa-tab" data-toggle="tab" href="#nav-fifa" role="tab" aria-controls="nav-fifa" aria-selected="false">Fifa</a>
                            <a class="nav-link" id="nav-hs-tab" data-toggle="tab" href="#nav-hs" role="tab" aria-controls="nav-hs" aria-selected="false">Hearthstone</a>
                            <a class="nav-link" id="nav-clash-tab" data-toggle="tab" href="#nav-clash" role="tab" aria-controls="nav-clash" aria-selected="false">Clash Royale</a>
                            <a class="nav-link" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="false">Pagamento</a>
                            <a class="nav-link" id="nav-regulation-tab" data-toggle="tab" href="#nav-regulation" role="tab" aria-controls="nav-regulation" aria-selected="false">Regulamento</a>
                        </div>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="tab-content py-3" id="nav-tabContent">
                        <!-- team -->
                        <div class="tab-pane fade show active" id="nav-team" role="tabpanel" aria-labelledby="nav-team-tab">
                            <div class="form-row py-2">
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" for="team-name">Nome da Equipe</label>
                                    <input type="text" class="form-control" id="team-name" name="team-name" placeholder="Digite o nome da sua equipe" value="<?php if(isset($_SESSION["team-name"])) echo $_SESSION["team-name"] ?>">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" for="team-acronym">Sigla da Equipe</label>
                                    <input type="text" class="form-control" id="team-acronym" name="team-acronym" placeholder="Digite a sigla da sua equipe" value="<?php if(isset($_SESSION["team-acronym"])) echo $_SESSION["team-acronym"] ?>">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" for="team-facebookLink">Link do facebook da equipe</label>
                                    <input type="text" class="form-control" id="team-facebookLink" name="team-facebookLink" placeholder="Insira o link do facebook" value="<?php if(isset($_SESSION["team-facebookLink"])) echo $_SESSION["team-facebookLink"] ?>">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" for="college-name">Nome da Faculdade</label>
                                    <input type="text" class="form-control" id="college-name" name="college-name" placeholder="Digite o nome da faculdade" value="<?php if(isset($_SESSION["college-name"])) echo $_SESSION["college-name"] ?>">
                                </div>
                            </div>

                            <div class="form-row py-2">
                                <div class="form-group col-lg-4">
                                    <label class="font-weight-bold" for="team-representative-name">Nome do Representante</label>
                                    <input type="text" class="form-control" id="team-representative-name" name="team-representative-name" placeholder="Chamar do BD o nome do Representante" value="<?php echo $_SESSION['representative_name'] ?>" disabled>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="font-weight-bold" for="team-representative-cellPhone">Celular do Representante</label>
                                    <input type="text" class="form-control" id="team-representative-cellPhone" name="team-representative-cellPhone" placeholder="(XX)X XXXX-XXXX" value="<?php echo $_SESSION['representative_celular'] ?>" disabled>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="font-weight-bold" for="team-representative-email">Email do Representante</label>
                                    <input type="email" class="form-control" id="team-representative-email" name="team-representative-email" placeholder="Chamar do BD o email do Representante" value="<?php echo $_SESSION['representative_email'] ?>" disabled>
                                </div>
                            </div>

                            <div class="form-row mb-n4">
                                <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-cs-tab')">Próximo</button>
                            </div>
                        </div>
                        <!-- cs -->
                        <div class="tab-pane fade" id="nav-cs" role="tabpanel" aria-labelledby="nav-cs-tab">
                            <div class="form-group">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome completo</label>
                                        <input type="text" class="form-control my-2" name="nameCS1" id="nameCS1" placeholder="Nome do jogador 1" value="<?php if(isset($_SESSION["nameCS1"])) echo $_SESSION["nameCS1"] ?>">
                                        <input type="text" class="form-control my-2" name="nameCS2" id="nameCS2" placeholder="Nome do jogador 2" value="<?php if(isset($_SESSION["nameCS2"])) echo $_SESSION["nameCS2"] ?>">
                                        <input type="text" class="form-control my-2" name="nameCS3" id="nameCS3" placeholder="Nome do jogador 3" value="<?php if(isset($_SESSION["nameCS3"])) echo $_SESSION["nameCS3"] ?>">
                                        <input type="text" class="form-control my-2" name="nameCS4" id="nameCS4" placeholder="Nome do jogador 4" value="<?php if(isset($_SESSION["nameCS4"])) echo $_SESSION["nameCS4"] ?>">
                                        <input type="text" class="form-control my-2" name="nameCS5" id="nameCS5" placeholder="Nome do jogador 5" value="<?php if(isset($_SESSION["nameCS5"])) echo $_SESSION["nameCS5"] ?>">
                                    </div>
                                    
                                    <!-- steam-link -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link da Steam</label>
                                        <input type="text" class="form-control my-2" name="steam-linkCS1" id="steam-linkCS1" placeholder="Steam jogador 1" value="<?php if(isset($_SESSION["steam-linkCS1"])) echo $_SESSION["steam-linkCS1"] ?>">
                                        <input type="text" class="form-control my-2" name="steam-linkCS2" id="steam-linkCS2" placeholder="Steam jogador 2" value="<?php if(isset($_SESSION["steam-linkCS2"])) echo $_SESSION["steam-linkCS2"] ?>">
                                        <input type="text" class="form-control my-2" name="steam-linkCS3" id="steam-linkCS3" placeholder="Steam jogador 3" value="<?php if(isset($_SESSION["steam-linkCS3"])) echo $_SESSION["steam-linkCS3"] ?>">
                                        <input type="text" class="form-control my-2" name="steam-linkCS4" id="steam-linkCS4" placeholder="Steam jogador 4" value="<?php if(isset($_SESSION["steam-linkCS4"])) echo $_SESSION["steam-linkCS4"] ?>">
                                        <input type="text" class="form-control my-2" name="steam-linkCS5" id="steam-linkCS5" placeholder="Steam jogador 5" value="<?php if(isset($_SESSION["steam-linkCS5"])) echo $_SESSION["steam-linkCS5"] ?>">
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="CPFCS1" id="CPFCS1" placeholder="CPF jogador 1" value="<?php if(isset($_SESSION["CPFCS1"])) echo $_SESSION["CPFCS1"] ?>">
                                        <input type="text" class="form-control my-2" name="CPFCS2" id="CPFCS2" placeholder="CPF jogador 2" value="<?php if(isset($_SESSION["CPFCS2"])) echo $_SESSION["CPFCS2"] ?>">
                                        <input type="text" class="form-control my-2" name="CPFCS3" id="CPFCS3" placeholder="CPF jogador 3" value="<?php if(isset($_SESSION["CPFCS3"])) echo $_SESSION["CPFCS3"] ?>">
                                        <input type="text" class="form-control my-2" name="CPFCS4" id="CPFCS4" placeholder="CPF jogador 4" value="<?php if(isset($_SESSION["CPFCS4"])) echo $_SESSION["CPFCS4"] ?>">
                                        <input type="text" class="form-control my-2" name="CPFCS5" id="CPFCS5" placeholder="CPF jogador 5" value="<?php if(isset($_SESSION["CPFCS5"])) echo $_SESSION["CPFCS5"] ?>">
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raCS1" id="raCS1" placeholder="RA jogador 1" value="<?php if(isset($_SESSION["raCS1"])) echo $_SESSION["raCS1"] ?>">
                                        <input type="text" class="form-control my-2" name="raCS2" id="raCS2" placeholder="RA jogador 2" value="<?php if(isset($_SESSION["raCS2"])) echo $_SESSION["raCS2"] ?>">
                                        <input type="text" class="form-control my-2" name="raCS3" id="raCS3" placeholder="RA jogador 3" value="<?php if(isset($_SESSION["raCS3"])) echo $_SESSION["raCS3"] ?>">
                                        <input type="text" class="form-control my-2" name="raCS4" id="raCS4" placeholder="RA jogador 4" value="<?php if(isset($_SESSION["raCS4"])) echo $_SESSION["raCS4"] ?>">
                                        <input type="text" class="form-control my-2" name="raCS5" id="raCS5" placeholder="RA jogador 5" value="<?php if(isset($_SESSION["raCS5"])) echo $_SESSION["raCS5"] ?>">
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofCS1" id="proofCS1" placeholder="Comprovante jogador 1" value="<?php if(isset($_SESSION["proofCS1"])) echo $_SESSION["proofCS1"] ?>">
                                        <input type="text" class="form-control my-2" name="proofCS2" id="proofCS2" placeholder="Comprovante jogador 2" value="<?php if(isset($_SESSION["proofCS2"])) echo $_SESSION["proofCS2"] ?>">
                                        <input type="text" class="form-control my-2" name="proofCS3" id="proofCS3" placeholder="Comprovante jogador 3" value="<?php if(isset($_SESSION["proofCS3"])) echo $_SESSION["proofCS3"] ?>">
                                        <input type="text" class="form-control my-2" name="proofCS4" id="proofCS4" placeholder="Comprovante jogador 4" value="<?php if(isset($_SESSION["proofCS4"])) echo $_SESSION["proofCS4"] ?>">
                                        <input type="text" class="form-control my-2" name="proofCS5" id="proofCS5" placeholder="Comprovante jogador 5" value="<?php if(isset($_SESSION["proofCS5"])) echo $_SESSION["proofCS5"] ?>">
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailCS1" id="emailCS1" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCS1"])) echo $_SESSION["emailCS1"] ?>">
                                        <input type="email" class="form-control my-2" name="emailCS2" id="emailCS2" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCS2"])) echo $_SESSION["emailCS2"] ?>">
                                        <input type="email" class="form-control my-2" name="emailCS3" id="emailCS3" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCS3"])) echo $_SESSION["emailCS3"] ?>">
                                        <input type="email" class="form-control my-2" name="emailCS4" id="emailCS4" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCS4"])) echo $_SESSION["emailCS4"] ?>">
                                        <input type="email" class="form-control my-2" name="emailCS5" id="emailCS5" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCS5"])) echo $_SESSION["emailCS5"] ?>">
                                    </div>
                                </div>

                                <div class="form-row mb-n4">
                                    <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-lol-tab')">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- lol -->
                        <div class="tab-pane fade" id="nav-lol" role="tabpanel" aria-labelledby="nav-lol-tab">
                            <div class="form-group">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome completo</label>
                                        <input type="text" class="form-control my-2" name="nameLOL1" id="nameLOL1" placeholder="Nome do jogador 1" value="<?php if(isset($_SESSION["nameLOL1"])) echo $_SESSION["nameLOL1"] ?>">
                                        <input type="text" class="form-control my-2" name="nameLOL2" id="nameLOL2" placeholder="Nome do jogador 2" value="<?php if(isset($_SESSION["nameLOL2"])) echo $_SESSION["nameLOL2"] ?>">
                                        <input type="text" class="form-control my-2" name="nameLOL3" id="nameLOL3" placeholder="Nome do jogador 3" value="<?php if(isset($_SESSION["nameLOL3"])) echo $_SESSION["nameLOL3"] ?>">
                                        <input type="text" class="form-control my-2" name="nameLOL4" id="nameLOL4" placeholder="Nome do jogador 4" value="<?php if(isset($_SESSION["nameLOL4"])) echo $_SESSION["nameLOL4"] ?>">
                                        <input type="text" class="form-control my-2" name="nameLOL5" id="nameLOL5" placeholder="Nome do jogador 5" value="<?php if(isset($_SESSION["nameLOL5"])) echo $_SESSION["nameLOL5"] ?>">
                                    </div>
                                    <!-- summoner-name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome do invocador</label>
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL1" id="summoner-nameLOL1" placeholder="Nome do invocador jogador 1" value="<?php if(isset($_SESSION["summoner-nameLOL1"])) echo $_SESSION["summoner-nameLOL1"] ?>">
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL2" id="summoner-nameLOL2" placeholder="Nome do invocador jogador 2" value="<?php if(isset($_SESSION["summoner-nameLOL2"])) echo $_SESSION["summoner-nameLOL2"] ?>">
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL3" id="summoner-nameLOL3" placeholder="Nome do invocador jogador 3" value="<?php if(isset($_SESSION["summoner-nameLOL3"])) echo $_SESSION["summoner-nameLOL3"] ?>">
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL4" id="summoner-nameLOL4" placeholder="Nome do invocador jogador 4" value="<?php if(isset($_SESSION["summoner-nameLOL4"])) echo $_SESSION["summoner-nameLOL4"] ?>">
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL5" id="summoner-nameLOL5" placeholder="Nome do invocador jogador 5" value="<?php if(isset($_SESSION["summoner-nameLOL5"])) echo $_SESSION["summoner-nameLOL5"] ?>">
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfLOL1" id="cpfLOL1" placeholder="CPF jogador 1" value="<?php if(isset($_SESSION["cpfLOL1"])) echo $_SESSION["cpfLOL1"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfLOL2" id="cpfLOL2" placeholder="CPF jogador 2" value="<?php if(isset($_SESSION["cpfLOL2"])) echo $_SESSION["cpfLOL2"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfLOL3" id="cpfLOL3" placeholder="CPF jogador 3" value="<?php if(isset($_SESSION["cpfLOL3"])) echo $_SESSION["cpfLOL3"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfLOL4" id="cpfLOL4" placeholder="CPF jogador 4" value="<?php if(isset($_SESSION["cpfLOL4"])) echo $_SESSION["cpfLOL4"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfLOL5" id="cpfLOL5" placeholder="CPF jogador 5" value="<?php if(isset($_SESSION["cpfLOL5"])) echo $_SESSION["cpfLOL5"] ?>">
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raLOL1" id="raLOL1" placeholder="RA jogador 1" value="<?php if(isset($_SESSION["raLOL1"])) echo $_SESSION["raLOL1"] ?>">
                                        <input type="text" class="form-control my-2" name="raLOL2" id="raLOL2" placeholder="RA jogador 2" value="<?php if(isset($_SESSION["raLOL2"])) echo $_SESSION["raLOL2"] ?>">
                                        <input type="text" class="form-control my-2" name="raLOL3" id="raLOL3" placeholder="RA jogador 3" value="<?php if(isset($_SESSION["raLOL3"])) echo $_SESSION["raLOL3"] ?>">
                                        <input type="text" class="form-control my-2" name="raLOL4" id="raLOL4" placeholder="RA jogador 4" value="<?php if(isset($_SESSION["raLOL4"])) echo $_SESSION["raLOL4"] ?>">
                                        <input type="text" class="form-control my-2" name="raLOL5" id="raLOL5" placeholder="RA jogador 5" value="<?php if(isset($_SESSION["raLOL5"])) echo $_SESSION["raLOL5"] ?>">
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofLOL1" id="proofLOL1" placeholder="Comprovante jogador 1" value="<?php if(isset($_SESSION["proofLOL1"])) echo $_SESSION["proofLOL1"] ?>">
                                        <input type="text" class="form-control my-2" name="proofLOL2" id="proofLOL2" placeholder="Comprovante jogador 2" value="<?php if(isset($_SESSION["proofLOL2"])) echo $_SESSION["proofLOL2"] ?>">
                                        <input type="text" class="form-control my-2" name="proofLOL3" id="proofLOL3" placeholder="Comprovante jogador 3" value="<?php if(isset($_SESSION["proofLOL3"])) echo $_SESSION["proofLOL3"] ?>">
                                        <input type="text" class="form-control my-2" name="proofLOL4" id="proofLOL4" placeholder="Comprovante jogador 4" value="<?php if(isset($_SESSION["proofLOL4"])) echo $_SESSION["proofLOL4"] ?>">
                                        <input type="text" class="form-control my-2" name="proofLOL5" id="proofLOL5" placeholder="Comprovante jogador 5" value="<?php if(isset($_SESSION["proofLOL5"])) echo $_SESSION["proofLOL5"] ?>">
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailLOL1" id="emailLOL1" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailLOL1"])) echo $_SESSION["emailLOL1"] ?>">
                                        <input type="email" class="form-control my-2" name="emailLOL2" id="emailLOL2" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailLOL2"])) echo $_SESSION["emailLOL2"] ?>">
                                        <input type="email" class="form-control my-2" name="emailLOL3" id="emailLOL3" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailLOL3"])) echo $_SESSION["emailLOL3"] ?>">
                                        <input type="email" class="form-control my-2" name="emailLOL4" id="emailLOL4" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailLOL4"])) echo $_SESSION["emailLOL4"] ?>">
                                        <input type="email" class="form-control my-2" name="emailLOL5" id="emailLOL5" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailLOL5"])) echo $_SESSION["emailLOL5"] ?>">
                                    </div>
                                </div>

                                <div class="form-row mb-n4">
                                    <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-fifa-tab')">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- fifa -->
                        <div class="tab-pane fade" id="nav-fifa" role="tabpanel" aria-labelledby="nav-fifa-tab">
                            <div class="form-group">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome completo</label>
                                        <input type="text" class="form-control my-2" name="nameFIFA1" id="nameFIFA1" placeholder="Nome do jogador 1" value="<?php if(isset($_SESSION["nameFIFA1"])) echo $_SESSION["nameFIFA1"] ?>">
                                        <input type="text" class="form-control my-2" name="nameFIFA2" id="nameFIFA2" placeholder="Nome do jogador 2" value="<?php if(isset($_SESSION["nameFIFA2"])) echo $_SESSION["nameFIFA2"] ?>">
                                        <input type="text" class="form-control my-2" name="nameFIFA3" id="nameFIFA3" placeholder="Nome do jogador 3" value="<?php if(isset($_SESSION["nameFIFA3"])) echo $_SESSION["nameFIFA3"] ?>">
                                    </div>
                                    <!-- psn -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">PlayStation Network (PSN)</label>
                                        <input type="text" class="form-control my-2" name="psnFIFA1" id="psnFIFA1" placeholder="PSN jogador 1" value="<?php if(isset($_SESSION["psnFIFA1"])) echo $_SESSION["psnFIFA1"] ?>">
                                        <input type="text" class="form-control my-2" name="psnFIFA2" id="psnFIFA2" placeholder="PSN jogador 2" value="<?php if(isset($_SESSION["psnFIFA2"])) echo $_SESSION["psnFIFA2"] ?>">
                                        <input type="text" class="form-control my-2" name="psnFIFA3" id="psnFIFA3" placeholder="PSN jogador 3" value="<?php if(isset($_SESSION["psnFIFA3"])) echo $_SESSION["psnFIFA3"] ?>">
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfFIFA1" id="cpfFIFA1" placeholder="CPF jogador 1" value="<?php if(isset($_SESSION["cpfFIFA1"])) echo $_SESSION["cpfFIFA1"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfFIFA2" id="cpfFIFA2" placeholder="CPF jogador 2" value="<?php if(isset($_SESSION["cpfFIFA2"])) echo $_SESSION["cpfFIFA2"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfFIFA3" id="cpfFIFA3" placeholder="CPF jogador 3" value="<?php if(isset($_SESSION["cpfFIFA3"])) echo $_SESSION["cpfFIFA3"] ?>">
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raFIFA1" id="raFIFA1" placeholder="RA jogador 1" value="<?php if(isset($_SESSION["raFIFA1"])) echo $_SESSION["raFIFA1"] ?>">
                                        <input type="text" class="form-control my-2" name="raFIFA2" id="raFIFA2" placeholder="RA jogador 2" value="<?php if(isset($_SESSION["raFIFA2"])) echo $_SESSION["raFIFA2"] ?>">
                                        <input type="text" class="form-control my-2" name="raFIFA3" id="raFIFA3" placeholder="RA jogador 3" value="<?php if(isset($_SESSION["raFIFA3"])) echo $_SESSION["raFIFA3"] ?>">
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofFIFA1" id="proofFIFA1" placeholder="Comprovante jogador 1" value="<?php if(isset($_SESSION["proofFIFA1"])) echo $_SESSION["proofFIFA1"] ?>">
                                        <input type="text" class="form-control my-2" name="proofFIFA2" id="proofFIFA2" placeholder="Comprovante jogador 2" value="<?php if(isset($_SESSION["proofFIFA2"])) echo $_SESSION["proofFIFA2"] ?>">
                                        <input type="text" class="form-control my-2" name="proofFIFA3" id="proofFIFA3" placeholder="Comprovante jogador 3" value="<?php if(isset($_SESSION["proofFIFA3"])) echo $_SESSION["proofFIFA3"] ?>">
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailFIFA1" id="emailFIFA1" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailFIFA1"])) echo $_SESSION["emailFIFA1"] ?>">
                                        <input type="email" class="form-control my-2" name="emailFIFA2" id="emailFIFA2" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailFIFA2"])) echo $_SESSION["emailFIFA2"] ?>">
                                        <input type="email" class="form-control my-2" name="emailFIFA3" id="emailFIFA3" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailFIFA3"])) echo $_SESSION["emailFIFA3"] ?>">
                                    </div>
                                </div>

                                <div class="form-row mb-n4">
                                    <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-hs-tab')">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- hs -->
                        <div class="tab-pane fade" id="nav-hs" role="tabpanel" aria-labelledby="nav-hs-tab">
                            <div class="form-group">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome completo</label>
                                        <input type="text" class="form-control my-2" name="nameHS1" id="nameHS1" placeholder="Nome do jogador 1" value="<?php if(isset($_SESSION["nameHS1"])) echo $_SESSION["nameHS1"] ?>">
                                        <input type="text" class="form-control my-2" name="nameHS2" id="nameHS2" placeholder="Nome do jogador 2" value="<?php if(isset($_SESSION["nameHS2"])) echo $_SESSION["nameHS2"] ?>">
                                        <input type="text" class="form-control my-2" name="nameHS3" id="nameHS3" placeholder="Nome do jogador 3" value="<?php if(isset($_SESSION["nameHS3"])) echo $_SESSION["nameHS3"] ?>">
                                    </div>
                                    <!-- battle-net -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Battle.net</label>
                                        <input type="text" class="form-control my-2" name="battle-netHS1" id="battle-netHS1" placeholder="Battle.net jogador 1" value="<?php if(isset($_SESSION["battle-netHS1"])) echo $_SESSION["battle-netHS1"] ?>">
                                        <input type="text" class="form-control my-2" name="battle-netHS2" id="battle-netHS2" placeholder="Battle.net jogador 2" value="<?php if(isset($_SESSION["battle-netHS2"])) echo $_SESSION["battle-netHS2"] ?>">
                                        <input type="text" class="form-control my-2" name="battle-netHS3" id="battle-netHS3" placeholder="Battle.net jogador 3" value="<?php if(isset($_SESSION["battle-netHS3"])) echo $_SESSION["battle-netHS3"] ?>">
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfHS1" id="cpfHS1" placeholder="CPF jogador 1" value="<?php if(isset($_SESSION["cpfHS1"])) echo $_SESSION["cpfHS1"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfHS2" id="cpfHS2" placeholder="CPF jogador 2" value="<?php if(isset($_SESSION["cpfHS2"])) echo $_SESSION["cpfHS2"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfHS3" id="cpfHS3" placeholder="CPF jogador 3" value="<?php if(isset($_SESSION["cpfHS3"])) echo $_SESSION["cpfHS3"] ?>">
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raHS1" id="raHS1" placeholder="RA jogador 1" value="<?php if(isset($_SESSION["raHS1"])) echo $_SESSION["raHS1"] ?>">
                                        <input type="text" class="form-control my-2" name="raHS2" id="raHS2" placeholder="RA jogador 2" value="<?php if(isset($_SESSION["raHS2"])) echo $_SESSION["raHS2"] ?>">
                                        <input type="text" class="form-control my-2" name="raHS3" id="raHS3" placeholder="RA jogador 3" value="<?php if(isset($_SESSION["raHS3"])) echo $_SESSION["raHS3"] ?>">
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofHS1" id="proofHS1" placeholder="Comprovante jogador 1" value="<?php if(isset($_SESSION["proofHS1"])) echo $_SESSION["proofHS1"] ?>">
                                        <input type="text" class="form-control my-2" name="proofHS2" id="proofHS2" placeholder="Comprovante jogador 2" value="<?php if(isset($_SESSION["proofHS2"])) echo $_SESSION["proofHS2"] ?>">
                                        <input type="text" class="form-control my-2" name="proofHS3" id="proofHS3" placeholder="Comprovante jogador 3" value="<?php if(isset($_SESSION["proofHS3"])) echo $_SESSION["proofHS3"] ?>">
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailHS1" id="emailHS1" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailHS1"])) echo $_SESSION["emailHS1"] ?>">
                                        <input type="email" class="form-control my-2" name="emailHS2" id="emailHS2" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailHS2"])) echo $_SESSION["emailHS2"] ?>">
                                        <input type="email" class="form-control my-2" name="emailHS3" id="emailHS3" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailHS3"])) echo $_SESSION["emailHS3"] ?>">
                                    </div>
                                </div>

                                <div class="form-row mb-n4">
                                    <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-clash-tab')">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- clash -->
                        <div class="tab-pane fade" id="nav-clash" role="tabpanel" aria-labelledby="nav-clash-tab">
                            <div class="form-group">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome completo</label>
                                        <input type="text" class="form-control my-2" name="nameCLASH1" id="nameCLASH1" placeholder="Nome do jogador 1" value="<?php if(isset($_SESSION["nameCLASH1"])) echo $_SESSION["nameCLASH1"] ?>">
                                        <input type="text" class="form-control my-2" name="nameCLASH2" id="nameCLASH2" placeholder="Nome do jogador 2" value="<?php if(isset($_SESSION["nameCLASH2"])) echo $_SESSION["nameCLASH2"] ?>">
                                        <input type="text" class="form-control my-2" name="nameCLASH3" id="nameCLASH3" placeholder="Nome do jogador 3" value="<?php if(isset($_SESSION["nameCLASH3"])) echo $_SESSION["nameCLASH3"] ?>">
                                    </div>
                                    <!-- nick -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nick</label>
                                        <input type="text" class="form-control my-2" name="nickCLASH1" id="nickCLASH1" placeholder="Nick jogador 1" value="<?php if(isset($_SESSION["nickCLASH1"])) echo $_SESSION["nickCLASH1"] ?>">
                                        <input type="text" class="form-control my-2" name="nickCLASH2" id="nickCLASH2" placeholder="Nick jogador 2" value="<?php if(isset($_SESSION["nickCLASH2"])) echo $_SESSION["nickCLASH2"] ?>">
                                        <input type="text" class="form-control my-2" name="nickCLASH3" id="nickCLASH3" placeholder="Nick jogador 3" value="<?php if(isset($_SESSION["nickCLASH3"])) echo $_SESSION["nickCLASH3"] ?>">
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfCLASH1" id="cpfCLASH1" placeholder="CPF jogador 1" value="<?php if(isset($_SESSION["cpfCLASH1"])) echo $_SESSION["cpfCLASH1"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfCLASH2" id="cpfCLASH2" placeholder="CPF jogador 2" value="<?php if(isset($_SESSION["cpfCLASH2"])) echo $_SESSION["cpfCLASH2"] ?>">
                                        <input type="text" class="form-control my-2" name="cpfCLASH3" id="cpfCLASH3" placeholder="CPF jogador 3" value="<?php if(isset($_SESSION["cpfCLASH3"])) echo $_SESSION["cpfCLASH3"] ?>">
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raCLASH1" id="raCLASH1" placeholder="RA jogador 1" value="<?php if(isset($_SESSION["raCLASH1"])) echo $_SESSION["raCLASH1"] ?>">
                                        <input type="text" class="form-control my-2" name="raCLASH2" id="raCLASH2" placeholder="RA jogador 2" value="<?php if(isset($_SESSION["raCLASH2"])) echo $_SESSION["raCLASH2"] ?>">
                                        <input type="text" class="form-control my-2" name="raCLASH3" id="raCLASH3" placeholder="RA jogador 3" value="<?php if(isset($_SESSION["raCLASH3"])) echo $_SESSION["raCLASH3"] ?>">
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofCLASH1" id="proofCLASH1" placeholder="Comprovante jogador 1" value="<?php if(isset($_SESSION["proofCLASH1"])) echo $_SESSION["proofCLASH1"] ?>">
                                        <input type="text" class="form-control my-2" name="proofCLASH2" id="proofCLASH2" placeholder="Comprovante jogador 2" value="<?php if(isset($_SESSION["proofCLASH2"])) echo $_SESSION["proofCLASH2"] ?>">
                                        <input type="text" class="form-control my-2" name="proofCLASH3" id="proofCLASH3" placeholder="Comprovante jogador 3" value="<?php if(isset($_SESSION["proofCLASH3"])) echo $_SESSION["proofCLASH3"] ?>">
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailCLASH1" id="emailCLASH1" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCLASH1"])) echo $_SESSION["emailCLASH1"] ?>">
                                        <input type="email" class="form-control my-2" name="emailCLASH2" id="emailCLASH2" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCLASH2"])) echo $_SESSION["emailCLASH2"] ?>">
                                        <input type="email" class="form-control my-2" name="emailCLASH3" id="emailCLASH3" placeholder="nome@dominio.com" value="<?php if(isset($_SESSION["emailCLASH3"])) echo $_SESSION["emailCLASH3"] ?>">
                                    </div>
                                </div>

                                <div class="form-row mb-n4">
                                    <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-payment-tab')">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- payment -->
                        <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
                            <div class="form-row">
                                <div class="col-lg-4">
                                    <h2 class="h4 font-weight-bold text-center text-md-left">Valores por modalidade</h2>
                                    <figure class="py-2 d-flex justify-content-center justify-content-md-start">
                                        <img class="img-fluid" src="../assets/img/team-value.png" style="width: 300px;" alt="Valor por equipe igual a 50 reais - CS e LOL">
                                    </figure>
                                    <figure class="py-2 d-flex justify-content-center justify-content-md-start">
                                        <img class="img-fluid" src="../assets/img/value-per-player.png" style="width: 300px;" alt="Valor por jogador igual a 10 reais - FIFA, Clash Royale e Hearthstone">
                                    </figure>

                                </div>
                                <div class="col-lg-8">
                                    <h2 class="h4 font-weight-bold text-center text-md-left">Métodos de transferência</h2>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h3 class="h5 primary-color font-weight-bold">Transferência bancária</h3>
                                            <ul>
                                                <li><strong>Banco:</strong> Nubank (260)</li>
                                                <li><strong>Agência:</strong> 0001</li>
                                                <li><strong>Conta:</strong> 432243106-8</li>
                                                <li><strong>Títular:</strong> Eduardo Fiorito Junior</li>
                                                <li><strong>CPF:</strong> 000.000.000-00</li>
                                            </ul>
                                            <ul class="pt-2">
                                                <li><strong>Banco:</strong> Caixa (104)</li>
                                                <li><strong>Agência:</strong> 0520</li>
                                                <li><strong>Conta:</strong> 15645458-2</li>
                                                <li><strong>Títular:</strong> Eduardo Fiorito Junior</li>
                                                <li><strong>CPF:</strong> 000.000.000-00</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-8">
                                            <h3 class="h5 primary-color font-weight-bold">Pix</h3>
                                            <ul class="pt-2">
                                                <li><strong>Chave:</strong> 296f2920-2020-35b0-8ad1-b50f3d277eej</li>
                                                <li><strong>Cpf:</strong> 000.000.000-00</li>
                                            </ul>
                                            <h3 class="h5 primary-color font-weight-bold pt-2">PicPay</h3>
                                            <ul class="pt-2">
                                                <li>Envie nesse <a class="primary-color" href="https://app.picpay.com/user/efiorito" rel="noreferrer">link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mb-n4">
                                <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-regulation-tab')">Próximo</button>
                            </div>
                        </div>
                        <!-- regulation -->
                        <div class="tab-pane fade" id="nav-regulation" role="tabpanel" aria-labelledby="nav-regulation-tab">
                            <div class="row d-flex justify-content-around">
                                <a class="regulation-link py-3 mx-2" href="https://drive.google.com/file/d/1Grvqc_g2esP2KNsob9rtx6Wg63zI8PCI/view" rel="noreferrer" target="_blank">
                                    <img src="../assets/img/cs-regulation.png" alt="Regulamento CS GO" style="width: 300px;">
                                </a>
                                <a class="regulation-link py-3 mx-2" href="https://drive.google.com/file/d/19-oe3F0OWqyPeMSSEXfmFXJxmYsAKTWT/view" rel="noreferrer" target="_blank">
                                    <img src="../assets/img/fifa-regulation.png" alt="Regulamento FIFA" style="width: 300px;">
                                </a>
                                <a class="regulation-link py-3 mx-2" href="https://drive.google.com/file/d/1-i1RxwTm4M8dfvWl5iIryVd84HdyIatV/view" rel="noreferrer" target="_blank">
                                    <img src="../assets/img/lol-regulation.png" alt="Regulamento LOL" style="width: 300px;">
                                </a>
                            </div>

                            <div class="form-row mb-n4 px-4">
                                <!-- <button type="button" class="btn btn-section btn-block my-3" onClick="irParaAba('nav-lol-tab')">Próximo</button> -->
                                <button type="submit" class="btn btn-section btn-block my-3">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
</section>

<?php require_once 'partials/footer.php'; ?>

</html>