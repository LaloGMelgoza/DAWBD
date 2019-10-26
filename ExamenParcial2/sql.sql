CREATE TABLE IF NOT EXISTS Zombies(
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre varchar(30) NOT NULL
) 

CREATE TABLE IF NOT EXISTS Estados(
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Estado varchar(30) NOT NULL 
)

CREATE TABLE IF NOT EXISTS Bitacora(
	IDzombie int NOT NULL ,
	IDestado int NOT NULL ,
	Momento TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (IDzombie) REFERENCES Zombies(ID),
	FOREIGN KEY(IDestado) REFERENCES Estados(ID)
)

INSERT INTO Estados (Estado) VALUES ('Infeccion');
INSERT INTO Estados (Estado) VALUES ('Desorientacion');
INSERT INTO Estados (Estado) VALUES ('Violencia');
INSERT INTO Estados (Estado) VALUES ('Desmayo');
INSERT INTO Estados (Estado) VALUES ('Transformacion');