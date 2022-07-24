<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $nombre = $_POST['nombre'];

        $instalacion = $_POST['instalacion'];
        $mantenimiento = $_POST['mantenimiento'];
        $reparacion = $_POST['reparacion'];
        $presupuesto = $_POST['presupuesto'];

        $cliente = $_POST['cliente'];
        $cif = $_POST['cif'];
        $fecha = $_POST['fecha'];
        $direccion = $_POST['direccion'];
        $poblacion = $_POST['poblacion'];
        $telefono = $_POST['telefono'];
        $fax = $_POST['fax'];
        $movil = $_POST['movil'];
        $email = $_POST['email'];

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serie = $_POST['serie'];
        $potencia = $_POST['potencia'];
        $fabricacion = $_POST['fabricacion'];
        $tipo = $_POST['tipo'];

        $tecnico = $_POST['tecnico'];
        $ayudante = $_POST['ayudante'];
        $entrada = $_POST['entrada'];
        $salida = $_POST['salida'];
        $horas = $_POST['horas'];
        $desplazamiento = $_POST['desplazamiento'];
        $festivo = $_POST['festivo'];

        $observaciones = $_POST['observaciones'];

        $materiales1 = $_POST['materiales1'];
        $materiales2 = $_POST['materiales2'];
        $materiales3 = $_POST['materiales3'];
        $materiales4 = $_POST['materiales4'];

        $cantidad1 = $_POST['cantidad1'];
        $cantidad2 = $_POST['cantidad2'];
        $cantidad3 = $_POST['cantidad3'];
        $cantidad4 = $_POST['cantidad4'];

        $total1 = $_POST['total1'];
        $total2 = $_POST['total2'];
        $total3 = $_POST['total3'];
        $total4 = $_POST['total4'];

        // first line of PHP
        $defaultTimeZone='UTC';

        // somewhere in the code
        function _date($format="r", $timestamp = false, $timezone = false) {
            $userTimezone = new DateTimeZone(!empty($timezone) ? $timezone : 'GMT');
            $gmtTimezone = new DateTimeZone('GMT');
            $myDateTime = new DateTime(($timestamp!=false?date("r",(int)$timestamp):date("r")), $gmtTimezone);
            $offset = $userTimezone->getOffset($myDateTime);
            return date($format, ($timestamp!=false?(int)$timestamp:$myDateTime->format('U')) + $offset);
        }

        require './vendor/autoload.php';
        use Spipu\Html2Pdf\Html2Pdf;

        $html2pdf = new Html2Pdf('p', 'A4', 'es', 'true', 'UTF-8');
        $html2pdf -> writeHTML('
                        <!DOCTYPE html>
                        <html lang="es">
                        <head>
                            <meta charset="UTF-8">
                            <title>Parte de trabajo</title>
                            <style type="text/css">
                                .form-title {
                                    color: #3a5f94;
                                    font-size: 14px;
                                }

                                label {
                                    font-size: 12px;
                                    font-weight: bold;
                                }

                                p {
                                    margin-bottom: 4px;
                                }

                                b {
                                    font-size: 10px;
                                    font-weight: normal;
                                }

                                table {
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                                  
                                th {
                                    padding: 8px 0;
                                }
                                  
                                td {
                                    border-bottom: 1px solid #dddddd;
                                    padding: 4px 0;
                                }

                                .table-100 {
                                    width: 100%;
                                }

                                .table-50 {
                                    width: 50%;
                                }

                                .table-33 {
                                    width: 33%;
                                }

                                .table-25 {
                                    width: 25%;
                                    padding: 0;
                                    text-align: center;
                                }
                                  
                                .firma {
                                    width: 50%;
                                    height: 40px;
                                }
                            </style>
                        </head>
                        <body>
                            <p class="form-title">Operaciones</p>
                            <table>
                                <tr>
                                    <th class="table-25">
                                        <b>'.$instalacion.'</b>
                                    </th>
                                    <th class="table-25">
                                        <b>'.$mantenimiento.'</b>
                                    </th>
                                    <th class="table-25">
                                        <b>'.$reparacion.'</b>
                                    </th>
                                    <th class="table-25">
                                        <b>'.$presupuesto.'</b>
                                    </th>
                                </tr>
                            </table>
                            <p class="form-title">Cliente</p>
                            <table>
                                <tr>
                                    <th class="table-100">
                                        <label>Nombre Cliente</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-100">
                                        <b>'.$cliente.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>NIF / CIF</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Fecha</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$cif.'</b>
                                    </td>
                                    <td class="table-50">
                                        <b>'.$fecha.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-100">
                                        <label>Dirección</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-100">
                                        <b>'.$direccion.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-100">
                                        <label>Población</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-100">
                                        <b>'.$poblacion.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-33">
                                        <label>Teléfono</label>
                                    </th>
                                    <th class="table-33">
                                        <label>FAX</label>
                                    </th>
                                    <th class="table-33">
                                        <label>Móvil</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-33">
                                        <b>'.$telefono.'</b>
                                    </td>
                                    <td class="table-33">
                                        <b>'.$fax.'</b>
                                    </td>
                                    <td class="table-33">
                                        <b>'.$movil.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-100">
                                        <label>Email</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-100">
                                        <b>'.$email.'</b>
                                    </td>
                                </tr>
                            </table>
                            <p class="form-title">Aparato</p>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Marca aparato</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Modelo</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$marca.'</b>
                                    </td>
                                    <td class="table-50">
                                        <b>'.$modelo.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Número serie</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Potencia</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$serie.'</b>
                                    </td>
                                    <td class="table-50">
                                        <b>'.$potencia.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Año fabricación</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Tipo / Código</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$fabricacion.'</b>
                                    </td>
                                    <td class="table-50">
                                        <b>'.$tipo.'</b>
                                    </td>
                                </tr>
                            </table>
                            <p class="form-title">Técnico</p>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Técnico</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Ayudante</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$tecnico.'</b>
                                    </td>
                                    <td class="table-50">
                                        <b>'.$ayudante.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-33">
                                        <label>Entrada</label>
                                    </th>
                                    <th class="table-33">
                                        <label>Salida</label>
                                    </th>
                                    <th class="table-33">
                                        <label>Total horas</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-33">
                                        <b>'.$entrada.'</b>
                                    </td>
                                    <td class="table-33">
                                        <b>'.$salida.'</b>
                                    </td>
                                    <td class="table-33">
                                        <b>'.$horas.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Desplazamiento (KM)</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Fin de semana / Festivo</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$desplazamiento.'</b>
                                    </td>
                                    <td class="table-50">
                                        <b>'.$festivo.'</b>
                                    </td>
                                </tr>
                            </table>
                            <p class="form-title">Observaciones</p>
                            <table>
                                <tr>
                                    <td class="table-100">
                                        <p>'.$observaciones.'</p>
                                    </td>
                                </tr>
                            </table>
                            <p class="form-title">Materiales</p>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Materiales</label>
                                    </th>
                                    <th class="table-25">
                                        <label>Cantidad</label>
                                    </th>
                                    <th class="table-25">
                                        <label>Total €</label>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$materiales1.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$cantidad1.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$total1.'</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$materiales2.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$cantidad2.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$total2.'</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$materiales3.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$cantidad3.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$total3.'</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-50">
                                        <b>'.$materiales4.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$cantidad4.'</b>
                                    </td>
                                    <td class="table-25">
                                        <b>'.$total4.'</b>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th class="table-50">
                                        <label>Firma del Técnico</label>
                                    </th>
                                    <th class="table-50">
                                        <label>Firma del Cliente</label>
                                    </th>
                                </tr>
                            </table>
                            <span><b>Hoy es '._date("d/m/Y H:i:s", false, 'Europe/Madrid').'</b></span>
                        </body>
                        </html>');
        $html2pdf -> output('parte.pdf');
?>