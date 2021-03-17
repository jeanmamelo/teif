<?php
session_start();
if ($_SESSION['login'] !== session_id())
{
    unset($_SESSION['login']);
    header('Location: index');
}

require_once 'partials/header.php';
require_once 'partials/carousel.php';
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
                                    <label class="font-weight-bold" name="team-name" for="team-name">Nome da Equipe</label>
                                    <input type="text" class="form-control" id="team-name" placeholder="Digite o nome da sua equipe" >
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" name="team-acronym" for="team-acronym">Sigla da Equipe</label>
                                    <input type="text" class="form-control" id="team-acronym" placeholder="Digite a sigla da sua equipe">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" name="team-facebookLink" for="team-facebookLink">Link do facebook da equipe</label>
                                    <input type="text" class="form-control" id="team-facebookLink" placeholder="Insira o link do facebook">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="font-weight-bold" name="college-name" for="college-name">Nome da Faculdade</label>
                                    <input type="text" class="form-control" id="college-name" placeholder="Digite o nome da faculdade">
                                </div>
                            </div>

                            <div class="form-row py-2">
                                <div class="form-group col-lg-4">
                                    <label class="font-weight-bold" name="team-representative-name" for="team-representative-name">Nome do Representante</label>
                                    <input type="text" class="form-control" id="team-representative-name" placeholder="Chamar do BD o nome do Representante" >
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="font-weight-bold" name="team-representative-cellPhone" for="team-representative-cellPhone">Celular do Representante</label>
                                    <input type="text" class="form-control" id="team-representative-cellPhone" placeholder="(XX)X XXXX-XXXX" >
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="font-weight-bold" name="team-representative-email" for="team-representative-email">Email do Representante</label>
                                    <input type="email" class="form-control" id="team-representative-email" placeholder="Chamar do BD o email do Representante" >
                                </div>
                            </div>
                        </div>
                        <!-- cs -->
                        <div class="tab-pane fade" id="nav-cs" role="tabpanel" aria-labelledby="nav-cs-tab">
                            <div class="form-group">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome completo</label>
                                        <input type="text" class="form-control my-2" name="nameCS1" id="nameCS1" placeholder="Nome do jogador 1" >
                                        <input type="text" class="form-control my-2" name="nameCS2" id="nameCS2" placeholder="Nome do jogador 2" >
                                        <input type="text" class="form-control my-2" name="nameCS3" id="nameCS3" placeholder="Nome do jogador 3" >
                                        <input type="text" class="form-control my-2" name="nameCS4" id="nameCS4" placeholder="Nome do jogador 4" >
                                        <input type="text" class="form-control my-2" name="nameCS5" id="nameCS5" placeholder="Nome do jogador 5" >
                                    </div>
                                    
                                    <!-- steam-link -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link da Steam</label>
                                        <input type="text" class="form-control my-2" name="steam-linkCS1" id="steam-linkCS1" placeholder="Steam jogador 1" >
                                        <input type="text" class="form-control my-2" name="steam-linkCS2" id="steam-linkCS2" placeholder="Steam jogador  2" >
                                        <input type="text" class="form-control my-2" name="steam-linkCS3" id="steam-linkCS3" placeholder="Steam jogador  3" >
                                        <input type="text" class="form-control my-2" name="steam-linkCS4" id="steam-linkCS4" placeholder="Steam jogador  4" >
                                        <input type="text" class="form-control my-2" name="steam-linkCS5" id="steam-linkCS5" placeholder="Steam jogador  5" >
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="CPFCS1" id="CPFCS1" placeholder="CPF jogador 1" >
                                        <input type="text" class="form-control my-2" name="CPFCS2" id="CPFCS2" placeholder="CPF jogador 2" >
                                        <input type="text" class="form-control my-2" name="CPFCS3" id="CPFCS3" placeholder="CPF jogador 3" >
                                        <input type="text" class="form-control my-2" name="CPFCS4" id="CPFCS4" placeholder="CPF jogador 4" >
                                        <input type="text" class="form-control my-2" name="CPFCS5" id="CPFCS5" placeholder="CPF jogador 5" >
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raCS1" id="raCS1" placeholder="RA jogador 1" >
                                        <input type="text" class="form-control my-2" name="raCS2" id="raCS2" placeholder="RA jogador 2" >
                                        <input type="text" class="form-control my-2" name="raCS3" id="raCS3" placeholder="RA jogador 3" >
                                        <input type="text" class="form-control my-2" name="raCS4" id="raCS4" placeholder="RA jogador 4" >
                                        <input type="text" class="form-control my-2" name="raCS5" id="raCS5" placeholder="RA jogador 5" >
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofCS1" id="proofCS1" placeholder="Comprovante jogador 1" >
                                        <input type="text" class="form-control my-2" name="proofCS2" id="proofCS2" placeholder="Comprovante jogador 2" >
                                        <input type="text" class="form-control my-2" name="proofCS3" id="proofCS3" placeholder="Comprovante jogador 3" >
                                        <input type="text" class="form-control my-2" name="proofCS4" id="proofCS4" placeholder="Comprovante jogador 4" >
                                        <input type="text" class="form-control my-2" name="proofCS5" id="proofCS5" placeholder="Comprovante jogador 5" >
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailCS1" id="emailCS1" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailCS2" id="emailCS2" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailCS3" id="emailCS3" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailCS4" id="emailCS4" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailCS5" id="emailCS5" placeholder="nome@dominio.com" >
                                    </div>
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
                                        <input type="text" class="form-control my-2" name="nameLOL1" id="nameLOL1" placeholder="Nome do jogador 1" >
                                        <input type="text" class="form-control my-2" name="nameLOL2" id="nameLOL2" placeholder="Nome do jogador 2" >
                                        <input type="text" class="form-control my-2" name="nameLOL3" id="nameLOL3" placeholder="Nome do jogador 3" >
                                        <input type="text" class="form-control my-2" name="nameLOL4" id="nameLOL4" placeholder="Nome do jogador 4" >
                                        <input type="text" class="form-control my-2" name="nameLOL5" id="nameLOL5" placeholder="Nome do jogador 5" >
                                    </div>
                                    <!-- summoner-name -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nome do invocador</label>
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL1" id="summoner-nameLOL1" placeholder="Nome do invocador jogador 1" >
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL2" id="summoner-nameLOL2" placeholder="Nome do invocador jogador 2" >
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL3" id="summoner-nameLOL3" placeholder="Nome do invocador jogador 3" >
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL4" id="summoner-nameLOL4" placeholder="Nome do invocador jogador 4" >
                                        <input type="text" class="form-control my-2" name="summoner-nameLOL5" id="summoner-nameLOL5" placeholder="Nome do invocador jogador 5" >
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfLOL1" id="cpfLOL1" placeholder="CPF jogador 1" >
                                        <input type="text" class="form-control my-2" name="cpfLOL2" id="cpfLOL2" placeholder="CPF jogador 2" >
                                        <input type="text" class="form-control my-2" name="cpfLOL3" id="cpfLOL3" placeholder="CPF jogador 3" >
                                        <input type="text" class="form-control my-2" name="cpfLOL4" id="cpfLOL4" placeholder="CPF jogador 4" >
                                        <input type="text" class="form-control my-2" name="cpfLOL5" id="cpfLOL5" placeholder="CPF jogador 5" >
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raLOL1" id="raLOL1" placeholder="RA jogador 1" >
                                        <input type="text" class="form-control my-2" name="raLOL2" id="raLOL2" placeholder="RA jogador 2" >
                                        <input type="text" class="form-control my-2" name="raLOL3" id="raLOL3" placeholder="RA jogador 3" >
                                        <input type="text" class="form-control my-2" name="raLOL4" id="raLOL4" placeholder="RA jogador 4" >
                                        <input type="text" class="form-control my-2" name="raLOL5" id="raLOL5" placeholder="RA jogador 5" >
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofLOL1" id="proofLOL1" placeholder="Comprovante jogador 1" >
                                        <input type="text" class="form-control my-2" name="proofLOL2" id="proofLOL2" placeholder="Comprovante jogador 2" >
                                        <input type="text" class="form-control my-2" name="proofLOL3" id="proofLOL3" placeholder="Comprovante jogador 3" >
                                        <input type="text" class="form-control my-2" name="proofLOL4" id="proofLOL4" placeholder="Comprovante jogador 4" >
                                        <input type="text" class="form-control my-2" name="proofLOL5" id="proofLOL5" placeholder="Comprovante jogador 5" >
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailLOL1" id="emailLOL1" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailLOL2" id="emailLOL2" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailLOL3" id="emailLOL3" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailLOL4" id="emailLOL4" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailLOL5" id="emailLOL5" placeholder="nome@dominio.com" >
                                    </div>
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
                                        <input type="text" class="form-control my-2" name="nameFIFA1" id="nameFIFA1" placeholder="Nome do jogador 1" >
                                        <input type="text" class="form-control my-2" name="nameFIFA2" id="nameFIFA2" placeholder="Nome do jogador 2" >
                                        <input type="text" class="form-control my-2" name="nameFIFA3" id="nameFIFA3" placeholder="Nome do jogador 3" >
                                    </div>
                                    <!-- psn -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">PlayStation Network (PSN)</label>
                                        <input type="text" class="form-control my-2" name="psnFIFA1" id="psnFIFA1" placeholder="PSN jogador 1" >
                                        <input type="text" class="form-control my-2" name="psnFIFA2" id="psnFIFA2" placeholder="PSN jogador 2" >
                                        <input type="text" class="form-control my-2" name="psnFIFA3" id="psnFIFA3" placeholder="PSN jogador 3" >
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfFIFA1" id="cpfFIFA1" placeholder="CPF jogador 1" >
                                        <input type="text" class="form-control my-2" name="cpfFIFA2" id="cpfFIFA2" placeholder="CPF jogador 2" >
                                        <input type="text" class="form-control my-2" name="cpfFIFA3" id="cpfFIFA3" placeholder="CPF jogador 3" >
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raFIFA1" id="raFIFA1" placeholder="RA jogador 1" >
                                        <input type="text" class="form-control my-2" name="raFIFA2" id="raFIFA2" placeholder="RA jogador 2" >
                                        <input type="text" class="form-control my-2" name="raFIFA3" id="raFIFA3" placeholder="RA jogador 3" >
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofFIFA1" id="proofFIFA1" placeholder="Comprovante jogador 1" >
                                        <input type="text" class="form-control my-2" name="proofFIFA2" id="proofFIFA2" placeholder="Comprovante jogador 2" >
                                        <input type="text" class="form-control my-2" name="proofFIFA3" id="proofFIFA3" placeholder="Comprovante jogador 3" >
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailFIFA1" id="emailFIFA1" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailFIFA2" id="emailFIFA2" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailFIFA3" id="emailFIFA3" placeholder="nome@dominio.com" >
                                    </div>
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
                                        <input type="text" class="form-control my-2" name="nameHS1" id="nameHS1" placeholder="Nome do jogador 1" >
                                        <input type="text" class="form-control my-2" name="nameHS2" id="nameHS2" placeholder="Nome do jogador 2" >
                                        <input type="text" class="form-control my-2" name="nameHS3" id="nameHS3" placeholder="Nome do jogador 3" >
                                    </div>
                                    <!-- battle-net -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Battle.net</label>
                                        <input type="text" class="form-control my-2" name="battle-netHS1" id="battle-netHS1" placeholder="Battle.net jogador 1" >
                                        <input type="text" class="form-control my-2" name="battle-netHS2" id="battle-netHS2" placeholder="Battle.net jogador 2" >
                                        <input type="text" class="form-control my-2" name="battle-netHS3" id="battle-netHS3" placeholder="Battle.net jogador 3" >
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfHS1" id="cpfHS1" placeholder="CPF jogador 1" >
                                        <input type="text" class="form-control my-2" name="cpfHS2" id="cpfHS2" placeholder="CPF jogador 2" >
                                        <input type="text" class="form-control my-2" name="cpfHS3" id="cpfHS3" placeholder="CPF jogador 3" >
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raHS1" id="raHS1" placeholder="RA jogador 1" >
                                        <input type="text" class="form-control my-2" name="raHS2" id="raHS2" placeholder="RA jogador 2" >
                                        <input type="text" class="form-control my-2" name="raHS3" id="raHS3" placeholder="RA jogador 3" >
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofHS1" id="proofHS1" placeholder="Comprovante jogador 1" >
                                        <input type="text" class="form-control my-2" name="proofHS2" id="proofHS2" placeholder="Comprovante jogador 2" >
                                        <input type="text" class="form-control my-2" name="proofHS3" id="proofHS3" placeholder="Comprovante jogador 3" >
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailHS1" id="emailHS1" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailHS2" id="emailHS2" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailHS3" id="emailHS3" placeholder="nome@dominio.com" >
                                    </div>
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
                                        <input type="text" class="form-control my-2" name="nameCLASH1" id="nameCLASH1" placeholder="Nome do jogador 1" >
                                        <input type="text" class="form-control my-2" name="nameCLASH2" id="nameCLASH2" placeholder="Nome do jogador 2" >
                                        <input type="text" class="form-control my-2" name="nameCLASH3" id="nameCLASH3" placeholder="Nome do jogador 3" >
                                    </div>
                                    <!-- nick -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Nick</label>
                                        <input type="text" class="form-control my-2" name="nickCLASH1" id="nickCLASH1" placeholder="Nick jogador 1" >
                                        <input type="text" class="form-control my-2" name="nickCLASH2" id="nickCLASH2" placeholder="Nick jogador 2" >
                                        <input type="text" class="form-control my-2" name="nickCLASH3" id="nickCLASH3" placeholder="Nick jogador 3" >
                                    </div>
                                    <!-- cpf -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">CPF</label>
                                        <input type="text" class="form-control my-2" name="cpfCLASH1" id="cpfCLASH1" placeholder="CPF jogador 1" >
                                        <input type="text" class="form-control my-2" name="cpfCLASH2" id="cpfCLASH2" placeholder="CPF jogador 2" >
                                        <input type="text" class="form-control my-2" name="cpfCLASH3" id="cpfCLASH3" placeholder="CPF jogador 3" >
                                    </div>
                                    <!-- ra -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">RA</label>
                                        <input type="text" class="form-control my-2" name="raCLASH1" id="raCLASH1" placeholder="RA jogador 1" >
                                        <input type="text" class="form-control my-2" name="raCLASH2" id="raCLASH2" placeholder="RA jogador 2" >
                                        <input type="text" class="form-control my-2" name="raCLASH3" id="raCLASH3" placeholder="RA jogador 3" >
                                    </div>
                                    <!-- proof -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Link do comprovante de matrícula</label>
                                        <input type="text" class="form-control my-2" name="proofCLASH1" id="proofCLASH1" placeholder="Comprovante jogador 1" >
                                        <input type="text" class="form-control my-2" name="proofCLASH2" id="proofCLASH2" placeholder="Comprovante jogador 2" >
                                        <input type="text" class="form-control my-2" name="proofCLASH3" id="proofCLASH3" placeholder="Comprovante jogador 3" >
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control my-2" name="emailCLASH1" id="emailCLASH1" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailCLASH2" id="emailCLASH2" placeholder="nome@dominio.com" >
                                        <input type="email" class="form-control my-2" name="emailCLASH3" id="emailCLASH3" placeholder="nome@dominio.com" >
                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-section btn-block my-3">Cadastrar</button>
        </form>
        </div>
</section>

<?php require_once 'partials/footer.php'; ?>

</html>