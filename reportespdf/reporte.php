<?php
require('fpdf/fpdf.php');
class PDF extends fpdf
{
    function Header()
    {
        $this->Image('img/top.png',10,4,190,30);
    }

    function Footer()
    {
        $this->SetY(-30);
        $this->Image('img/piepag.png',10,260,190,30);
    }
}

$pdf = new PDF();
$pdf->SetFillColor(250,250,120);
$pdf->AddPage();
$pdf->SetFont('times','B',15);
$pdf->Cell(190,20,'',0,1,'C',0);
$pdf->Cell(135,12,utf8_decode('FICHA DE REINSCRIPCIÓN'),0,1,'R',0);
$pdf->SetFont('times','B',10);

$pdf->Cell(75,50,'',0,0,'C',0);
$pdf->Cell(40,50,'FOTO',1,0,'C',0);
$pdf->Cell(75,50,'',0,1,'C',0);

$pdf->Cell(190,3,'',0,1,'C',0);

$pdf->Cell(30,4,'CICLO ESCOLAR',1,0,'R',0);
$pdf->SetFont('times','',10);
$pdf->Cell(30,4,'seleccion',1,0,'L',1);
$pdf->SetFont('times','B',10);
$pdf->Cell(15,4,'CENDI',1,0,'R',0);
$pdf->SetFont('times','',10);
$pdf->Cell(60,4,'seleccion seleccion seleccion',1,1,'L',1);

$pdf->SetFont('times','B',10);
$pdf->Cell(15,4,'Folio:',1,0,'L',0);
$pdf->SetFont('times','',10);
$pdf->Cell(25,4,'seleccion',1,0,'L',1);

$pdf->SetFont('times','B',10);
$pdf->Cell(15,4,'Grupo:',1,0,'L',0);
$pdf->SetFont('times','',10);
$pdf->Cell(25,4,'seleccion',1,1,'L',1);
$pdf->SetFont('times','B',10);
$pdf->Cell(200,12,utf8_decode('DATOS DEL NIÑO O DE LA NIÑA'),0,1,'L',0);
$pdf->SetFont('times','',10);
$pdf->Cell(64,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,1,'L',1);

$pdf->Cell(64,4,'Primer apellido',1,0,'C');
$pdf->Cell(63,4,'Segundo apellido',1,0,'C');
$pdf->Cell(63,4,'Nombres(s)',1,1,'C');

$pdf->Cell(45,4,utf8_decode('Fecha de Nacimiento:'),1,0,'C');
$pdf->Cell(11,4,utf8_decode('Día:'),1,0,'C');
$pdf->Cell(10,4,'',1,0,'C',1);
$pdf->Cell(16,4,'Mes:',1,0,'C');
$pdf->Cell(15,4,'',1,0,'C',1);
$pdf->Cell(13,4,utf8_decode('Año:'),1,0,'C');
$pdf->Cell(12,4,'',1,0,'C',1);
$pdf->Cell(16,4,'Edad:',1,0,'C');
$pdf->Cell(13,4,utf8_decode('Años:'),1,0,'C');
$pdf->Cell(13,4,'',1,0,'C',1);
$pdf->Cell(13,4,'Mes:',1,0,'C');
$pdf->Cell(13,4,'',1,1,'C',1);
$pdf->Cell(40,4,'CURP',1,0,'C');
$pdf->Cell(120,4,'',1,1,'C',1);



$pdf->SetFont('times','B',10);
$pdf->Cell(200,12,utf8_decode('DATOS DEL O LA DERECHOHABIENTE:'),0,1,'L',0);
$pdf->SetFont('times','',10);
$pdf->Cell(64,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,1,'L',1);

$pdf->Cell(64,4,'Primer apellido',1,0,'C');
$pdf->Cell(63,4,'Segundo apellido',1,0,'C');
$pdf->Cell(63,4,'Nombres(s)',1,1,'C');

$pdf->Cell(20,4,'Domicilio',1,0,'C');
$pdf->Cell(64,4,'',1,0,'C',1);
$pdf->Cell(21.5,4,'',1,0,'C',1);
$pdf->Cell(21.5,4,'',1,0,'C',1);
$pdf->Cell(63,4,'',1,1,'C',1);

