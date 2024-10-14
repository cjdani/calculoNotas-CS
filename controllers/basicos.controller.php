<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
//General
$data['titulo'] = "Ejercicios Básicos";

//Ejercicio 1
$data["div_titulo_ej1"] = "Ejercicio 1";
$data["ej1_x"] = 6;
$data["ej1_y"] = $data["ej1_x"]**2;

//Ejercicio 2
$data["div_titulo_ej2"] = "Ejercicio 2";
$data["ej2_x"] = 15.67;
$data["ej2_y"] = 1500;
$data["ej2_z"] = $data["ej2_x"]*$data["ej2_y"];

//Ejercicio 3
$data["div_titulo_ej3"] = "Ejercicio 3";
$data["ej3_base"] = 20;
$data["ej3_altura"] = 7.5;
$data["ej3_area"] = $data["ej3_base"]*$data["ej3_altura"];
$data["ej3_perimetro"] = ($data["ej3_base"]*2)+($data["ej3_altura"]*2);

//Ejercicio 4
$data["div_titulo_ej4"] = "Ejercicio 4";
$data["ej4_nombre"] = 'Carlos';
$data["ej4_edad"] = 12;
$data["ej4_notaMedia"] = 8.2;

//Ejercicio 5
$data["div_titulo_ej5"] = "Ejercicio 5";
$data["ej5_precioTempBaja"] = 25;
$data["ej5_precioTempAlta"] = 32;
$data["ej5_nochesTempBaja"] = 2;
$data["ej5_nochesTempAlta"] = 3;
$data["ej5_precioTotal"] = ($data["ej5_precioTempBaja"]*$data["ej5_nochesTempBaja"])+($data["ej5_precioTempAlta"]*$data["ej5_nochesTempAlta"]);

//Ejercicio 6
$data["div_titulo_ej6"] = "Ejercicio 6";
$data["ej6_radioCirculo"] = 5;
$data["ej6_areaCirculo"] = round(($data["ej6_radioCirculo"]**2)*M_PI,2);
$data["ej6_perimetroCirculo"] = round(($data["ej6_radioCirculo"]*2)*M_PI, 2);

//Ejercicio 7
$data["div_titulo_ej7"] = "Ejercicio 7";
$data["ej7_kmH"] = 120;
$data["ej7_mS"] = $data["ej7_kmH"]/3.6;

//Ejercicio 8
$data["div_titulo_ej8"] = "Ejercicio 8";
$data["ej8_number"] = 864;

//Ejercicio 9
$data["div_titulo_ej9"] = "Ejercicio 9";
$data["ej9_cadena"] = 'Este es un ejercicio de PHP';
$data["ej9_cadenaCaracteres"] = mb_strlen($data["ej9_cadena"]);
$data["ej9_cadenaPalabras"] = str_word_count($data["ej9_cadena"]);


/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/basicos.view.php';
include 'views/templates/footer.php';