-- Eduardo Fiorito Junior, Henrique da Veiga Moreira, João Victor Castro de Oliveira , Leonardo de Souza Camargo, Thomas Adam da Costa e Waislan Luis Sanches --

-- criando o BD--
create database  teif
default character set utf8mb4
default collate utf8mb4_general_ci;


use teif;

-- criando / alterando as tabelas e inserindo valores --
create table representante(
cpf_representante varchar(30) NOT NULL ,
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
celular int NOT NULL,
primary key(cpf_representante)
)default charset = utf8mb4;

create table equipe(
id_equipe int NOT NULL ,
nome_equipe varchar(30) NOT NULL,
sigla varchar(7) NOT NULL,
faculdade varchar(30) NOT NULL,
facebook varchar(30) NOT NULL,
fk_cpf_representante varchar(30),
primary key(id_equipe)
)default charset = utf8mb4;

create table modalidade(
id_modalidade int NOT NULL ,
nome_modalidade varchar(30) NOT NULL,
valor_inscricao integer NOT NULL,
regulamento varchar(30) NOT NULL,
primary key(id_modalidade)
)default charset = utf8mb4;

create table participa(
id_equipe int,
foreign key fk_id_equipe (id_equipe) references equipe (id_equipe),
id_modalidade int,
foreign key fk_id_modalidade (id_modalidade) references modalidade (id_modalidade)
);

ALTER TABLE equipe  add constraint fk_cpf_representante foreign key (fk_cpf_representante) references representante(cpf_representante) ON DELETE CASCADE
ON UPDATE CASCADE;


create table JOGADOR_CLASH(
cpf varchar(30),
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
comprovante_matricula varchar(30) NOT NULL,
titular enum ('S','N') NOT NULL,
nick varchar(30) NOT NULL,
id_equipe int,
foreign key fk_id_equipe (id_equipe) references equipe (id_equipe),
primary key(cpf)
)default charset = utf8mb4;

create table JOGADOR_FIFA(
cpf varchar(30),
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
comprovante_matricula varchar(30) NOT NULL,
titular enum ('S','N') NOT NULL,
psn varchar(30) NOT NULL,
id_equipe int,
foreign key fk_id_equipe (id_equipe) references equipe (id_equipe),
primary key(cpf)
)default charset = utf8mb4;

create table JOGADOR_HS(
cpf varchar(30),
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
comprovante_matricula varchar(30) NOT NULL,
titular enum ('S','N') NOT NULL,
battle_net varchar(30) NOT NULL,
id_equipe int,
foreign key fk_id_equipe (id_equipe) references equipe (id_equipe),
primary key(cpf)
)default charset = utf8mb4;

create table JOGADOR_CSGO(
cpf varchar(30),
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
comprovante_matricula varchar(30) NOT NULL,
titular enum ('S','N') NOT NULL,
steam_link varchar(30) NOT NULL,
id_equipe int,
foreign key fk_id_equipe (id_equipe) references equipe (id_equipe),
primary key(cpf)
)default charset = utf8mb4;

create table JOGADOR_LOL(
cpf varchar(30),
nome varchar(30) NOT NULL,
email varchar(30) NOT NULL,
comprovante_matricula varchar(30) NOT NULL,
titular enum ('S','N') NOT NULL,
nome_invocador varchar(30) NOT NULL,
id_equipe int,
foreign key fk_id_equipe (id_equipe) references equipe (id_equipe),
primary key(cpf)
)default charset = utf8mb4;


-- inserindo dados nas tabelas--
insert into representante
(cpf_representante,nome,celular,email)
values
('10189956587','Fernando Alvarenga', '999993333','joel@gmail.com');

insert into representante
(cpf_representante,nome,celular,email)
values
('13015009988','Marcos Vinicius', '888883333','mv@gmail.com');

insert into representante
(cpf_representante,nome,celular,email)
values
('20611187928','Maria Cristina Azevedo', '898989898','mazevedo@gmail.com');

insert into equipe
(id_equipe,nome_equipe,sigla,faculdade,facebook,fk_cpf_representante)
values
('1','made in brazil', 'mibr','unifal', 'fb.com/mibr','10189956587');

insert into equipe
(id_equipe,nome_equipe,sigla,faculdade,facebook,fk_cpf_representante)
values
('2','furia', 'votim','puc', 'fb.com/votim','13015009988');

insert into equipe
(id_equipe,nome_equipe,sigla,faculdade,facebook,fk_cpf_representante)
values
('3','boom', 'boom','pitagoras', 'fb.com/boom','20611187928');


insert into jogador_clash
(cpf,nome,email,comprovante_matricula,nick,id_equipe)
values
('50420280699','Felipe', 'felipe@live.com','felipe.pdf', 'felipm','1');


insert into jogador_clash
(cpf,nome,email,comprovante_matricula,nick,id_equipe)
values
('26610150530','Natalia', 'natalia@live.com','nat.pdf', 'nat22','2');


insert into jogador_clash
(cpf,nome,email,comprovante_matricula,nick,id_equipe)
values
('26620050530','Caio', 'caio@live.com','caio.pdf', 'cct22','3');

