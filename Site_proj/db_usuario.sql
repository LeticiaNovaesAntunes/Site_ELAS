CREATE database db_projeto;
use db_projeto;
CREATE TABLE tb_usuarios(
    ID int AUTO_INCREMENT not null,
    Username varchar(30) not null,
    email varchar(50) not null, 
    senha varchar(32) not null, 
    tipo varchar(30),
    PRIMARY KEY(ID));


create table tb_instituicoes(
    Id_institucao Int auto_increment,
    Nome Varchar(50) NOT Null,
    Telefone Varchar(30) NOT Null,
    Email Varchar(50) NOT NULL,
    Rua  Varchar(50),
    Cidade Varchar(30),
    Bairro Varchar(50),
    Estado Varchar(30),
    link_site Varchar(3000),
    Tipo Varchar(30),
    Primary key (Id_institucao)
);

create table tb_solicitacoes(
    Id_institucao Int auto_increment,
    Nome Varchar(50) NOT Null,
    Telefone Varchar(30) NOT Null,
    Email Varchar(50) NOT NULL,
    Rua  Varchar(50),
    Cidade Varchar(30),
    Bairro Varchar(50),
    Estado Varchar(30),
    link_site Varchar(3000),
    Tipo Varchar(30),
    Primary key (Id_institucao)
);
    
create table tb_curso(
    Id Int auto_increment,
    Id_institucao int NOT NULL,
    Nome Varchar(50) NOT Null,
    Descrição Varchar(200) NOT NULL,
    CONSTRAINT pk_id Primary key (Id)
    
);

ALTER TABLE tb_curso
ADD CONSTRAINT fk_id_instituicao FOREIGN KEY(Id_institucao) REFERENCES tb_instituicoes (Id_institucao);
 
INSERT into `tb_usuarios` (Username, email, senha, tipo) VALUES ('Administrador', 'admin@gmail.com', md5('111'), 'admin');
INSERT into `tb_usuarios` (Username, email, senha, tipo) VALUES ('Leticia', 'leticia@gmail.com', md5('123'), 'admin');
INSERT into `tb_usuarios` (Username, email, senha, tipo) VALUES ('Alandra', 'alandra@gmail.com', md5('123'), 'admin');
INSERT into `tb_usuarios` (Username, email, senha, tipo) VALUES ('Ester', 'ester@gmail.com', md5('123'), 'admin');
INSERT into `tb_usuarios` (Username, email, senha) VALUES ('Robson', 'robson@gmail.com', md5('326133'));