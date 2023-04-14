CREATE DATABASE mitoMaiz;

USE mitoMaiz;


  CREATE TABLE Usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(200) NOT NULL,
    apellido VARCHAR(200) NOT NULL,
    usuario VARCHAR(200) NOT NULL,
    pass VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
  );

  CREATE TABLE Cultivos (
    idcultivo INT NOT NULL AUTO_INCREMENT,
    idUser INT NOT NULL,
    fechaCosecha DATE NOT NULL,
    cantidadCosechada INT NOT NULL,
    departamento VARCHAR(20) NOT NULL,
    tipoCultivo VARCHAR(50) NOT NULL,
    metodoCultivo VARCHAR(100) NOT NULL,
    areaCultivada FLOAT NOT NULL,
    PRIMARY KEY (idcultivo),
    FOREIGN KEY (idUser) REFERENCES Usuarios(id)
  );

CREATE TABLE Leyendas (
  idLeyenda INT NOT NULL AUTO_INCREMENT,
  userId INT NOT NULL,
  nombreLeye  VARCHAR(225) NOT NULL,
  nombreDios VARCHAR(50) NOT NULL,
  cultura VARCHAR(50) NOT NULL,
  apodo  VARCHAR(50) NOT NULL,
  descripcion TEXT NOT NULL,
  PRIMARY KEY (idLeyenda),
  FOREIGN KEY (userId) REFERENCES Usuarios(id)
);

