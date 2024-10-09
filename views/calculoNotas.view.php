<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cálculo de notas</h1>

</div>

<!-- Content Row -->
<?php if (isset($data['informe'])) { ?>
    <div class="row">
        <div class="col-12">
            <div class="alert">
                <table class="table table-bordered col-12 text-center">
                    <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Media</th>
                        <th>Suspensos</th>
                        <th>Aprobados</th>
                        <th>Nota más alta</th>
                        <th>Alumno</th>
                        <th>Nota más baja</th>
                        <th>Alumno</th>
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
                        echo '<td>' . $datos['max']['nota']. '</td>';
                        echo '<td>' . $datos['max']['alumno']. '</td>';
                        echo '<td>' . $datos['min']['nota']. '</td>';
                        echo '<td>' . $datos['min']['alumno']. '</td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
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