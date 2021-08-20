<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>" />
<input type="hidden" name="base_url" id="fecha_actual" value="<?= date("Y-m-d"); ?>" />

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class=""style="width: 100%; height: 100vh;" src="https://cdn.pixabay.com/photo/2012/12/17/19/14/keyboard-70506_960_720.jpg" alt="First slide">
            <div class="carousel-caption" style="margin-bottom: 40vh !important">
                <h3 style="font-size: 60pt">Third Slide</h3>
                <p style="font-size: 20pt">This is the third image slide</p>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_garantia" onclick="buscador()">Revisar garantia</button>
            </div>
        </div>
        <div class="item">
            <div class="carousel-caption" style="margin-bottom: 40vh !important">
                <h3 style="font-size: 60pt">Third Slide</h3>
                <p style="font-size: 20pt">This is the third image slide</p>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_garantia" onclick="buscador()">Revisar garantia</button>
            </div>
            <img class=""style="width: 100%; height: 100vh;" src="https://cdn.pixabay.com/photo/2017/01/22/12/07/imac-1999636_960_720.png" alt="Second slide">
        </div>
        <div class="item">
            <div class="carousel-caption" style="margin-bottom: 40vh !important">
                <h3 style="font-size: 60pt">Third Slide</h3>
                <p style="font-size: 20pt">This is the third image slide</p>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_garantia" onclick="buscador()">Revisar garantia</button>
            </div>
            <img class=""style="width: 100%; height: 100vh;" src="https://cdn.pixabay.com/photo/2015/03/26/09/58/headphones-690685_960_720.jpg" alt="Third slide">
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_garantia" tabindex="-1" role="dialog" aria-labelledby="modal_garantiaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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