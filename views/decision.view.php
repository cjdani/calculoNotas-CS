<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej1']; ?></h6>
            </div>
            <div class="card-body">
                <?php echo $data['ej1_x']; ?> <?php echo $data['ej1_resultado']; ?> es divisible
                entre <?php echo $data['ej1_y']; ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej2']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                    foreach ($data["ej2_numbers"] as $number){
                        if($number==$data["ej2_max"]){
                            echo "<strong>"."$number"." </strong>";
                        }else{
                            echo "<span>"."$number"." </span>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej3']; ?></h6>
            </div>
            <div class="card-body">
                <p><?php echo $data["ej3_totalSeconds"]?> segundos es igual a <?php echo $data["ej3_days"]?> días, <?php echo $data["ej3_hours"]?> horas, <?php echo $data["ej3_minutes"]?> minutos y <?php echo $data["ej3_seconds"]?> segundos </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <?php echo $data["ej4_leap"] ? '
    <div class="col-12">
        <div class="alert alert-success">success</div>
    </div>' : '
    <div class="col-12">
        <div class="alert alert-danger">danger</div>
    </div>
    ';
    ?>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej4']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                    echo "<p>Year: ".$data["ej4_year"]."</p>";
                ?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej5']; ?></h6>
            </div>
            <div class="card-body">
                <p>Salario bruto: <?php echo $data["ej5_grossSalary"]?>€</p>
                <p>Salario neto: <?php echo $data["ej5_netSalary"]?>€</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej6']; ?></h6>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>

