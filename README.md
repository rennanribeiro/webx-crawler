# webx-crawler
## Download e Instalação:

### Clone o projeto
git clone uasds

### Banco de dados

Sugiro seguir:

CREATE DATABASE `webx`;
USE `webx`;

CREATE TABLE `webx`.`urls`(
	`id` INT NOT NULL AUTO_INCREMENT ,
	`url` text ,
	`visited` ENUM('yes','no') DEFAULT 'no' ,
	PRIMARY KEY (`id`) );

CREATE TABLE `webx`.`emails`(
	`id` INT NOT NULL AUTO_INCREMENT ,
	`email` VARCHAR(255) ,
	PRIMARY KEY (`id`)  );

-- exemplo de URL inicial
INSERT INTO `webx`.`urls`(url) VALUES('https://www.google.com.br/?gfe_rd=ctrl&ei=9xcNU6uRGYfJ8Qa-moHwAg&gws_rd=cr#q=webx&safe=off');

## Utilização:
-- Acesse o projeto utlizando o nevegador.
-- No terminal, na pasta raiz do projeto, rode: _ **./app/Console/cake crawler**_.
-- **control + c** _ no terminal para finalizar as buscas na pagina







