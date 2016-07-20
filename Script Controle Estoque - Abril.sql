-- Torna o SAFE_MODE off (Desabilitado)
SET SQL_SAFE_UPDATES = 0;

-- Criando o Banco de Dados
CREATE SCHEMA dbControleEstoque DEFAULT CHARACTER SET UTF8;

-- Usando o Banco de Dados
USE dbControleEstoque;

-- Criando a Tabela Produto
-- Produto(id,nome,descrição,preço)
CREATE TABLE Produto(
	id        INT           NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome	  VARCHAR(45)   NOT NULL,
    descricao VARCHAR(30)   NOT NULL,
    preco     DECIMAL(10,2) NOT NULL
)AUTO_INCREMENT = 1, ENGINE = InnoDB;

-- Cliente(id,nome,email,telefone)
CREATE TABLE Cliente(
	id 		 INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome	 VARCHAR(45) NOT NULL,
    email    VARCHAR(30) NOT NULL,
    telefone VARCHAR(11) NOT NULL
)AUTO_INCREMENT = 1, ENGINE = InnoDB;

-- Pedido(id_produto, id_cliente)
CREATE TABLE Pedido(
	id_produto INT NOT NULL,
		FOREIGN KEY(id_produto)
			REFERENCES dbControleEstoque.Produto(id) ON DELETE NO ACTION
													 ON UPDATE NO ACTION,
	id_cliente INT NOT NULL,
		FOREIGN KEY(id_cliente)
			REFERENCES dbControleEstoque.Cliente(id) ON DELETE NO ACTION	
													 ON UPDATE NO ACTION
)AUTO_INCREMENT = 1, ENGINE = InnoDB;

SELECT * FROM Cliente;