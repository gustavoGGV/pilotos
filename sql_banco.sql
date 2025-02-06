create database pilotos;
use pilotos;

create table piloto (
    idPil int primary key AUTO_INCREMENT not null,
    nomePil varchar(100) not null,
    nacionalidadePil varchar(50) not null,
    dataNascPil date not null,
    cidadeNascPil varchar(70) not null,
    idadePil int not null,
    categoriaPil varchar(70),
    timePil varchar(70),
    numeroPil int,
    classificacaoPil varchar(20),
    nomeSpotterPil varchar(100),
    nomeCopilotoPil varchar(100),
    pagantePil varchar(3)
);
