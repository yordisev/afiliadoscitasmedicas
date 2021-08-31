
<!DOCTYPE html>
<html lang="en" style="margin-left: 54px;margin-top: 15px;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acta de Entrega</title>
    <link rel="stylesheet" href="../../bootstrap/miestilo.css">
    <style>
        @media print {
            #funcionario-select {
                border: none;
                -webkit-appearance: none;
            }

            @page {
                margin: 0;
                size: auto;
            }

            .oculto-impresion,
            .oculto-impresion * {
                display: none !important;
            }
        }
    </style>

<body onload="window.print();" onafterprint="window.close()">
<!-- <body> -->
    <!-- Encabezado -->
    <table style="width:667px;height:73px;margin-top: 17px;">
        <tr>
            <td rowspan="3" style="text-align: center;width: 131px;"><img src="../../img/reportar.png" class="img.pequeña" alt="Image" style="height: 49px;"></td>
            <td style="margin-bottom:30px;text-align: center;"><strong>FORMATO DE ACTA DE ENTREGA EQUIPO CÓMPUTO</strong></td>
            <td style="text-align: center;"><strong>Código: GT-FR-01</strong></td>
        </tr>
        <tr>
            <td rowspan="2" style="text-align: center;"><strong>PROCEDIMIENTO DE REQUERIMIENTO TECNOLÓGICO</strong></td>
            <td style="text-align: center;"><strong>Versión: 01</strong></td>
        </tr>
        <tr>
            <td style="text-align: center;"><strong>Fecha: julio 2019</strong></td>
        </tr>
    </table>

    <!-- Fecha - De - Para - Asunto -->

    <table style="border: 0;margin-top: 9px;">
        <tr>
            <td rowspan="2" class="encabezados"><b>FECHA</b></td>
            <td style="padding-right: 100px;border: 0;border-top: 0;"></td>
            <td style="width:35px;text-align: center;"><b><?php echo date("d") ?></b></td>
            <td style="width:35px;text-align: center;"><b><?php echo date("m") ?></b></td>
            <td style="width:65px;text-align: center;"><b><?php echo date("Y") ?></b></td>
            <!-- <td><input type="text" value="<?php echo date("d") ?>" style="width:20px;"></td>
<td><input type="text" value="<?php echo date("m") ?>" style="width:20px;"></td>
<td><input type="text" value="<?php echo date("Y") ?>" style="width:40px;"></td> -->
            </td>
        </tr>
    </table><br>

    <table style="border: 0;">
        <tr>
            <td class="encabezados"><b>PARA</b></td>
            <td style="padding-right: 100px; border: 0; border-top: 0;"></td>
            <td style="width: 400px;text-align: center;"><b>nombre</b></td>
        </tr>
        <tr style="height: 6px;">
            <td style="border: 0; border-top: 0;"></td>
        </tr>
        <tr>
            <td style="border: 0; border-top: 0;"></td>
            <td style="padding-right: 100px; border: 0; border-top: 0;"></td>
            <td style="width: 400px;text-align: center;"><b>cargo</b></td>
        </tr>

        <tr style="height: 6px;">
            <td style="border: 0; border-top: 0;"></td>
        </tr>

        <tr>
            <td class="encabezados"><b>DE</td>
            <td style="padding-right: 100px; border: 0; border-top: 0;"></td>
            <td style="width: 400px;text-align: center;"><b>usuario</b></td>
            <td style="border: 0; border-top: 0;"></td>
        </tr>
        <tr style="height: 6px;">
            <td style="border: 0; border-top: 0;"></td>
        </tr>
        <tr>
            <td style="border: 0; border-top: 0;"></td>
            <td style="padding-right: 100px; border: 0; border-top: 0;"></td>
            <td style="width: 400px;text-align: center;"><b>cargo tic</b></td>
        </tr>
        <tr style="height: 6px;">
            <td style="border: 0; border-top: 0;"></td>
        </tr>
        <tr>
            <td class="encabezados"><b>ASUNTO</td>
            <td style="padding-right: 100px; border: 0; border-top: 0;"></td>
            <td style="width: 240px;text-align: center;"><b>ENTREGA EQUIPO DE COMPUTO</b></td>
        </tr>

    </table><br>

    <table style="width:667px;height:35px">
        <tr>
            <td style="border-bottom:0"><b>POR MEDIO DE LA PRESENTE HAGO ENTREGA FORMAL DE UN EQUIPO DE CÓMPUTO, CON LAS</b></td>
        <tr>
            <td style="border-top:0"><b>SIGUIENTES ESPECIFICACIONES:</b></td>
        </tr>
    </table>

   
</body>

</html>