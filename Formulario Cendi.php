
<!DOCTYPE html>
<html>

<head>
    <title>.:Formularios:.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
    </style>
    <script src="jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function () {
            $('input:radio[name=respuesta-conyuge]').click(function () {
                if ($('input:radio[name=respuesta-conyuge]:checked').val() != "no") {
                    $('#form-datos-conyuge').css('display', 'block');
                } else {
                    $('#form-datos-conyuge').css('display', 'none');
                }
            });
        });

        function validarEstructuraEmail(email) {
            return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <form action="./php/form_request.php" method="POST" id="form">
        <div>
            <h1>Ficha de inscripción</h1>
            <div>
                <label for="ciclo_escolar">Ciclo Escolar: 2022-2023</label>
            </div>
            <div>
                <label for="cendi">CENDI:</label>
                <select id="cendi" name="cendi">
                    <option selected disabled value="0">-- Seleciona uno --</option>
                    <option selected disabled value="0">CENDI Clementina Batalla de Bassols</option>
                    <option selected disabled value="0">CENDI Eva Sámano de López Mateos</option>
                    <option selected disabled value="0">CENDI Laura Pérez de Bátiz</option>
                    <option selected disabled value="0">CENDI Margarita Salazar de Erro</option>
                    <option value="CENDI Amalia Solórzano de Cárdenas">CENDI Amalia Solórzano de Cárdenas</option>
                </select>
            </div>
            <div>
                <label for="img0">Foto del niño o de la niña:</label>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>
            <div>
                <label for="">Folio (boleta): </label>
                <input type="text" name="folio" id="folio" maxlength="10">
            </div>
            <div>
                <label for="grupo">Grupo: </label>
                <input type="text" id="grupo" name="grupo"/>
            </div>
        </div>
        <h2>DATOS DEL NIÑO O DE LA NIÑA:</h2>
        <div>
            <div>
                <label for="ape1">Primer Apellido: </label>
                <input type="text" id="paternoInf" name="paternoInf" />
            </div>
            <div>
                <label for="ape2">Segundo Apellido: </label>
                <input type="text" id="maternoInf" name="maternoInf" />
            </div>
            <div>
                <label for="nombres">Nombre (s): </label>
                <input type="text" id="nombreInf" name="nombreInf" />
            </div>
            <div>
                <label for="nacimiento">Fecha de nacimiento: </label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" />
            </div>
            <div>
                <label for="edad_anos">Edad en años:</label>
                <input type="text" id="edad_anos" disabled />
                <label for="edad_meses">Edad en meses:</label>
                <input type="text" id="edad_meses" disabled />
            </div>
            <div>
                <label for="curp">CURP: </label>
                <input type="text" id="curpInf" name="curpInf" maxlength="18" />
            </div>
        </div>
        <!-- <h2>DATOS DEL O LA DERECHOHABIENTE:</h2>
        <div>
            <div>
                <label for="dape1">Primer Apellido: </label>
                <input type="text" id="dape1" />
            </div>
            <div>
                <label for="dape2">Segundo Apellido: </label>
                <input type="text" id="dape2" />
            </div>
            <div>
                <label for="dnombres">Nombre (s): </label>
                <input type="text" id="dnombres" />
            </div>
            <h3>Domicilio particular:</h3>
            <div>
                <label for="dcalle">Calle: </label>
                <input type="text" id="dcalle" />
            </div>
            <div>
                <label for="dext">no. Ext: </label>
                <input type="text" id="dext" />
            </div>
            <div>
                <label for="dint">no. Int.: </label>
                <input type="text" id="dint" />
            </div>
            <div>
                <label for="dcolonia">Colonia: </label>
                <input type="text" id="dcolonia" />
            </div>
            <div>
                <label for="dalcaldia">Alcaldía o municipio: </label>
                <input type="text" id="dalcaldia" />
            </div>
            <div>
                <label for="estado">Estado de la República</label>
                <select id="estado">
                    <option selected disabled value="0">-- Seleciona uno --</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="CDMX">Ciudad de México</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Durango">Durango</option>
                    <option value="Estado de México">Estado de México</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                </select>
            </div>
            <div>
                <label for="dcp">C.P.: </label>
                <input type="number" id="dcp" />
            </div>
            <div>
                <label for="dtelfijo">Teléfono fijo: </label>
                <input type="tel" id="dtelfijo" maxlength="10" />
            </div>
            <div>
                <label for="dtelcel">Teléfono celular: </label>
                <input type="tel" id="dtelcel" maxlength="10" />
            </div>
            <div>
                <label for="dcorreo">Correo electr&oacute;nico: </label>
                <input type="email" id="dcorreo" />
            </div>
            <div>
                <label for="docupacion">Ocupación:</label>
                <select id="docupacion">
                    <option selected disabled value="0">-- Seleciona uno --</option>
                    <option value="Docente">Docente</option>
                    <option value="PAAE">PAAE</option>
                    <option value="Funcionario(a)">Funcionario(a)</option>
                </select>
            </div>
            <div>
                <label for="dcurp">CURP: </label>
                <input type="text" id="dcurp" maxlength="18" />
            </div>
            <div>
                <label for="dplaza">Nombre de la plaza o puesto: </label>
                <input type="text" id="dplaza" />
            </div>
            <div>
                <label for="dsueldo">Sueldo mensual: </label>
                <input type="number" id="dsueldo" />
            </div>
            <div>
                <label for="dnumempleado">Número de empleado: (de 5 a 7 caracteres): </label>
                <input type="text" id="dnumempleado" minlength="5" maxlength="7" />
            </div>
            <div>
                <label for="dadscripcion">Adscripción: </label>
                <select id="dadscripcion">
                    <option selected disabled value="0">--Selecciona una opción--</option>
                    <option value="CECyT#1-Gonzalo-Vázquez-Vela">CECyT #1 Gonzalo Vázquez Vela </option>
                    <option value="CECyT#2-Miguel-Bernard">CECyT #2 Miguel Bernard </option>
                    <option value="CECyT#3-Estanislao-Ramirez-Ruíz">CECyT #3 Estanislao Ramirez Ruíz </option>
                    <option value="CECyT#4-Lázaro-Cárdenas">CECyT #4 Lázaro Cárdenas </option>
                    <option value="CECyT#5-Benito-Juárez">CECyT #5 Benito Juárez </option>
                    <option value="CECyT#6-Miguel-Othón-de-Mendizábal">CECyT #6 Miguel Othón de Mendizábal </option>
                    <option value="CECyT#7-Cuauhtémoc">CECyT #7 Cuauhtémoc </option>
                    <option value="CECyT#8-Narciso-Bassols">CECyT #8 Narciso Bassols </option>
                    <option value="CECyT#9-Juan-de-Dios-Bátiz">CECyT #9 Juan de Dios Bátiz </option>
                    <option value="CECyT#10-Carlos-Vallejo-Márquez">CECyT #10 Carlos Vallejo Márquez </option>
                    <option value="CECyT#11-Wilfrido-Massieu">CECyT #11 Wilfrido Massieu </option>
                    <option value="CECyT#12-José-María-Morelos">CECyT #12 José María Morelos </option>
                    <option value="CECyT#13-Ricardo-Flores-Magón">CECyT #13 Ricardo Flores Magón </option>
                    <option value="CECyT#14-Luis-Enrique-Erro">CECyT #14 Luis Enrique Erro </option>
                    <option value="CECyT#15-Diódoro-Antúnez-Echegaray">CECyT #15 Diódoro Antúnez Echegaray </option>
                    <option value="CECyT#16-Hidalgo">CECyT #16 Hidalgo </option>
                    <option value="CECyT#17-León-Guanajuato">CECyT #17 León, Guanajuato </option>
                    <option value="CECyT#18-Zacatecas">CECyT #18 Zacatecas </option>
                    <option value="CECyT#19-Leona-Vicario">CECyT #19 Leona Vicario </option>
                    <option value="CET-1-Walter-Cross-Buchanan">CET 1 Walter Cross Buchanan </option>
                    <option value="CICS-Unidad-Santo-Tomás">CICS Unidad Santo Tomás </option>
                    <option value="CICS-Unidad-Milpa-Alta">CICS Unidad Milpa Alta </option>
                    <option value="ENBA">ENBA </option>
                    <option value="ENCB">ENCB </option>
                    <option value="ENMyH">ENMyH </option>
                    <option value="ESCA-Unidad-Santo-Tomás">ESCA Unidad Santo Tomás </option>
                    <option value="ESCA-Unidad-Tepepan">ESCA Unidad Tepepan </option>
                    <option value="ESCOM">ESCOM </option>
                    <option value="ESE">ESE </option>
                    <option value="ESEO">ESEO </option>
                    <option value="ESFM">ESFM </option>
                    <option value="ESIME-Unidad-Zacatenco">ESIME Unidad Zacatenco </option>
                    <option value="ESIME-Unidad-Azcapotzalco">ESIME Unidad Azcapotzalco </option>
                    <option value="ESIME-Unidad-Culhuacán">ESIME Unidad Culhuacán </option>
                    <option value="ESIME-Unidad-Ticomán">ESIME Unidad Ticomán </option>
                    <option value="ESIQIE">ESIQIE </option>
                    <option value="ESIT">ESIT </option>
                    <option value="ESIA-Unidad-Tecamachalco">ESIA Unidad Tecamachalco </option>
                    <option value="ESIA-Unidad-Ticomán">ESIA Unidad Ticomán </option>
                    <option value="ESIA-Unidad-Zacatenco">ESIA Unidad Zacatenco </option>
                    <option value="ESM">ESM </option>
                    <option value="EST">EST </option>
                    <option value="UPIIC-Campus-Coahuila">UPIIC Campus Coahuila </option>
                    <option value="UPIBI">UPIBI </option>
                    <option value="UPIIG-Campus-Guanajuato">UPIIG Campus Guanajuato </option>
                    <option value="UPIIZ-Campus-Zacatecas">UPIIZ Campus Zacatecas </option>
                    <option value="UPIIH-Campus-Hidalgo">UPIIH Campus Hidalgo </option>
                    <option value="UPIIP-Campus-Palenque">UPIIP Campus Palenque </option>
                    <option value="UPIIT-Campus-Tlaxcala">UPIIT Campus Tlaxcala </option>
                    <option value="UPIICSA">UPIICSA </option>
                    <option value="UPIITA">UPIITA </option>
                    <option value="UPIEM">UPIEM </option>
                    <option value="Area-Central">Área Central </option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div>
                <label for="dhorariotrabajo">Horario de trabajo:</label>
                <select id="dhorariotrabajo">
                    <option selected disabled value="0">-- Seleciona uno --</option>
                    <option value="07:00-15:00">07:00 a 15:00</option>
                    <option value="08:00-15:00">08:00 a 15:00</option>
                    <option value="07:00-14:00">07:00 a 14:00</option>
                </select>
            </div>
            <div>
                <label for="dnombre_cargo">Nombre y cargo de tu jefe o jefa inmediato: </label>
                <input type="text" id="dnombre_cargo" />
            </div>
            <div>
                <label for="dextension">Extensión: </label>
                <input type="text" id="dextension" maxlength="5" />
            </div>
            <div>
                <legend>¿Tiene cónyuge?</legend>
                <div>
                    <input type="radio" name="respuesta-conyuge" id="radiosi" value="si"> Sí
                    <input type="radio" name="respuesta-conyuge" id="radiono" value="no"> No
                </div>
            </div>
        </div>

        <div id="form-datos-conyuge">
            <h2>DATOS DEL CÓNYUGE (PADRE, MADRE):</h2>
            <div>
                <label for="cape1">Primer Apellido: </label>
                <input type="text" id="cape1" />
            </div>
            <div>
                <label for="cape2">Segundo Apellido: </label>
                <input type="text" id="cape2" />
            </div>
            <div>
                <label for="cnombres">Nombre (s): </label>
                <input type="text" id="cnombres" />
            </div>
            <h3>Domicilio particular:</h3>
            <div>
                <label for="ccalle">Calle: </label>
                <input type="text" id="ccalle" />
            </div>
            <div>
                <label for="cext">no. Ext: </label>
                <input type="text" id="cext" />
            </div>
            <div>
                <label for="cint">no. Int.: </label>
                <input type="text" id="cint" />
            </div>
            <div>
                <label for="ccolonia">Colonia: </label>
                <input type="text" id="ccolonia" />
            </div>
            <div>
                <label for="calcaldia">Alcaldía o municipio: </label>
                <input type="text" id="calcaldia" />
            </div>
            <div>
                <label for="cestado">Estado de la República</label>
                <select id="cestado">
                    <option selected disabled value="0">-- Seleciona uno --</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="CDMX">Ciudad de México</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Durango">Durango</option>
                    <option value="Estado de México">Estado de México</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                </select>
            </div>
            <div>
                <label for="ccp">C.P.: </label>
                <input type="number" id="ccp" />
            </div>
            <div>
                <label for="ctelfijo">Teléfono fijo: </label>
                <input type="tel" id="ctelfijo" maxlength="10" />
            </div>
            <div>
                <label for="ctelcel">Teléfono celular: </label>
                <input type="tel" id="ctelcel" maxlength="10" />
            </div>
            <div>
                <label for="clugartrabajo">Lugar de trabajo: </label>
                <input type="text" id="clugartrabajo" />
            </div>
            <div>
                <label for="cocupacion">Ocupación: </label>
                <input type="text" id="cocupacion" />
            </div>
            <div>
                <label for="comtrabajo">Domicilio de trabajo: </label>
                <input type="text" id="comtrabajo" />
            </div>
            <div>
                <label for="cteltrabajo">Teléfono de trabajo: </label>
                <input type="tel" id="cteltrabajo" maxlength="10" />
            </div>
            <div>
                <label for="cextension">Extensión: </label>
                <input type="text" id="cextension" minlength="4" maxlength="5" />
            </div>
            <div>
                <label for="creligion">Religión de la familia: </label>
                <input type="text" id="creligion" />
            </div>
            <div>
                <label for="fechaarch">Fecha de archivo: </label>
                <input type="text" id="fechaarch" disabled />
            </div>
        </div> -->
        <input type="submit" value="Enviar información">
        <input type="reset" value="Borrar información">
        <p class="warnings" id="warnings"></p>
    </form>
    <script src="app.js"></script>
</body>

</html>