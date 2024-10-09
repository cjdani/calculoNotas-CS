<?php
declare(strict_types=1);

$data = array();

$data['errors'] = [];
//Cálculo de notas
if (!empty($_POST)) {
    if (isset($_POST)) {
        $data['errors'] = checkForm($_POST['json']);
        if (count($data['errors']) === 0) {
            $decoded = json_decode($_POST['json'], true);
            $informe = array();
            foreach ($decoded as $asignatura => $alumnos) {
                $informe[$asignatura] = array();
                $media = array_sum($alumnos) / count($alumnos);
                $suspensos = 0;
                $aprobados = 0;
                $notaAlta = 0;
                $alumnoAlta = "";
                $notaBaja = 10;
                $alumnoBaja = "";
                foreach ($alumnos as $alumno => $nota) {
                    if ($nota < 5) {
                        $suspensos++;
                    } elseif ($nota >= 5) {
                        $aprobados++;
                    }

                    if ($nota > $notaAlta) {
                        $notaAlta = $nota;
                        $alumnoAlta = $alumno;
                    } elseif ($nota < $notaBaja) {
                        $notaBaja = $nota;
                        $alumnoBaja = $alumno;
                    }
                }
                $informe[$asignatura]['media'] = $media;
                $informe[$asignatura]['suspensos'] = $suspensos;
                $informe[$asignatura]['aprobados'] = $aprobados;
                $informe[$asignatura]['max'] = array();
                $informe[$asignatura]['max']['alumno'] = $alumnoAlta;
                $informe[$asignatura]['max']['nota'] = $notaAlta;
                $informe[$asignatura]['min'] = array();
                $informe[$asignatura]['min']['alumno'] = $alumnoBaja;
                $informe[$asignatura]['min']['nota'] = $notaBaja;
            }
            $data['informe'] = $informe;
            $data['resultados'] = $decoded;
        }
    }
}


function checkForm(string $texto): array
{
    $errors['texto'] = [];
    if (empty($texto)) {
        $errors['texto'][] = "Introduzca un texto";
    } else {
        $decoded = json_decode($texto, true);
        if (is_null($decoded)) {
            $errors['texto'][] = "El texto introducido no es un JSON bien formado";
        } else {
            foreach ($decoded as $asignatura => $alumnos) {
                if (!is_string($asignatura) || mb_strlen($asignatura) < 1) {
                    $errors['texto'][] = "'$asignatura' no es un nombre de asignatura válido";
                }
                if (!is_array($alumnos)) {
                    $errors['texto'][] = "'$asignatura' no contiene un array de alumnos";
                } else {
                    foreach ($alumnos as $alumno => $notas) {
                        if (!is_string($alumno) || mb_strlen($alumno) < 1) {
                            $errors['texto'][] = "El alumno '$alumno' de la asignatura '$asignatura' no es un nombre de alumno válido";
                        }
                        if (!is_array($notas)) {
                            $errors['texto'][] = "Las notas del alumno '$alumno' de la asignatura '$asignatura' no contiene un array de notas";
                        } else {
                            foreach ($notas as $nota) {
                                if (!is_numeric($nota)) {
                                    $errors['texto'][] = "La nota '$nota' del alumno '$alumno' de la asignatura '$asignatura' no es un número";
                                } else if ($nota < 0 || $nota > 10) {
                                    $errors['texto'][] = "La nota '$nota' del alumno '$alumno' de la asignatura '$asignatura' no está entre 0 y 10.";
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return $errors['texto'];
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/calculoNotas.view.php';
include 'views/templates/footer.php';