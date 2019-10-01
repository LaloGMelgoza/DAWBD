IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Materiales')

DROP TABLE Materiales

CREATE TABLE Materiales
(
    Clave numeric(5) not null,
    Descripcion varchar(50),
    Costo numeric(8,2)
)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Proveedores')

DROP TABLE Proveedores

CREATE TABLE Proveedores
(
    RFC char(13) not null,
    RazonSocial varchar(50)
)

IF EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Proyectos')

DROP TABLE Proyectos

CREATE TABLE Proyectos
(
    Numero numeric(5) not null,
    Denominacion varchar(50)
)

IF EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='Entregan')

DROP TABLE Entregan

CREATE TABLE Entregan
(
    Clave numeric(5) not null,
    RFC CHAR(13) not null,
    Numero numeric(5) not null,
    Fecha DATETIME not null,
    Cantidad numeric(8,2)
)


BULK INSERT a1208964.a1208964.[Materiales] 
  FROM 'e:\wwwroot\rcortese\materiales.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = '\n' 
  )

BULK INSERT a1208964.a1208964.[Proyectos]
  FROM 'e:\wwwroot\rcortese\Proyectos.csv'
  WITH
  (
    CODEPAGE = 'ACP',
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n'
  )

BULK INSERT a1208964.a1208964.[Proveedores]
  FROM 'e:\wwwroot\rcortese\Proveedores.csv'
  WITH
  (
    CODEPAGE = 'ACP',
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n'
  )

SET DATEFORMAT dmy -- especificar formato de la fecha

BULK INSERT a1208964.a1208964.[Entregan]
  FROM 'e:\wwwroot\rcortese\Entregan.csv'
  WITH
  (
    CODEPAGE = 'ACP',
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n'
  ) 


   INSERT INTO Materiales values(1000, 'xxx', 1000) 

   SELECT * FROM MATERIALES

   Delete from Materiales where Clave = 1000 and Costo = 1000 

   SELECT * FROM Materiales

   ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave)

   INSERT INTO Materiales values(1000, 'xxx', 1000) 

   ALTER TABLE Proveedores add constraint llaveProveedores PRIMARY KEY (RFC)

   ALTER TABLE Proyectos add constraint llaveProyectos PRIMARY KEY (Numero) 

   ALTER TABLE Entregan add constraint llaveEntregan PRIMARY KEY (Clave, RFC, Numero, Fecha)

   SELECT * from Materiales
   SELECT * from Entregan
   SELECT * from Proveedores
   SELECT * from Proyectos

   INSERT INTO Entregan values (0, 'xxx', 0, '1-jan-02', 0) 
   
   Delete from Entregan where Clave = 0 

   ALTER TABLE entregan add constraint cfentreganclave foreign key (clave) references Materiales(clave);
   ALTER TABLE entregan add constraint cfentreganrfc foreign key (rfc) references Proveedores(rfc)
   ALTER TABLE entregan add constraint cfentregannumero foreign key (Numero) references Proyectos(Numero);


   INSERT INTO Entregan values (1000, 'AAAA800101', 5000, GETDATE(), 0); 

 Delete from Entregan where Clave = 0 

 ALTER TABLE Entregan ADD CONSTRAINT Cantidad CHECK (Cantidad >= 0)

  INSERT INTO Entregan values (1000, 'AAAA800101', 5000, GETDATE(), -5)
