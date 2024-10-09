<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cálculo de notas</h1>

</div>

<!-- Content Row -->
<?php if (isset($data['informe'])) { ?>
    <div class="row">
        <div class="col-12">
            <div class="alert">
                <table class="table table-striped col-12 text-center">
                    <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Media</th>
                        <th>Suspensos</th>
                        <th>Aprobados</th>
                        <th>Máximo</th>
                        <th>Mínimo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($data['informe'] as $asignatura => $datos) {
                        echo '<tr>';
                        echo '<td>' . $asignatura. '</td>';
                        echo '<td>' . $datos['media']. '</td>';
                        echo '<td>' . $datos['suspensos']. '</td>';
                        echo '<td>' . $datos['aprobados']. '</td>';
                        echo '<td>' . $datos['max']['alumno'].': '.$datos['max']['nota']. '</td>';
                        echo '<td>' . $datos['min']['alumno'].': '.$datos['min']['nota']. '</td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
            <div class="col-12 col-lg-6">
                <div class="alert alert-success">
                    <h4>Aprobaron todo:</h4>
                    <ul class="list-group">
                        <?php
                        foreach ($data['alumnos']['passAll'] as $alumno) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo $alumno;
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="alert alert-warning">
                    <h4>Suspendieron alguna:</h4>
                    <ul class="list-group">
                        <?php
                        foreach ($data['alumnos']['failOne'] as $alumno) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo $alumno;
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="alert alert-primary">
                    <h4>Promocionan:</h4>
                    <ul class="list-group">
                        <?php
                        foreach ($data['alumnos']['promote'] as $alumno) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo $alumno;
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="alert alert-danger">
                    <h4>No promocionan:</h4>
                    <ul class="list-group">
                        <?php
                        foreach ($data['alumnos']['noPromote'] as $alumno) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo $alumno;
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
    </div>
    <?php
}
?>

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Resultados evaluación</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3 col-12">
                        <label for="textarea">Inserte un json</label>
                        <textarea class="form-control" id="json" name="json"
                                  rows="3"><?php echo $data['input_numeros'] ?? ''; ?></textarea>
                        <?php
                        foreach ($data['errors'] as $error) {
                            echo '<p class="text-danger">' . $error . '</p>';
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>