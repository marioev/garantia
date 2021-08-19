<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Producto Add</h3>
            </div>
            <?php echo form_open('producto/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="estado_id" class="control-label">Estado Id</label>
						<div class="form-group">
							<input type="text" name="estado_id" value="<?php echo $this->input->post('estado_id'); ?>" class="form-control" id="estado_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categoria_id" class="control-label">Categoria Id</label>
						<div class="form-group">
							<input type="text" name="categoria_id" value="<?php echo $this->input->post('categoria_id'); ?>" class="form-control" id="categoria_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="presentacion_id" class="control-label">Presentacion Id</label>
						<div class="form-group">
							<input type="text" name="presentacion_id" value="<?php echo $this->input->post('presentacion_id'); ?>" class="form-control" id="presentacion_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moneda_id" class="control-label">Moneda Id</label>
						<div class="form-group">
							<input type="text" name="moneda_id" value="<?php echo $this->input->post('moneda_id'); ?>" class="form-control" id="moneda_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigo" class="control-label">Producto Codigo</label>
						<div class="form-group">
							<input type="text" name="producto_codigo" value="<?php echo $this->input->post('producto_codigo'); ?>" class="form-control" id="producto_codigo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigobarra" class="control-label">Producto Codigobarra</label>
						<div class="form-group">
							<input type="text" name="producto_codigobarra" value="<?php echo $this->input->post('producto_codigobarra'); ?>" class="form-control" id="producto_codigobarra" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_foto" class="control-label">Producto Foto</label>
						<div class="form-group">
							<input type="text" name="producto_foto" value="<?php echo $this->input->post('producto_foto'); ?>" class="form-control" id="producto_foto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_nombre" class="control-label">Producto Nombre</label>
						<div class="form-group">
							<input type="text" name="producto_nombre" value="<?php echo $this->input->post('producto_nombre'); ?>" class="form-control" id="producto_nombre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidad" class="control-label">Producto Unidad</label>
						<div class="form-group">
							<input type="text" name="producto_unidad" value="<?php echo $this->input->post('producto_unidad'); ?>" class="form-control" id="producto_unidad" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_marca" class="control-label">Producto Marca</label>
						<div class="form-group">
							<input type="text" name="producto_marca" value="<?php echo $this->input->post('producto_marca'); ?>" class="form-control" id="producto_marca" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_industria" class="control-label">Producto Industria</label>
						<div class="form-group">
							<input type="text" name="producto_industria" value="<?php echo $this->input->post('producto_industria'); ?>" class="form-control" id="producto_industria" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_costo" class="control-label">Producto Costo</label>
						<div class="form-group">
							<input type="text" name="producto_costo" value="<?php echo $this->input->post('producto_costo'); ?>" class="form-control" id="producto_costo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_precio" class="control-label">Producto Precio</label>
						<div class="form-group">
							<input type="text" name="producto_precio" value="<?php echo $this->input->post('producto_precio'); ?>" class="form-control" id="producto_precio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_comision" class="control-label">Producto Comision</label>
						<div class="form-group">
							<input type="text" name="producto_comision" value="<?php echo $this->input->post('producto_comision'); ?>" class="form-control" id="producto_comision" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_tipocambio" class="control-label">Producto Tipocambio</label>
						<div class="form-group">
							<input type="text" name="producto_tipocambio" value="<?php echo $this->input->post('producto_tipocambio'); ?>" class="form-control" id="producto_tipocambio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_cantidadminima" class="control-label">Producto Cantidadminima</label>
						<div class="form-group">
							<input type="text" name="producto_cantidadminima" value="<?php echo $this->input->post('producto_cantidadminima'); ?>" class="form-control" id="producto_cantidadminima" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_factor" class="control-label">Producto Factor</label>
						<div class="form-group">
							<input type="text" name="producto_factor" value="<?php echo $this->input->post('producto_factor'); ?>" class="form-control" id="producto_factor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidadfactor" class="control-label">Producto Unidadfactor</label>
						<div class="form-group">
							<input type="text" name="producto_unidadfactor" value="<?php echo $this->input->post('producto_unidadfactor'); ?>" class="form-control" id="producto_unidadfactor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigofactor" class="control-label">Producto Codigofactor</label>
						<div class="form-group">
							<input type="text" name="producto_codigofactor" value="<?php echo $this->input->post('producto_codigofactor'); ?>" class="form-control" id="producto_codigofactor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_preciofactor" class="control-label">Producto Preciofactor</label>
						<div class="form-group">
							<input type="text" name="producto_preciofactor" value="<?php echo $this->input->post('producto_preciofactor'); ?>" class="form-control" id="producto_preciofactor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_factor1" class="control-label">Producto Factor1</label>
						<div class="form-group">
							<input type="text" name="producto_factor1" value="<?php echo $this->input->post('producto_factor1'); ?>" class="form-control" id="producto_factor1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidadfactor1" class="control-label">Producto Unidadfactor1</label>
						<div class="form-group">
							<input type="text" name="producto_unidadfactor1" value="<?php echo $this->input->post('producto_unidadfactor1'); ?>" class="form-control" id="producto_unidadfactor1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigofactor1" class="control-label">Producto Codigofactor1</label>
						<div class="form-group">
							<input type="text" name="producto_codigofactor1" value="<?php echo $this->input->post('producto_codigofactor1'); ?>" class="form-control" id="producto_codigofactor1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_preciofactor1" class="control-label">Producto Preciofactor1</label>
						<div class="form-group">
							<input type="text" name="producto_preciofactor1" value="<?php echo $this->input->post('producto_preciofactor1'); ?>" class="form-control" id="producto_preciofactor1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_factor2" class="control-label">Producto Factor2</label>
						<div class="form-group">
							<input type="text" name="producto_factor2" value="<?php echo $this->input->post('producto_factor2'); ?>" class="form-control" id="producto_factor2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidadfactor2" class="control-label">Producto Unidadfactor2</label>
						<div class="form-group">
							<input type="text" name="producto_unidadfactor2" value="<?php echo $this->input->post('producto_unidadfactor2'); ?>" class="form-control" id="producto_unidadfactor2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigofactor2" class="control-label">Producto Codigofactor2</label>
						<div class="form-group">
							<input type="text" name="producto_codigofactor2" value="<?php echo $this->input->post('producto_codigofactor2'); ?>" class="form-control" id="producto_codigofactor2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_preciofactor2" class="control-label">Producto Preciofactor2</label>
						<div class="form-group">
							<input type="text" name="producto_preciofactor2" value="<?php echo $this->input->post('producto_preciofactor2'); ?>" class="form-control" id="producto_preciofactor2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_factor3" class="control-label">Producto Factor3</label>
						<div class="form-group">
							<input type="text" name="producto_factor3" value="<?php echo $this->input->post('producto_factor3'); ?>" class="form-control" id="producto_factor3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidadfactor3" class="control-label">Producto Unidadfactor3</label>
						<div class="form-group">
							<input type="text" name="producto_unidadfactor3" value="<?php echo $this->input->post('producto_unidadfactor3'); ?>" class="form-control" id="producto_unidadfactor3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigofactor3" class="control-label">Producto Codigofactor3</label>
						<div class="form-group">
							<input type="text" name="producto_codigofactor3" value="<?php echo $this->input->post('producto_codigofactor3'); ?>" class="form-control" id="producto_codigofactor3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_preciofactor3" class="control-label">Producto Preciofactor3</label>
						<div class="form-group">
							<input type="text" name="producto_preciofactor3" value="<?php echo $this->input->post('producto_preciofactor3'); ?>" class="form-control" id="producto_preciofactor3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_factor4" class="control-label">Producto Factor4</label>
						<div class="form-group">
							<input type="text" name="producto_factor4" value="<?php echo $this->input->post('producto_factor4'); ?>" class="form-control" id="producto_factor4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidadfactor4" class="control-label">Producto Unidadfactor4</label>
						<div class="form-group">
							<input type="text" name="producto_unidadfactor4" value="<?php echo $this->input->post('producto_unidadfactor4'); ?>" class="form-control" id="producto_unidadfactor4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_codigofactor4" class="control-label">Producto Codigofactor4</label>
						<div class="form-group">
							<input type="text" name="producto_codigofactor4" value="<?php echo $this->input->post('producto_codigofactor4'); ?>" class="form-control" id="producto_codigofactor4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_preciofactor4" class="control-label">Producto Preciofactor4</label>
						<div class="form-group">
							<input type="text" name="producto_preciofactor4" value="<?php echo $this->input->post('producto_preciofactor4'); ?>" class="form-control" id="producto_preciofactor4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_ultimocosto" class="control-label">Producto Ultimocosto</label>
						<div class="form-group">
							<input type="text" name="producto_ultimocosto" value="<?php echo $this->input->post('producto_ultimocosto'); ?>" class="form-control" id="producto_ultimocosto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_envase" class="control-label">Producto Envase</label>
						<div class="form-group">
							<input type="text" name="producto_envase" value="<?php echo $this->input->post('producto_envase'); ?>" class="form-control" id="producto_envase" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_nombreenvase" class="control-label">Producto Nombreenvase</label>
						<div class="form-group">
							<input type="text" name="producto_nombreenvase" value="<?php echo $this->input->post('producto_nombreenvase'); ?>" class="form-control" id="producto_nombreenvase" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_costoenvase" class="control-label">Producto Costoenvase</label>
						<div class="form-group">
							<input type="text" name="producto_costoenvase" value="<?php echo $this->input->post('producto_costoenvase'); ?>" class="form-control" id="producto_costoenvase" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_precioenvase" class="control-label">Producto Precioenvase</label>
						<div class="form-group">
							<input type="text" name="producto_precioenvase" value="<?php echo $this->input->post('producto_precioenvase'); ?>" class="form-control" id="producto_precioenvase" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="destino_id" class="control-label">Destino Id</label>
						<div class="form-group">
							<input type="text" name="destino_id" value="<?php echo $this->input->post('destino_id'); ?>" class="form-control" id="destino_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_principioact" class="control-label">Producto Principioact</label>
						<div class="form-group">
							<input type="text" name="producto_principioact" value="<?php echo $this->input->post('producto_principioact'); ?>" class="form-control" id="producto_principioact" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_accionterap" class="control-label">Producto Accionterap</label>
						<div class="form-group">
							<input type="text" name="producto_accionterap" value="<?php echo $this->input->post('producto_accionterap'); ?>" class="form-control" id="producto_accionterap" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_cantidadenvase" class="control-label">Producto Cantidadenvase</label>
						<div class="form-group">
							<input type="text" name="producto_cantidadenvase" value="<?php echo $this->input->post('producto_cantidadenvase'); ?>" class="form-control" id="producto_cantidadenvase" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subcategoria_id" class="control-label">Subcategoria Id</label>
						<div class="form-group">
							<input type="text" name="subcategoria_id" value="<?php echo $this->input->post('subcategoria_id'); ?>" class="form-control" id="subcategoria_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_unidadentera" class="control-label">Producto Unidadentera</label>
						<div class="form-group">
							<input type="text" name="producto_unidadentera" value="<?php echo $this->input->post('producto_unidadentera'); ?>" class="form-control" id="producto_unidadentera" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_catalogo" class="control-label">Producto Catalogo</label>
						<div class="form-group">
							<input type="text" name="producto_catalogo" value="<?php echo $this->input->post('producto_catalogo'); ?>" class="form-control" id="producto_catalogo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producto_caracteristicas" class="control-label">Producto Caracteristicas</label>
						<div class="form-group">
							<textarea name="producto_caracteristicas" class="form-control" id="producto_caracteristicas"><?php echo $this->input->post('producto_caracteristicas'); ?></textarea>
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