$pdf->Cell(20,4,'particular',1,0,'C');
$pdf->Cell(64,4,'Calle',1,0,'C');
$pdf->Cell(21.5,4,utf8_decode('Nº Ext.'),1,0,'C');
$pdf->Cell(21.5,4,utf8_decode('Nº Int.'),1,0,'C');
$pdf->Cell(63,4,'Colonia',1,1,'C');

$pdf->Cell(42,4,'',1,0,'C',1);
$pdf->Cell(42,4,'',1,0,'C',1);
$pdf->Cell(21.5,4,'',1,0,'C',1);
$pdf->Cell(42.5,4,'',1,0,'C',1);
$pdf->Cell(42,4,'',1,1,'C',1);

$pdf->Cell(42,4,'Alcaldia o municipio',1,0,'C');
$pdf->Cell(42,4,'Entidad Federativa',1,0,'C');
$pdf->Cell(21.5,4,'C.P.',1,0,'C');
$pdf->Cell(42.5,4,utf8_decode('Teléfono fijo'),1,0,'C');
$pdf->Cell(42,4,utf8_decode('Teléfono celular'),1,1,'C');

$pdf->Cell(64,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,1,'L',1);

$pdf->Cell(64,4,utf8_decode('Correo electónico'),1,0,'C');
$pdf->Cell(63,4,utf8_decode('Ocupación'),1,0,'C');
$pdf->Cell(63,4,'CURP',1,1,'C');

$pdf->Cell(64,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,1,'L',1);

$pdf->Cell(64,4,'Nombre de plaza o puesto',1,0,'C');
$pdf->Cell(63,4,'Sueldo mensual',1,0,'C');
$pdf->Cell(63,4,utf8_decode('Número de empleado'),1,1,'C');

$pdf->Cell(190,4,'seleccion',1,1,'L',1);
$pdf->Cell(190,4,utf8_decode('Adscripción (Secretaria,Coordinación,Dirección,Centro,Escuela,etc.)[Iniciales]'),1,1,'C');

$pdf->Cell(190,4,'seleccion',1,1,'L',1);
$pdf->Cell(190,4,utf8_decode('Nombre y cargo de su jefe o jefa inmediato'),1,1,'C');

$pdf->Cell(150,4,'seleccion',1,0,'L',1);
$pdf->Cell(40,4,'seleccion',1,1,'L',1);
$pdf->Cell(150,4,'Horario de trabajo (Ej. PAAE 07.00-15.00. Docente 17:12)',1,0,'C');
$pdf->Cell(40,4,utf8_decode('Extensión'),1,1,'C');

$pdf->SetFont('times','B',10);
$pdf->Cell(200,12,utf8_decode('DATOS DEL CÓNYUGE (PADRE, MADRE)'),0,1,'L',0);
$pdf->SetFont('times','',10);
$pdf->Cell(64,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,0,'L',1);
$pdf->Cell(63,4,'seleccion',1,1,'L',1);

$pdf->Cell(64,4,'Primer apellido',1,0,'C');
$pdf->Cell(63,4,'Segundo apellido',1,0,'C');
$pdf->Cell(63,4,'Nombres(s)',1,1,'C');

$pdf->Cell(20,4,'Domicilio',1,0,'C');
$pdf->Cell(64,4,'',1,0,'C',1);
$pdf->Cell(21.5,4,'',1,0,'C',1);
$pdf->Cell(21.5,4,'',1,0,'C',1);
$pdf->Cell(63,4,'',1,1,'C',1);

$pdf->Cell(20,4,'particular',1,0,'C');
$pdf->Cell(64,4,'Calle',1,0,'C');
$pdf->Cell(21.5,4,utf8_decode('Nº Ext.'),1,0,'C');
$pdf->Cell(21.5,4,utf8_decode('Nº Int.'),1,0,'C');
$pdf->Cell(63,4,'Colonia',1,1,'C');

$pdf->Cell(42,4,'',1,0,'C',1);
$pdf->Cell(42,4,'',1,0,'C',1);
$pdf->Cell(21.5,4,'',1,0,'C',1);
$pdf->Cell(42.5,4,'',1,0,'C',1);
$pdf->Cell(42,4,'',1,1,'C',1);

