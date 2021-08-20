<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>" />
<input type="hidden" name="base_url" id="fecha_actual" value="<?= date("Y-m-d"); ?>" />

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class=""style="width: 100%; height: 100vh;" src="resources/images/pexels-photo-218863.jpeg" alt="First slide">
            <div class="carousel-caption" style="margin-bottom: 35vh !important">
                <h3 style="font-size: 60pt; color: #505050">Revisa </h3>
                <p style="font-size: 20pt; color: #505050">Que cubre la garantia</p>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_garantia" onclick="buscador()">Revisar garantia</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_garantia" tabindex="-1" role="dialog" aria-labelledby="modal_garantiaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_garantiaLabel">Buscar N° de serie</h3>
            </div>
            <div class="modal-body" id="modal_garantia_producto">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="resources/js/serie.js"></script>