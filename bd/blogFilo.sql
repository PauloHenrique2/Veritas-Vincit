CREATE TABLE Usuarios
(
 idUsuario INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(80),
 login VARCHAR(50),
 senha VARCHAR(16)
);

SELECT * FROM Usuarios WHERE idUsuario = 1;

CREATE TABLE Postagens
(
 idPostagem INT PRIMARY KEY AUTO_INCREMENT,
 titulo VARCHAR(50),
 conteudo VARCHAR(500),
 dataHorario DATETIME
);

CREATE TABLE Comentarios
(
 idComentario INT PRIMARY KEY AUTO_INCREMENT,
 idPostagem INT NOT NULL,
 conteudo VARCHAR(100),
 dataHorario DATETIME,
 FOREIGN KEY (idPostagem) REFERENCES Postagens(idPostagem)
);