<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej1']; ?></h6>
            </div>
            <div class="card-body">
                El cuadrado del número <?php echo $data['ej1_x'];?> es <?php echo $data['ej1_y'];?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej2']; ?></h6>
            </div>
            <div class="card-body">
                <!--
                Ejercicio 1 El cuadrado del número <?php echo $data['ej1_x'];?> es <?php echo $data['ej1_y'];?>-->

                <!--
                Ecercicio 2-->
                El precio hora es <?php echo $data["ej2_x"];?> €, se han trabajado <?php echo $data["ej2_y"];?> horas por lo que se pagarán <?php echo $data["ej2_z"];?> €.
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej3']; ?></h6>
            </div>
            <div class="card-body">
                El área de un rectángulo de base <?php echo $data['ej3_base'];?> y altura <?php echo $data['ej3_altura'];?> es <?php echo $data['ej3_area'];?>, y el perímetro es <?php echo $data['ej3_perimetro'];?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej4']; ?></h6>
            </div>
            <div class="card-body">
                El alumno <?php echo $data["ej4_nombre"];?> tiene <?php echo $data["ej4_edad"];?> años y su nota media es <?php echo $data["ej4_notaMedia"];?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej5']; ?></h6>
            </div>
            <div class="card-body">
                El cliente se ha alojado <?php echo $data['ej5_nochesTempBaja'];?> noches en temporada baja a un precio de <?php echo $data['ej5_precioTempBaja'];?>€/noche y <?php echo $data['ej5_nochesTempAlta'];?> noches en temporada alta a un precio de <?php echo $data['ej5_precioTempAlta'];?>€/noche, sumando un precio total de <?php echo $data['ej5_precioTotal']?>€ por su estancia
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej6']; ?></h6>
            </div>
            <div class="card-body">
                Un círculo de radio <?php echo $data["ej6_radioCirculo"];?> tiene un área de <?php echo $data["ej6_areaCirculo"];?> y un perímetro de <?php echo $data["ej6_perimetroCirculo"];?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej7']; ?></h6>
            </div>
            <div class="card-body">
                <?php echo $data['ej7_kmH'];?> km/h es igual a <?php echo number_format($data["ej7_mS"] , 2, ',', '.');?> m/s
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej8']; ?></h6>
            </div>
            <div class="card-body">
                El número <?php echo $data['ej8_number']; ?> está formado por <?php echo substr($data["ej8_number"], 0, 1); ?> centenas, <?php echo substr($data["ej8_number"], 1, 1); ?> decenas y <?php echo substr($data["ej8_number"], 2, 1); ?> unidades
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej9']; ?></h6>
            </div>
            <div class="card-body">
                La cadena de texto "<?php echo $data['ej9_cadena']; ?>" está formada por <?php echo $data['ej9_cadenaCaracteres']; ?> caracteres y <?php echo $data["ej9_cadenaPalabras"]?> palabras
            </div>
        </div>
    </div>
</div>

