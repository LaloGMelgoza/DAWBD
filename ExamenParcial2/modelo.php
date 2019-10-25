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
	         $bd = mysqli_connect("localhost","root","","examenTipo");
	    } else if($environment == "PROD") {
	         //TODO: Cambiar la configuración de acuerdo al ambiente de producción
	         $bd = mysqli_connect("localhost","root","passwdadmin","examenTipo");
	    }*/
	    
	    // Change character set to utf8
	    mysqli_set_charset($bd,"utf8");
	   
	    return $bd;
	}

	function closeDB($bd) {
	    
	    mysqli_close($bd);
	}

	function agregarZombie($nombreZombie) {
	    $db = connectDB();
	    $query='INSERT INTO Zombies (Nombre) VALUES (?)';

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

	function agregarEstado() {
		$db = connectDB();
	    $query='INSERT INTO Bitacora (Nombre) VALUES (?),
	    		INSERT INTO R (Nombre) VALUES (?)

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

	function consulta1() {
    
	    $db = connectDB();
	    
	    
	    $query = 'SELECT Nombre FROM Zombies';
	      
	    // Query execution; returns identifier of the result group
	    $registros = $db->query($query);
	    
	    $resultado = '<div class="row"> <div class="col s6 offset-s2"> <table class="striped">
	    				<thead>
					        <tr>
					            <th> Nombre </th>
					            <th> Historial </th>
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


?>