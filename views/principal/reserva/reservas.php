<?php include_once 'views/templates/header-principal.php';
include_once 'views/templates/portada.php';
?>

<section class="news-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo $data['title']; ?></span>
            <h2><?php echo $data['subtitle']; ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div
                    class="alert alert-<?php echo $data['tipo']; ?> alert-dismissible fade show"
                    role="alert">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>

                    <strong>Respuesta</strong><?php echo $data['mensaje']; ?>
                </div>


                <input type="hidden" id="f_llegada" value="<?php echo $data['disponible']['f_llegada'] ?>">
                <input type="hidden" id="f_salida" value="<?php echo $data['disponible']['f_salida'] ?>">
                <input type="hidden" id="habitacion" value="<?php echo $data['disponible']['habitacion'] ?>">

                <div id='calendar'></div>
            </div>
            <div class="col-md-3"></div>
            <div class="check-content">
                <p>Fecha Llegada</p>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker-1">
                        <i class="flaticon-calendar"></i>
                        <input type="text" class="form-control" id="f_llegada" name="f_llegada" value="<?php echo date('Y-m-d') ?>">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="check-content">
                <p>Fecha Salida</p>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker-2">
                        <i class="flaticon-calendar"></i>
                        <input type="text" class="form-control" id="f_salida" name="f_salida" value="<?php echo date('Y-m-d') ?>">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="check-content">
                <div class="form-group">
                    <label for="habitacion" class="form-label">Habitaciones</label>
                    <select
                        name="habitacion"
                        class="select-auto"
                        id="habitacion" style="width: 100%;">
                        <option value>Seleccionar</option>
                        <?php foreach ($data['habitaciones'] as $habitacion) { ?>
                            <option value="<?php echo $habitacion['id']; ?>"><?php echo $habitacion['estilo']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="check-btn check-content mb-0">
                    <button class="default-btn" type="submit">
                        Comprobar
                        <i class="flaticon-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once 'views/templates/footer-principal.php'; ?>


<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/reservas.js'; ?>"></script>

</body>

</html>