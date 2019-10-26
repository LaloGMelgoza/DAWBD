<?php 

	function connectDB() {
	    
	    //variable para configurar la conexión a la base de datos dependiendo del ambiente:
	    //DEV: Ambiente de desarrollo
	    //PROD: Ambiente de producción
	    //TEST: Ambiente de pruebas
	    $environment = "DEV";
	    $servername = "mysql1008.mochahost.com";
	    $username = "dawbdorg_1701446";
	    $password = "1701446";
	    $dbname = "dawbdorg_A01701446";

	    
	    if ($environment == "DEV") {
	         $bd = mysqli_connect($servername,$username,$password,$dbname);
	    } else if($environment == "PROD") {
	         //TODO: Cambiar la configuración de acuerdo al ambiente de producción
	         $bd = mysqli_connect("localhost","root","passwdadmin","dawbdorg_A01701446");
	    }
	    

	    /*
	    if ($environment == "DEV") {
	         $bd = mysqli_connect("localhost","root","","ExamenParcial2");
	    } else if($environment == "PROD") {
	         //TODO: Cambiar la configuración de acuerdo al ambiente de producción
	         $bd = mysqli_connect("localhost","root","passwdadmin","ExamenParcial2");
	    }
	    */
	    // Change character set to utf8
	    mysqli_set_charset($bd,"utf8");
	   
	    return $bd;
	}


	function closeDB($bd) {
	    
	    mysqli_close($bd);
	}


	function desplieguePantallaPrincipal() {

		$db = connectDB();
	    $resultado = array();
	    $query = "
	    	SELECT ID, Nombre 
	    	FROM Zombies
	    ";

	    $registros = $db->query($query);
	    
	    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
	       array_push($resultado, array($fila["ID"],$fila["Nombre"]));
	    }
	    $regresar='
	    	<table>
	    		<thead>
	    			<tr>
	    				<td><b>Nombre</b></td>
	    				<td><b>Bitacora</b></td>
	    			</tr>
	    		</thead>

	    		<tbody>';
	    
	    for($i = 0; $i < count($resultado); $i++){
	        
	        $ID=$resultado[$i][0];
	        $query1 = "
	        	SELECT Estado,Momento
	        	FROM Bitacora,Estados
	        	WHERE IDzombie='" . $ID . "' AND Estados.ID=IDestado
	        ";

	        $resultado2 = array();
	        $registros2 = $db->query($query1);

	    if($registros2){

	        while ($fila = mysqli_fetch_array($registros2, MYSQLI_BOTH)) {
	            array_push($resultado2, array($fila["Estado"],$fila["Momento"]));
	        }
	        $regresar .= "<tr><td>".$resultado[$i][1]."</td><td>";

	        for($j=0; $j < count($resultado2); $j++){
	            $regresar.= $resultado2[$j][0]."  ".$resultado2[$j][1]."<br/>";
	        }
	        $regresar.="</td></tr>";
	    } else{
	        	$regresar.="<tr><td>".$resultado[$i][1]."</td><td>";
	            $regresar.="</td></tr>";
	    }
	    }

    	$regresar.="</tbody></table>";
  
	   	closeDB($db);
	   	echo $regresar;
	}


	function agregarZombie($nombreZombie) {
	    $db = connectDB();
	    $query='
	    	INSERT INTO Zombies (Nombre) VALUES (?)
	    ';

	    if (!($statement = $db->prepare($query))) {
	        die("No se pudo preparar la consulta para la bd: (" . $db->errno . ") " . $db->error);

	    }
	    if (!$statement->bind_param("s", $nombreZombie)) {
	        die("Falló la vinculación de los parámetros: (" . $statement->errno . ") " . $statement->error);

	    }
	    
	    if (!$statement->execute()) {
	        die("Falló la ejecución de la consulta: (" . $statement->errno . ") " . $statement->error);
	    } 

	    closeDB($db);
	}


	function regresarZombies(){
        $db = connectDB();
        $query="SELECT Nombre,ID FROM Zombies";
        $registros = $db->query($query);
        $datos=array();
        $entro=0;

        while($row = mysqli_fetch_array($registros,MYSQLI_BOTH)){
          array_push($datos, array($row["Nombre"],$row["ID"]));
        }
        for($i=0; $i<count($datos); $i++)
        {
            $razon=$datos[$i][0];
            $id=$datos[$i][1];
            echo"<option value='$id'> $razon</option>";
        }
        closeDB($db);
    }