insert into modalidade
(id_modalidade,nome_modalidade,valor_inscricao,regulamento)
values
('01','csgo','20','csgo.pdf');

insert into modalidade
(id_modalidade,nome_modalidade,valor_inscricao,regulamento)
values
('05','clash','10','clash.pdf');

insert into modalidade
(id_modalidade,nome_modalidade,valor_inscricao,regulamento)
values
('02','lol','20','lol.pdf');


insert into participa
(id_equipe,id_modalidade)
values
('3','05');

insert into participa
(id_equipe,id_modalidade)
values
('2','05');

insert into participa
(id_equipe,id_modalidade)
values
('1','05');

insert into participa
(id_equipe,id_modalidade)
values
('1','02');

insert into participa
(id_equipe,id_modalidade)
values
('1','01');

insert into jogador_csgo
(cpf, nome, email, comprovante_matricula, titular, steam_link, id_equipe)
values
('11111111120', 'Fernando Alvarenga', 'fer@live.com','fer.pdf', '1', 'steam.com/fer', '1');

insert into jogador_csgo
(cpf, nome, email, comprovante_matricula, titular, steam_link, id_equipe)
values
('21248212525', 'Gabriel Toledo', 'fallen@live.com','fallen.pdf', '1', 'steam.com/fallen', '1');

insert into jogador_csgo
(cpf, nome, email, comprovante_matricula, titular, steam_link, id_equipe)
values
('10122288820', 'Ignacio Meyern', 'meyern@live.com','meyern.pdf', '1', 'steam.com/mey', '1');

insert into jogador_fifa
(cpf, nome, email, comprovante_matricula, psn, id_equipe)
values
('64272391087', 'Victor Xavier', 'victor@live.com', 'victor.pdf', 'www.playstation.com/vicX', '1'),
('13303945013', 'Felipe Alves', 'felipealves@live.com', 'felipealves.pdf', 'www.playstation.com/fpal', '2'),
('11109923677', 'Ana Paula', 'ana@live.com', 'Ana.pdf', 'www.playstation.com/ana77', '3');

insert into jogador_lol
(cpf, nome, email, comprovante_matricula, nome_invocador, id_equipe)
values
('20611187929', 'Maria Cristina Azevedo', 'mca@live.com', 'maria.pdf', 'mca', '1'),
('11155562369', 'Paula Ramos', 'paula@live.com', 'paula.pdf', 'paulinhaCC', '1'),
('05688812624', 'Pedro Ruiz', 'pedro@live.com', 'pedro.pdf',  'pedro456', '1');

insert into jogador_hs
(cpf, nome, email, comprovante_matricula, battle_net, id_equipe)
values
('12398754645', 'Maria Fernanda Junqueira', 'mariafj@live.com', 'maria.pdf', 'battle.net/mariafj', '1'),
('07764250533', 'Gabriele Morais', 'gabriele@live.com', 'gabriele.pdf', 'battle.net/gabiM', '2'),
('22211101188', 'Pedro Antonio', 'pedro@live.com', 'pedro.pdf', 'battle.net/pedroF', '3');

-- consultas simples--
select id_equipe,id_modalidade from participa;
select nome,nome_invocador from jogador_lol;

-- pesquisa entre 3 tabelas--
SELECT equipe.nome_equipe AS equipe, modalidade.nome_modalidade AS modalidade FROM  equipe, modalidade, participa WHERE participa.id_equipe = equipe.id_equipe  and participa.id_modalidade = modalidade.id_modalidade;

-- pesquisa com join--
SELECT equipe.sigla, modalidade.nome_modalidade FROM equipe INNER JOIN (modalidade INNER JOIN participa ON participa.id_modalidade = modalidade.id_modalidade) ON equipe.id_equipe = participa.id_equipe;

-- view entre jogador e equipe com o uso de inner join---
CREATE VIEW Jogador(Nome, Equipe)
AS SELECT nome, nome_equipe
FROM jogador_csgo inner join equipe 
where jogador_csgo.id_equipe = equipe.id_equipe;

select * from Jogador;

CREATE VIEW Jogadorlol(Nome, Equipe)
AS SELECT nome, nome_equipe
FROM jogador_lol inner join equipe 
where jogador_lol.id_equipe = equipe.id_equipe;

select * from Jogadorlol;

CREATE VIEW Jogadorclash(Nome, Equipe)
AS SELECT nome, nome_equipe
FROM jogador_clash inner join equipe 
where jogador_clash.id_equipe = equipe.id_equipe;

select * from Jogadorclash;

CREATE VIEW JogadorHS(Nome, Equipe)
AS SELECT nome, nome_equipe
FROM jogador_hs inner join equipe 
where jogador_hs.id_equipe = equipe.id_equipe;

select * from JogadorHS;

CREATE VIEW Jogadorfifa(Nome, Equipe)
AS SELECT nome, nome_equipe
FROM jogador_fifa inner join equipe 
where jogador_fifa.id_equipe = equipe.id_equipe;

select * from Jogadorfifa;



