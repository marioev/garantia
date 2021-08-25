<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('resources/js/funciones_registro.js'); ?>" type="text/javascript"></script>
<link href="<?php echo base_url('resources/css/mitabla.css'); ?>" rel="stylesheet">
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>" />
<div class="row">
    <div class="col-md-4">
        <label for="producto_id" class="control-label">Producto:</label>
        <span id="mensaje_producto" class="text-red"></span>
        <div class="form-group">
            <select id="producto_id" name="producto_id" class="form-control btn-facebook" onchange="buscar_productos(1)">
                <!--<option value="">Producto</option>-->
                <?php 
                foreach($all_producto as $producto)
                {
                    $selected = ($producto['producto_id'] == $this->input->post('producto_id')) ? ' selected="selected"' : "";
                    echo '<option value="'.$producto['producto_id'].'" '.$selected.'>'.$producto['producto_nombre'].'</option>';
                } 
                ?>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <label for="registro_vigencia" class="control-label">Fecha de Vigencia:</label>
        <span id="mensaje_vigencia" class="text-red"></span>
        <div class="form-group">
            <input type="date" id="registro_vigencia" name="registro_vigencia" value='<?php
            $fecha_actual = date("d-m-Y");
            echo date("Y-m-d",strtotime($fecha_actual."+ 2 year"));  ?>' class="form-control" required>
        </div>
    </div>
    <div class="col-md-3">
        <label for="serie" class="control-label">Serie:</label>
        <span id="mensaje_serie" class="text-red"></span>
        <div class="form-group">
            <input type="text" id="serie" name="serie" class="form-control" placeholder="Ingrese la serie.." onkeypress="verificar_enter(event)" autocomplete="off">
        </div>
    </div>
    <div class="col-md-2">
        <label for="registrar" class="control-label">&nbsp;</label>
        <div class="form-group">
            <a class="btn btn-success" onclick="registrar_serie()">
                <i class="fa fa-check"></i> Registrar</a>
        </div>
    </div>
    <div class="row col-md-12" id='loader' style='display:none; text-align: center'>
        <img src="<?php echo base_url("resources/images/loader.gif"); ?>">
    </div>
    <div class="row col-md-12" id='mensaje' style='display:none; text-align: center'>
        <span class="text-danger" id="mensaje_registro">Serie registrado con exito</span>
    </div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-body table-responsive">
                <table class="table table-striped" id="mitabla">
                    <tr>
                        <th>#</th>
                        <th>Serie</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Vigencia</th>
                        <th>Usuario</th>
                        <th></th>
                    </tr>
                    <tbody class="buscar" id="tablaresultados"></tbody>
                    <?php /*foreach($registro as $r){ ?>
                    <tr>
                        <td><?php echo $r['registro_id']; ?></td>
                        <td><?php echo $r['producto_id']; ?></td>
                        <td><?php echo $r['usuario_id']; ?></td>
                        <td><?php echo $r['registro_serie']; ?></td>
                        <td><?php echo $r['cliente_aniversario']; ?></td>
                        <td><?php echo $r['registro_fecha']; ?></td>
                        <td><?php echo $r['registro_hora']; ?></td>
                        <td><?php echo $r['registro_vigencia']; ?></td>
                        <td>
                            <a href="<?php echo site_url('registro/edit/'.$r['registro_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('registro/remove/'.$r['registro_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php }*/ ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<!------------------------ INICIO modal para confirmar eliminacion ------------------->
<div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="modaleliminarlabel">
    <div class="modal-dialog" role="document">
        <br><br>
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <span class="text-bold">Eliminar Registro con la serie:</span><br>
                <span class="text-bold" id="serie_unica"></span>
                <span id="elregistro_id" hidden></span>
            </div>
            <div class="modal-body">
                Nota.-<br>
                Si elimina este registro, tenga en cuenta que ya no podra recuperarlo!.
            </div>
            <div class="modal-footer" style="text-align: center">
                <a onclick="eliminar_registro()" class="btn btn-success" data-dismiss="modal"><span class="fa fa-check"></span> Aceptar</a>
                <a href="#" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</a>
            </div>
        </div>
    </div>
</div>
<!------------------------ FIN modal para confirmar eliminacion ------------------->
