<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Registro</h3>
            </div>
            <?php echo form_open('registro/edit/'.$registro['registro_id']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-5">
                            <label for="producto_id" class="control-label"><span class="text-danger">*</span>Producto</label>
                            <div class="form-group">
                                <select name="producto_id" class="form-control" required>
                                    <?php 
                                    foreach($all_producto as $producto)
                                    {
                                        $selected = ($producto['producto_id'] == $registro['producto_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$producto['producto_id'].'" '.$selected.'>'.$producto['producto_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="registro_vigencia" class="control-label"><span class="text-danger">*</span>Vigencia</label>
                            <div class="form-group">
                                <input type="date" name="registro_vigencia" value="<?php echo ($this->input->post('registro_vigencia') ? $this->input->post('registro_vigencia') : $registro['registro_vigencia']); ?>" class="form-control" id="registro_vigencia" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="registro_serie" class="control-label"><span class="text-danger">*</span>Serie</label>
                            <div class="form-group">
                                <input type="text" name="registro_serie" value="<?php echo ($this->input->post('registro_serie') ? $this->input->post('registro_serie') : $registro['registro_serie']); ?>" class="form-control" id="registro_serie" required autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="registro_fecha" class="control-label"><span class="text-danger">*</span>Fecha Registro</label>
                            <div class="form-group">
                                <input type="date" name="registro_fecha" value="<?php echo ($this->input->post('registro_fecha') ? $this->input->post('registro_fecha') : $registro['registro_fecha']); ?>" class="form-control" id="registro_fecha" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="registro_hora" class="control-label"><span class="text-danger">*</span>Hora Registro</label>
                            <div class="form-group">
                                <input type="time" step="any" name="registro_hora" value="<?php echo ($this->input->post('registro_hora') ? $this->input->post('registro_hora') : $registro['registro_hora']); ?>" class="form-control" id="registro_hora" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="usuario_id" class="control-label"><span class="text-danger">*</span>Usuario</label>
                            <div class="form-group">
                                <select name="usuario_id" class="form-control" required>
                                    <!--<option value="">select usuario</option>-->
                                    <?php 
                                    foreach($all_usuario as $usuario)
                                    {
                                        $selected = ($usuario['usuario_id'] == $registro['usuario_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$usuario['usuario_id'].'" '.$selected.'>'.$usuario['usuario_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('registro'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
	        </div>				
            <?php echo form_close(); ?>
        </div>
    </div>
</div>