$pdf->Cell(42,4,'Alcaldia o municipio',1,0,'C');
$pdf->Cell(42,4,'Entidad Federativa',1,0,'C');
$pdf->Cell(21.5,4,'C.P.',1,0,'C');
$pdf->Cell(42.5,4,utf8_decode('Teléfono fijo'),1,0,'C');
$pdf->Cell(42,4,utf8_decode('Teléfono celular'),1,1,'C');

$pdf->Cell(42,4,'Lugar de trabajo:',1,0,'C');
$pdf->Cell(53,4,'',1,0,'C',1);
$pdf->Cell(42,4,utf8_decode('Ocupación:'),1,0,'C');
$pdf->Cell(53,4,'',1,1,'C',1);

$pdf->Cell(42,4,utf8_decode('Domicilio del trabajo:'),1,0,'C');
$pdf->Cell(148,4,'',1,1,'C',1);

$pdf->Cell(45,4,utf8_decode('Télefono del trabajo:'),1,0,'C');
$pdf->Cell(50,4,'',1,0,'C',1);
$pdf->Cell(45,4,utf8_decode('Télefono del celular:'),1,0,'C');
$pdf->Cell(50,4,'',1,1,'C',1);
$pdf->Cell(42,4,utf8_decode('Religión:'),1,0,'C');
$pdf->Cell(148,4,'',1,0,'C',1);

$pdf->AddPage('P','',0);
$pdf->SetFont('times','B',8);
$pdf->Cell(190,20,'',0,1,'C',0);
$pdf->Cell(200,12,utf8_decode('FOTOGRAFÍAS DE O LA DERECHOHABIENTE, CONYUGE (PADRE,MADRE) Y PERSONA PARA RECOGER AL NIÑO O LA NIÑA'),0,1,'C',0);

$pdf->Cell(20,50,'',0,0,'C',0);
$pdf->Cell(40,50,'FOTO',1,0,'C',0);
$pdf->Cell(20,50,'',0,0,'C',0);
$pdf->Cell(40,50,'FOTO',1,0,'C',0);
$pdf->Cell(20,50,'',0,0,'C',0);
$pdf->Cell(40,50,'FOTO',1,1,'C',0);

$pdf->Cell(20,3,'',0,0,'C',0);
$pdf->Cell(40,3,'DERECHOHABIENTE',0,0,'C');
$pdf->Cell(20,3,'',0,0,'C',0);
$pdf->Cell(40,3,utf8_decode('CÓNYUGE'),0,0,'C');
$pdf->Cell(20,3,'',0,0,'C',0);
$pdf->Cell(40,3,'PERSONA',0,1,'C');

$pdf->Cell(20,3,'',0,0,'C',0);
$pdf->Cell(40,3,'',0,0,'C');
$pdf->Cell(20,3,'',0,0,'C',0);
$pdf->Cell(40,3,utf8_decode('(PADRE, MADRE)'),0,0,'C');
$pdf->Cell(20,3,'',0,0,'C',0);
$pdf->Cell(40,3,'AUTORIZADA',0,1,'C');

$pdf->Cell(190,15,'',0,1,'C');

$pdf->Cell(20,8,'',0,0,'C',0);
$pdf->Cell(60,8,utf8_decode('Ciudad de México a'),0,0,'R');
$pdf->Cell(8,8,'',1,0,'C',1);
$pdf->Cell(8,8,'de',0,0,'C');
$pdf->Cell(20,8,'',1,0,'C',1);
$pdf->Cell(8,8,'de',0,0,'C');
$pdf->Cell(20,8,'',1,1,'C',1);

$pdf->Cell(190,15,'',0,1,'C');

$pdf->Cell(63,8,'',0,0,'C');
$pdf->Cell(64,8,'',1,0,'C',1);
$pdf->Cell(63,8,'',0,1,'C');

$pdf->Cell(63,8,'',0,0,'C');
$pdf->Cell(64,8,'Nombre y Firma del o la derechohabiente',0,0,'C');

$pdf->Cell(63,8,'',0,1,'C');

$pdf->Output();
?>