/*
	function regresarEstados(){
        $db = connectDB();
        $query="SELECT Estado,ID FROM Estado";
        $registros = $db->query($query);
        $datos=array();
        $entro=0;

        while($row = mysqli_fetch_array($registros,MYSQLI_BOTH)){
          array_push($datos, array($row["Estado"],$row["ID"]));
        }
        for($i=0; $i<count($datos); $i++)
        {
            $razon=$datos[$i][0];
            $id=$datos[$i][1];
            echo"<option value='$id'> $razon</option>";
        }
        closeDB($db);
    }*/

    function regresarEstados(){
		$db = connectDB();
		$query="SELECT Estado,ID FROM Estados";
		$registros = $db->query($query);
		$datos=array();
		$regresar='<table><tbody>';
		    
		    while($row = mysqli_fetch_array($registros,MYSQLI_BOTH)){
		      array_push($datos, array($row["Estado"],$row["ID"]));
		    }
		     for($i=0; $i<count($datos); $i++)
		    {
		        $estado=$datos[$i][0];
		        $idestado=$datos[$i][1];
		        $regresar.="<tr>
		        <td><p>
		                <label>
		                <input name= 'Estado' type=radio value='$idestado' />
		                
		                <span></span>
		                </label>
		            </p></td> 
		        
		        <td>$estado</td></tr>";
    }
    
    $regresar.='</tbody> </table>';
    closeDB($db);
    echo $regresar;
}
	function regresarEstado(){
	        $db = connectDB();
	        $query="SELECT Estado,ID FROM Estados";
	        $registros = $db->query($query);
	        $datos=array();
	        $entro=0;

	        while($row = mysqli_fetch_array($registros,MYSQLI_BOTH)){
	          array_push($datos, array($row["Estado"],$row["ID"]));
	        }
	        for($i=0; $i<count($datos); $i++)
	        {
	            $razon=$datos[$i][0];
	            $id=$datos[$i][1];
	            echo"<option value='$id'> $razon</option>";
	        }
	        closeDB($db);
	    }


	function agregarAbitacora($Zombie,$Estado){
        $db = connectDB();
    	$query='INSERT INTO Bitacora (IDzombie,IDestado) VALUES (?,?) ';

	    if (!($statement = $db->prepare($query))) {
	        die("No se pudo preparar la consulta para la bd: (" . $db->errno . ") " . $db->error);

	    }

	    if (!$statement->bind_param("ss", $Zombie,$Estado)) {
	        die("Falló la vinculación de los parámetros: (" . $statement->errno . ") " . $statement->error);
	    }
	    
	    if (!$statement->execute()) {
	        die("Falló la ejecución de la consulta: (" . $statement->errno . ") " . $statement->error);
	    } 

	    closeDB($db);
    }


	function consulta1() {
    
	    $db = connectDB();
	    
	    
	    $query = 'SELECT Nombre FROM Zombies';
	      
	    // Query execution; returns IDentifier of the result group
	    $registros = $db->query($query);
	    
	    $resultado = '<div class="row"> <div class="col s6 offset-s2"> <table class="striped">
	    				<thead>
					        <tr>
					            <th> Nombre </th>
					            <th> Bitacora </th>
					        </tr>
				        </thead>';

	     // cycle to explode every line of the results
	    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
	        $resultado .= '
	            <tr>
					<td>'.$fila["Nombre"].'</td>
				</tr>

			';
	    } 
	    $resultado .= '</table> </div> </div>';
	    // it releases the associated results
	    mysqli_free_result($registros);
	    // Options: MYSQLI_NUM to use only numeric indexes
	    // MYSQLI_ASSOC to use only name (string) indexes
	    // MYSQLI_BOTH, to use both

	    closeDB($db);
	    
	    return $resultado;
	}


	function consulta2() {
    	$db = connectDB();
    	$resultado ="<p>Zombies registrados hasta el momento: ";
    	$query ="SELECT COUNT(IDzombie) AS 'cuentaZombies' FROM Bitacora";
    	$registros1 = $db->query($query);

    	while ($fila = mysqli_fetch_array($registros1, MYSQLI_BOTH)) {
       		$resultado.=$fila["cuentaZombies"];
   		}

	    $resultado.='
	    	</p>
	    		<table>
		    		<thead>
		    			<tr>
		    				<td>Estado</td>
		    				<td>Cantidad</td>
		    			</tr>
		    		</thead>

	    		<tbody>
	    ';

	    $datos = array();
	   	$query1 = "SELECT Estado, COUNT(IDestado) AS 'cuentaEstados' FROM Estados,Bitacora WHERE ID=IDestado GROUP BY Estado";
	  	$registros1 = $db->query($query1);
	    
	    while($row = mysqli_fetch_array($registros1,MYSQLI_BOTH)){
	        array_push($datos, array($row["Estado"],$row["cuentaEstados"]));
	    }
	      
	    
	    for($i=0;$i<count($datos); $i++){
	        $Estado = $datos[$i][0];
	        $CantIDad = $datos[$i][1];
	        
	        $resultado.="
	        	<tr>
	        		<td>".$Estado."</td>
	        		<td>".$CantIDad."</td>
	        	</tr>
	        ";
	    }
	    $resultado.="</tbody></table>";
	    echo $resultado;
    
	}


	function consulta3() {
	     $db = connectDB();
	    
	    $resultado = array();
	    $query = "SELECT ID, Nombre FROM Zombies";
	    $registros = $db->query($query);
	    
	    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
	       array_push($resultado, array($fila["ID"],$fila["Nombre"]));
	   	}

	    $regresar='
	    	<table>
	    		<thead>
	    			<tr>
	    				<td>Nombre</td>
	    				<td>Bitacora</td>
	    			</tr>
	    		</thead>
	    	<tbody>
	    ';
	    
	    for($i = 0; $i < count($resultado); $i++){
	        
	        $ID=$resultado[$i][0];
	        $query1 = "
	        	SELECT Estado,Momento
	        	FROM Bitacora,Estados
	        	WHERE IDzombie='" . $ID . "' AND Estados.ID=IDestado
	        	ORDER BY Momento DESC
	        ";

	        $resultado2 = array();
	        $registros2 = $db->query($query1);

	    if($registros2){
	           while ($fila = mysqli_fetch_array($registros2, MYSQLI_BOTH)) {
	               array_push($resultado2, array($fila["Estado"],$fila["Momento"]));
	           }
	            $regresar.="<tr><td>".$resultado[$i][1]."</td><td>";

	            for($j=0; $j < count($resultado2); $j++){
	                $regresar.= $resultado2[$j][0]."  ".$resultado2[$j][1]."<br/>";
	            }
	            $regresar.="</td></tr>";
	        }
	        else{
	             $regresar.="<tr><td>".$resultado[$i][1]."</td><td>";
	             $regresar.="</td></tr>";
	        }
	    }
	    $regresar.="</tbody></table>";
	  
	   closeDB($db);
	   echo $regresar; 
	}

	if(isset($_GET['variable'])){
    $parametro = $_GET['variable'];
     $db = connectDB();
    
    $query=" SELECT Nombre FROM Zombies,Bitacora WHERE id=IDzombie AND IDestado='".$_GET["variable"]."'";
    $registros = $db->query($query);
    $datos=array();
    
    $query1 ="SELECT COUNT(IDzombie) AS 'cuentaZombies' FROM Bitacora WHERE IDestado='".$_GET["variable"]."'";
    $registros1 = $db->query($query1);
    while ($fila = mysqli_fetch_array($registros1, MYSQLI_BOTH)) {
       $contador=$fila["cuentaZombies"];
   }
     $regresar='<table><thead><tr><td>Nombres Zombies</td><td>Cantidad de zombies</td></tr></thead><tbody>';
    
    while($row = mysqli_fetch_array($registros,MYSQLI_BOTH)){
      array_push($datos, array($row["Nombre"]));
    }
    $regresar.='<tr><td>';
     for($i=0; $i<count($datos); $i++){
        $razon=$datos[$i][0];
        $regresar.=$razon;
        $regresar.='<br>';
    }
    
    $regresar.="</td><td>$contador</td></tr>";
    $regresar.="</tbody></table>";

    closeDB($db);
    echo $regresar;
}



?>