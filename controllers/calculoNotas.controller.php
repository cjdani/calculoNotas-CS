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
            $suspensosPorAlumno = array();
            foreach ($decoded as $asignatura => $alumnos) {
                $informe[$asignatura] = array();
                $mediaAsignatura = 0;
                $suspensos = 0;
                $aprobados = 0;
                $notaAlta = 0;
                $alumnoAlta = "";
                $notaBaja = 10;
                $alumnoBaja = "";
                foreach ($alumnos as $alumno => $notas) {
                    if(!array_key_exists($alumno, $suspensosPorAlumno)) {
                        $suspensosPorAlumno[$alumno] = 0;
                    }

                    $media = round(array_sum($notas)/count($notas), 2);
                    $mediaAsignatura += $media;
                    if ( $media < 5) {
                        $suspensos++;
                        $suspensosPorAlumno[$alumno]++;
                    } elseif ($media >= 5) {
                        $aprobados++;
                    }

                    if ($media > $notaAlta) {
                        $notaAlta = $media;
                        $alumnoAlta = $alumno;
                    } elseif ($media < $notaBaja) {
                        $notaBaja = $media;
                        $alumnoBaja = $alumno;
                    }
                }
                $mediaAsignatura = round($mediaAsignatura/count($alumnos), 2);

                $informe[$asignatura]['media'] = $mediaAsignatura;
                $informe[$asignatura]['suspensos'] = $suspensos;
                $informe[$asignatura]['aprobados'] = $aprobados;
                $informe[$asignatura]['max'] = array();
                $informe[$asignatura]['max']['alumno'] = $alumnoAlta;
                $informe[$asignatura]['max']['nota'] = $notaAlta;
                $informe[$asignatura]['min'] = array();
                $informe[$asignatura]['min']['alumno'] = $alumnoBaja;
                $informe[$asignatura]['min']['nota'] = $notaBaja;
            }

            $alumnos = array();
            $alumnos = [
                'passAll' => array(),
                'failOne' => array(),
                'promote' => array(),
                'noPromote' => array()
            ];

            foreach ($suspensosPorAlumno as $alumno => $suspensos) {
                if ($suspensos == 0){
                    $alumnos['passAll'][] = $alumno;
                    $alumnos['promote'][] = $alumno;
                }elseif ($suspensos == 1){
                    $alumnos['failOne'][] = $alumno;
                    $alumnos['promote'][] = $alumno;
                }else{
                    $alumnos['failOne'][] = $alumno;
                    $alumnos['noPromote'][] = $alumno;
                }
            }

            $data['informe'] = $informe;
            $data['resultados'] = $decoded;
            $data['alumnos'] = $alumnos;
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