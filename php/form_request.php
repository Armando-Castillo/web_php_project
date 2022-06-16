<?php
// conexion a la base de datos
include "../db/db.php";
$db = new db();
$db->obtenerConexion();

//INFANTE data
$cendi = $_POST["cendi"];
$foto = $_POST["foto"];
$folio = $_POST["folio"];
$grupo = $_POST["grupo"];
$paternoInf = $_POST["paternoInf"];
$maternoInf = $_POST["maternoInf"];
$nombreInf = $_POST["nombreInf"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$curpInf = $_POST["curpInf"];

$infante = $db->retrieveInfante($cendi);

// session_start();
// if(!empty($al)){
//   if (!empty($_SESSION["admin"])) {
//     header("Location: ../pages/crud_admin.php");
//   } else {
//     header("Location: ../pages/login_alumno.php");
//     session_destroy();
//   }
// }

// $admin = $db->retrieveAdmin("adminESCOM");
// $admin[1];
// $horario = 1;

// for ($i = 1; $i < 48; $i++) {
//   $temp = $db->rExamen($i);
//   if ($temp[3] < 25) {
//     $horario = $i;
//     $db->uExamen($temp[0], $temp[1], $temp[2], $temp[3] + 1, $temp[4]);
//     break;
//   }
// }

$res = $db->createInfante(
  $cendi,
  $foto,
  $folio,
  $grupo,
  $paternoInf,
  $maternoInf,
  $nombreInf,
  $fechaNacimiento,
  $curpInf
);


if (!empty($_SESSION["admin"])) {
  if ($res) {
    $_SESSION["modal"] = "success";
    //header("Location: ../pages/crud_admin.php");
  } else {
    echo $res;
  }
} else {
  if ($res) {
    $_SESSION["active"] = true;
    $_SESSION["idUser"] = $cendi;
    $_SESSION["modal"] = "success";
    //header("Location: ../pages/alumno.php");
  } else {
    echo $res;
  }
}

?>
