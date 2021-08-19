<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Registro Edit</h3>
            </div>
			<?php echo form_open('registro/edit/'.$registro['registro_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="producto_id" class="control-label">Producto</label>
						<div class="form-group">
							<select name="producto_id" class="form-control">
								<option value="">select producto</option>
								<?php 
								foreach($all_producto as $producto)
								{
									$selected = ($producto['producto_id'] == $registro['producto_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$producto['producto_id'].'" '.$selected.'>'.$producto['producto_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario</label>
						<div class="form-group">
							<select name="usuario_id" class="form-control">
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuario as $usuario)
								{
									$selected = ($usuario['usuario_id'] == $registro['usuario_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['usuario_id'].'" '.$selected.'>'.$usuario['usuario_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="registro_serie" class="control-label">Registro Serie</label>
						<div class="form-group">
							<input type="text" name="registro_serie" value="<?php echo ($this->input->post('registro_serie') ? $this->input->post('registro_serie') : $registro['registro_serie']); ?>" class="form-control" id="registro_serie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cliente_aniversario" class="control-label">Cliente Aniversario</label>
						<div class="form-group">
							<input type="text" name="cliente_aniversario" value="<?php echo ($this->input->post('cliente_aniversario') ? $this->input->post('cliente_aniversario') : $registro['cliente_aniversario']); ?>" class="has-datepicker form-control" id="cliente_aniversario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="registro_fecha" class="control-label">Registro Fecha</label>
						<div class="form-group">
							<input type="text" name="registro_fecha" value="<?php echo ($this->input->post('registro_fecha') ? $this->input->post('registro_fecha') : $registro['registro_fecha']); ?>" class="has-datepicker form-control" id="registro_fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="registro_hora" class="control-label">Registro Hora</label>
						<div class="form-group">
							<input type="text" name="registro_hora" value="<?php echo ($this->input->post('registro_hora') ? $this->input->post('registro_hora') : $registro['registro_hora']); ?>" class="form-control" id="registro_hora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="registro_vigencia" class="control-label">Registro Vigencia</label>
						<div class="form-group">
							<input type="text" name="registro_vigencia" value="<?php echo ($this->input->post('registro_vigencia') ? $this->input->post('registro_vigencia') : $registro['registro_vigencia']); ?>" class="form-control" id="registro_vigencia" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>