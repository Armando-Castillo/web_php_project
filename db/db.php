<?php

class db
{
  public $username;
  public $password;
  public $server;
  public $nameDB;

  public $conexion;

  public function __construct()
  {
    //Colocar los datos de su respectivo server de MySQL
    $this->username = "root"; // <--
    $this->password = ""; // <--
    $this->server = "localhost";
    $this->nameDB = "proyectoWEB";
  }

  public function obtenerConexion()
  {
    $this->conexion = mysqli_connect(
      $this->server,
      $this->username,
      $this->password,
      $this->nameDB
    );
  }

  //////////////////// Infante /////////////

  public function createInfante(
    $folio,
    $cendi,
    $foto,
    $grupo,
    $paternoInf,
    $maternoInf,
    $nombreInf,
    $fechaNacimiento,
    $curpInf
  ) {
    $consulta = "INSERT INTO Infante (folio, cendi, foto, grupo, paternoInf, maternoInf, nombreInf, fechaNacimiento, curpInf) 
		VALUES ('$folio', '$cendi', '$foto', '$grupo', '$paternoInf', '$maternoInf', '$nombreInf', '$fechaNacimiento', '$curpInf')";

    $resultado = mysqli_query($this->conexion, $consulta);
    if ($resultado) {
      return true;
    } else {
      return false;
    }
  }

  public function searchInfante($busqueda)
  {
    $consulta = "SELECT * FROM Infante";

    if ($busqueda != "") {
      $consulta =
        "SELECT * FROM Infante WHERE folio LIKE '%" .
        $busqueda .
        "%' OR nombreInf LIKE '%" .
        $busqueda .
        "%' OR paternoInf LIKE '%" .
        $busqueda .
        "%' OR curpInf LIKE '%" .
        $busqueda .
        "%'";
    }

    $resultado = mysqli_query($this->conexion, $consulta);

    $rows = [];
    while ($r = mysqli_fetch_assoc($resultado)) {
      $rows[] = $r;
    }
    return $rows;
  }

  public function retrieveInfante($folio)
  {
    $consulta = "SELECT * FROM Infante WHERE cendi='$folio'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  public function updateInfante(
    $cendi,
    $foto,
    $folio,
    $grupo,
    $paternoInf,
    $maternoInf,
    $nombreInf,
    $fechaNacimiento,
    $curpInf
  ) {
    $consulta = "UPDATE Infante SET foto = '$foto', cendi = '$cendi', grupo = '$grupo', paternoInf = '$paternoInf',
					maternoInf = '$maternoInf', nombreInf = '$nombreInf', fechaNacimiento = '$fechaNacimiento', curpInf = '$curpInf',
          WHERE folio = '$folio'";
    $resultado = mysqli_query($this->conexion, $consulta);
    if ($resultado) {
      return true;
    } else {
      return false;
    }
  }

  public function deleteInfante($folio)
  {
    $consulta = "DELETE FROM Infante WHERE folio='$folio'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  ////////////// Administrador /////////////

  public function createAdministrador($contrasenaAdmin, $noCuentaAdmin)
  {
    $consulta = "INSERT INTO Administrador (contrasenaAdmin, noCuentaAdmin) VALUES ('$contrasenaAdmin','$noCuentaAdmin')";
    $resultado = mysqli_query($this->conexion, $consulta);
    if ($resultado) { ?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php } else { ?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php }
  }

  public function retrieveAdmin($noCuentaAdmin)
  {
    $consulta = "SELECT * FROM Administrador WHERE noCuentaAdmin='$noCuentaAdmin'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  public function updateAdmin($contrasenaAdmin, $noCuentaAdmin)
  {
    $consulta = "UPDATE Administrador SET contrasenaAdmin = '$contrasenaAdmin' WHERE noCuentaAdmin = '$noCuentaAdmin'";
    $resultado = mysqli_query($this->conexion, $consulta);
    if ($resultado) { ?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php } else { ?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php }
  }

  public function deleteAdmin($noCuentaAdmin)
  {
    $consulta = "DELETE FROM Administrador WHERE noCuentaAdmin ='$noCuentaAdmin'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  //------------------------------------Examen

  public function cExamen($salon, $horario, $grupo, $cupo, $ficha)
  {
    $consulta = "INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ('$salon','$horario', '$grupo', '$cupo', '$ficha')";
    $resultado = mysqli_query($this->conexion, $consulta);
    if ($resultado) { ?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php } else { ?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php }
  }

  public function rExamen($ficha)
  {
    $consulta = "SELECT * FROM examen WHERE ficha='$ficha'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  public function uExamen($salon, $horario, $grupo, $cupo, $ficha)
  {
    $consulta = "UPDATE examen SET salon = '$salon', horario = '$horario', grupo = '$grupo', cupo = '$cupo' WHERE ficha = '$ficha'";
    $resultado = mysqli_query($this->conexion, $consulta);
  }

  public function dExamen($ficha)
  {
    $consulta = "DELETE FROM examen WHERE ficha ='$ficha'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  public function rEscu($id){
    $consulta = "SELECT * FROM escuela WHERE idEscu='$id'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }

  public function rEnti($id){
    $consulta = "SELECT * FROM entidad WHERE idEnti='$id'";
    $resultado = mysqli_query($this->conexion, $consulta);
    $columna = mysqli_fetch_array($resultado);
    return $columna;
  }


}
?>
