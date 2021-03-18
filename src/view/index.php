<?php
session_start();
require_once 'partials/header.php';
require_once 'partials/carousel.php';

if (isset($_GET["cadastroComSucesso"])) {
    echo "<script>alert('Inscrição efetuada com sucesso!')</script>";
}
?>

<!-- Content-->
<main>

    <!-- which is -->
    <section class="container py-2 py-md-5" id="which-is">
        <h2 class="section-title">O que é</h2>

        <div class="row">
            <div class="col-lg-6 col-12">
                <p class="section-paragraph">
                    O Torneio de E-Sports dos Institutos Federais (TEIF) é uma iniciativa
                    dos estudantes do curso de Engenharia de Computação, Vinícius Carneiro,
                    Vinícius Mármoro, Yuri Fernandes e Henrique Moreira.
                    O TEIF é realizado em parceria com alunos da Engenharia de Computação,
                    membros da Aldeia Consultoria Júnior e com a organização da Creative Esports,
                    Instituto Federal campus Poços de Caldas e a equipe de NTI: Eugênio Marquis
                    de Oliveira e Luiz Antônio de Sousa Ferreira.
                </p>
                <p class="section-paragraph">
                    Buscando criar um ambiente de socialização e lazer, desenvolvendo habilidades
                    fora do âmbito escolar, o TEIF teve sua terceira edição no dia 23 de Novembro
                    no IFSULDEMINAS - Câmpus Poços de Caldas. Diferente das outras edições, contou
                    com 5 modalidades: FIFA (videogame), League of Legends (PC), Team Fight Tactics (PC)
                    e Counter-Strike: Global Offensive (PC).
                </p>
            </div>
            <figure class="col-lg-6 col-12">
                <img src="../assets/img/hero.jpg" alt="" class="img-fluid">
            </figure>
        </div>
    </section>

    <!-- previous editions -->
    <section class="container py-2 py-md-5" id="previous-editions">
        <h2 class="section-title">Edições anteriores</h2>

        <div class="row">
            <div class="col-md-4 col-12">
                <img class="img-fluid" src="../assets/img/edicao2017.png" alt="Primeira edição - Poços de Caldas - Minas Gerais">
                <a class="btn btn-section btn-block my-2 my-md-3" href="https://bit.ly/3vjSiEN" role="button"><b>Veja</b> como foi</a>
            </div>
            <div class="col-md-4 col-12">
                <img class="img-fluid" src="../assets/img/edicao2018.png" alt="Segunda edição - Poços de Caldas - Minas Gerais">
                <a class="btn btn-section btn-block my-2 my-md-3" href="https://bit.ly/2NiHG84" role="button"><b>Veja</b> como foi</a>
            </div>
            <div class="col-md-4 col-12">
                <img class="img-fluid" src="../assets/img/edicao2019.png" alt="Terceira edição - Poços de Caldas - Minas Gerais">
                <a class="btn btn-section btn-block my-2 my-md-3" href="https://bit.ly/2Nm2HyM" role="button"><b>Veja</b> como foi</a>
            </div>
        </div>
    </section>

    <!-- team -->
    <section class="container py-2 py-md-5" id="team">
        <h2 class="section-title">Equipe</h2>

        <div class="row d-flex justify-content-around">

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/eduardo.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Eduardo Fiorito</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/henrique.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Henrique Moreira</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/jean.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Jean Melo</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/joao.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">João Victor</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/leo.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Leonardo de Souza</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/thomas.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Thomas Adam</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/waislan.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Waislan Sanches</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/alemão.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">William Manoel</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>

            <div class="card bg-dark custom-card my-4 pt-3">
                <img src="../assets/img/yuri.png" alt="" class="img-fluid rounded-circle px-5 ">
                <div class="card-body">
                    <h3 class="card-title h5 font-weight-bold text-center">Yuri Fernandes</h3>
                    <p class="card-text text-center">Engenharia de Computação</p>
                    <p class="card-text text-center">10° período</p>
                </div>
            </div>


        </div>
    </section>

    <!-- contact -->
    <section class="container py-2 py-md-5" id="contact">
        <h2 class="section-title">Contato</h2>
        <p class="section-paragraph">
            Deseja fazer parte da equipe? Conte-nos um pouco sobre você
            Tem alguma dúvida? Mande sua mensagem!
        </p>

        <div class="card bg-dark text-white">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nameInput" class="font-weight-bold">Nome</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="emailInput" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="Digite o seu email" required>
                    </div>
                    <div class="form-group">
                        <label for="subjectInput" class="font-weight-bold">Assunto</label>
                        <input type="text" class="form-control" id="subjectInput" placeholder="Digite o assunto da mensagem" required>
                    </div>
                    <div class="form-group">
                        <label for="messageInput" class="font-weight-bold">Mensagem</label>
                        <textarea class="form-control" id="messageInput" rows="4" placeholder="Digite a mensagem" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-section btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php require_once 'partials/footer.php'; ?>

</html>