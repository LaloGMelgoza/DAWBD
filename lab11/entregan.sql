SET DATEFORMAT dmy

BULK INSERT a1701446.a1701446.[Entregan] 
   FROM 'e:\wwwroot\rcortese\entregan.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
