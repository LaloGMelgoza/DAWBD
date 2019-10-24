<?php 


	/**
	 * Crea una conexión con una base de datos en mysql
	 **/
	function connectDB() {
	    
	    //variable para configurar la conexión a la base de datos dependiendo del ambiente:
	    //DEV: Ambiente de desarrollo
	    //PROD: Ambiente de producción
	    //TEST: Ambiente de pruebas
	    $environment = "DEV";
	    
	    if ($environment == "DEV") {
	         $bd = mysqli_connect("localhost","root","","Albums");
	    } else if($environment == "PROD") {
	         //TODO: Cambiar la configuración de acuerdo al ambiente de producción
	         $bd = mysqli_connect("localhost","root","passwdadmin","Albums");
	    }
	    
	    // Change character set to utf8
	    mysqli_set_charset($bd,"utf8");
	   
	    return $bd;
	}

	function closeDB($bd) {
	    
	    mysqli_close($bd);
	}


	function registraAlbum($albumName,$albumArtist,$albumYear) {
	    $db = connectDB();
	    $query='INSERT INTO Albums (Name,Artist,Year) VALUES (?,?,?)';

	    if (!($statement = $db->prepare($query))) {
	        die("No se pudo preparar la consulta para la bd: (" . $db->errno . ") " . $db->error);

	    }
	    if (!$statement->bind_param("sss", $albumName,$albumArtist,$albumYear)) {
	        die("Falló la vinculación de los parámetros: (" . $statement->errno . ") " . $statement->error);

	    }
	    
	    if (!$statement->execute()) {
	        die("Falló la ejecución de la consulta: (" . $statement->errno . ") " . $statement->error);
	    } 

	    closeDB($db);
	}


	function consultaAlbum() {
    
	    $db = connectDB();
	    
	    
	    $query = 'SELECT Name,Artist,Year FROM Albums';
	      
	    // Query execution; returns identifier of the result group
	    $registros = $db->query($query);
	    
	    $resultado = '<div class="row"> <div class="col s6 offset-s3"> <table class="striped">
	    				<thead>
					        <tr>
					            <th> Name </th>
					            <th> Artist </th>
					            <th> Year </th>
					        </tr>
				        </thead>';

	     // cycle to explode every line of the results
	    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
	        $resultado .= '
	            <tr>
					<td>'.$fila["Name"].'</td>
					<td>'.$fila["Artist"].'</td>
					<td>'.$fila["Year"].'</td>
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


	function consultaAlbumMuse() {
    
	    $db = connectDB();
	    
	    
	    $query = 'SELECT Name,Artist,Year
	    			FROM Albums
	    			WHERE albumArtist = "Muse"';
	      
	    // Query execution; returns identifier of the result group
	    $registros = $db->query($query);
	    
	    $resultado = '<div class="row"> <div class="col s6 offset-s3"> <table class="striped">
	    				<thead>
					        <tr>
					            <th> Name </th>
					            <th> Artist </th>
					            <th> Year </th>
					        </tr>
				        </thead>';

	     // cycle to explode every line of the results
	    while ($fila = mysqli_fetch_array($registros, MYSQLI_BOTH)) {
	        $resultado .= '
	            <tr>
					<td>'.$fila["Name"].'</td>
					<td>'.$fila["Artist"].'</td>
					<td>'.$fila["Year"].'</td>
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


	function eliminaAlbum($ID) {
	    $db = connectDB();
	    $query='DELETE FROM Albums WHERE ID=$ID';

	    if (!($statement = $db->prepare($query))) {
	        die("No se pudo preparar la consulta para la bd: (" . $db->errno . ") " . $db->error);

	    }
	    if (!$statement->bind_param("sss", $albumName,$albumArtist,$albumYear)) {
	        die("Falló la vinculación de los parámetros: (" . $statement->errno . ") " . $statement->error);

	    }
	    
	    if (!$statement->execute()) {
	        die("Falló la ejecución de la consulta: (" . $statement->errno . ") " . $statement->error);
	    } 

	    closeDB($db);
	}

?>