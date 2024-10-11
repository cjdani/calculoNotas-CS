<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
//General
$data['titulo'] = "Ejercicios Básicos";

//Ejercicio 1
$data["div_titulo_ej1"] = "Ejercicio 1";
$data["ej1_x"] = 6;
$data["ej1_y"] = 4;
$data["ej1_resultado"] = '';
if ($data["ej1_x"] % $data["ej1_y"] == 0) {
    $data["ej1_resultado"] = 'sí';
} else {
    $data["ej1_resultado"] = 'no';
}

//Ejercicio 2
$data["div_titulo_ej2"] = "Ejercicio 2";
$data["ej2_numbers"] = [2, 6, 5];
$data["ej2_max"] = max($data["ej2_numbers"]);

//Ejercicio 3
$data["div_titulo_ej3"] = "Ejercicio 3";
$data["ej3_totalSeconds"] = 148569;
$data["ej3_days"] = floor($data["ej3_totalSeconds"] / 86400);
$data["ej3_hours"] = floor(($data["ej3_totalSeconds"] % 86400) / 3600);
$data["ej3_minutes"] = floor((($data["ej3_totalSeconds"] % 86400) % 3600) / 60);
$data["ej3_seconds"] = (($data["ej3_totalSeconds"] % 86400) % 3600) % 60;

//Ejercicio 4
$data["div_titulo_ej4"] = "Ejercicio 4";
$data["ej4_year"] = 2003;
$data["ej4_leap"] = (($data["ej4_year"] % 4 == 0) && ($data["ej4_year"] % 100 != 0)) || ($data["ej4_year"] % 400 == 0);

//Ejercicio 5
$data["div_titulo_ej5"] = "Ejercicio 5";
$data["ej5_grossSalary"] = 1258;
$data["ej5_netSalary"] = $data["ej5_grossSalary"];
if ($data["ej5_grossSalary"] > 2000) {
    $data["ej5_netSalary"] -= 0.03 * $data["ej5_grossSalary"];
    $data["ej5_netSalary"] -= 0.05 * $data["ej5_grossSalary"];
    $data["ej5_netSalary"] -= 0.1 * $data["ej5_grossSalary"];
} elseif ($data["ej5_grossSalary"] > 1000) {
    $data["ej5_netSalary"] -= 0.05 * $data["ej5_grossSalary"];
    $data["ej5_netSalary"] -= 0.1 * $data["ej5_grossSalary"];
} elseif ($data["ej5_grossSalary"]) {
    $data["ej5_netSalary"] -= 0.1 * $data["ej5_grossSalary"];
}

//Ejercicio 6
$data["div_titulo_ej6"] = "Ejercicio 6";


/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';