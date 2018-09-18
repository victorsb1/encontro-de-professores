<<<<<<< HEAD
CREATE TABLE usuarios (
    id_usuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_completo varchar(255) NOT NULL,
    nome_ident varchar(255) NOT NULL,
    email varchar(100) NOT NULL,
    user varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    telefone int(12) NOT NULL,
    whatsapp boolean NOT NULL,
    instituicao varchar(255) NOT NULL,
    f_instituicao varchar(255) NOT NULL,
    telefone_inst int (12) NOT NULL,
    email_inst varchar (100) NOT NULL,
    tipo int (3) NOT NULL
);

CREATE TABLE apresentacao(
    id_apresentacao int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    nome_trabalho varchar(255) NOT NULL,
    nome_autores varchar(255) NOT NULL,
    #termos boolean NOT NULL,
    resumo varchar (255) NOT NULL,
    tipo int NOT NULL,
    situacao varchar (50) NOT NULL,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

CREATE TABLE participacao (
    id_participacao int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    oficina1 boolean NOT NULL,
    oficina2 boolean NOT NULL,
    oficina3 boolean NOT NULL,
    oficina4 boolean NOT NULL,
    oficina5 boolean NOT NULL,
    oficina6 boolean NOT NULL,
    oficina7 boolean NOT NULL,
    oficina8 boolean NOT NULL,
    oficina9 boolean NOT NULL,

    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

CREATE TABLE oficina_cad(
    id_oficina int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL
);

CREATE TABLE almoco(
    id_almoco int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    rg int NOT NULL,
    cpf int NOT NULL,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

### ALTERAÇÕES FEITAS PELO LUIS
### MUDANÇA NA PARTE DE INSERIR TRABALHO
### - apresentacao
### + trabalho
### + publica
### + autor
### + instituicao

CREATE TABLE instituicao(
    id_inst int primary key not null auto_increment,
    nome_inst varchar(255) not null
);

CREATE TABLE autor(
    id_autor int primary key not null auto_increment,
    nome_autor varchar(255) not null,
    instituicao_autor varchar(255) not null,
    
);

CREATE TABLE trabalho(
    id_trabalho int primary key not null auto_increment,
    titulo varchar(255) not null,
    pc1 varchar(100) not null,
    pc2 varchar(100) not null,
    pc3 varchar(100) not null
);

CREATE TABLE publica (
    id_publica int primary key not null auto_increment,
    id_usuario int not null,
    id_trabalho int not null,
    data date not null,
    status varchar(100) not null,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario),
    FOREIGN KEY (id_trabalho) REFERENCES trabalho (id_trabalho)
=======
CREATE TABLE usuarios (
    id_usuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_completo varchar(255) NOT NULL,
    nome_ident varchar(255) NOT NULL,
    email varchar(100) NOT NULL,
    user varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    telefone int(12) NOT NULL,
    whatsapp boolean NOT NULL,
    instituicao varchar(255) NOT NULL,
    f_instituicao varchar(255) NOT NULL,
    telefone_inst int (12) NOT NULL,
    email_inst varchar (100) NOT NULL,
    tipo int (3) NOT NULL
);

CREATE TABLE apresentacao(
    id_apresentacao int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    nome_trabalho varchar(255) NOT NULL,
    nome_autores varchar(255) NOT NULL,
    #termos boolean NOT NULL,
    resumo varchar (255) NOT NULL,
    tipo int NOT NULL,
    situacao varchar (50) NOT NULL,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

CREATE TABLE participacao (
    id_participacao int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    oficina1 boolean NOT NULL,
    oficina2 boolean NOT NULL,
    oficina3 boolean NOT NULL,
    oficina4 boolean NOT NULL,
    oficina5 boolean NOT NULL,
    oficina6 boolean NOT NULL,
    oficina7 boolean NOT NULL,
    oficina8 boolean NOT NULL,
    oficina9 boolean NOT NULL,

    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

CREATE TABLE oficina_cad(
    id_oficina int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL
);

CREATE TABLE almoco(
    id_almoco int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    rg int NOT NULL,
    cpf int NOT NULL,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

### ALTERAÇÕES FEITAS PELO LUIS
### MUDANÇA NA PARTE DE INSERIR TRABALHO
### - apresentacao
### + trabalho
### + publica
### + autor
### + instituicao

CREATE TABLE instituicao(
    id_inst int primary key not null auto_increment,
    nome_inst varchar(255) not null
);

CREATE TABLE autor(
    id_autor int primary key not null auto_increment,
    nome_autor varchar(255) not null,
    instituicao_autor varchar(255) not null,
    
);

CREATE TABLE trabalho(
    id_trabalho int primary key not null auto_increment,
    titulo varchar(255) not null,
    pc1 varchar(100) not null,
    pc2 varchar(100) not null,
    pc3 varchar(100) not null
);

CREATE TABLE publica (
    id_publica int primary key not null auto_increment,
    id_usuario int not null,
    id_trabalho int not null,
    data date not null,
    status varchar(100) not null,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario),
    FOREIGN KEY (id_trabalho) REFERENCES trabalho (id_trabalho)
>>>>>>> 63f1ecd78343e25eeb84c40c11a3fa3258d05ae3
);