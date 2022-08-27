
CREATE DATABASE crud-php
    DEFAULT CHARACTER SET = 'utf8mb4_general_ci';

CREATE TABLE funcionario(  
    id_funcionario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_funcionario varchar(45) NOT NULL,
    rg_funcionario varchar(45) NOT NULL    
);