<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Producto Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('producto/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Producto Id</th>
						<th>Estado Id</th>
						<th>Categoria Id</th>
						<th>Presentacion Id</th>
						<th>Moneda Id</th>
						<th>Producto Codigo</th>
						<th>Producto Codigobarra</th>
						<th>Producto Foto</th>
						<th>Producto Nombre</th>
						<th>Producto Unidad</th>
						<th>Producto Marca</th>
						<th>Producto Industria</th>
						<th>Producto Costo</th>
						<th>Producto Precio</th>
						<th>Producto Comision</th>
						<th>Producto Tipocambio</th>
						<th>Producto Cantidadminima</th>
						<th>Producto Factor</th>
						<th>Producto Unidadfactor</th>
						<th>Producto Codigofactor</th>
						<th>Producto Preciofactor</th>
						<th>Producto Factor1</th>
						<th>Producto Unidadfactor1</th>
						<th>Producto Codigofactor1</th>
						<th>Producto Preciofactor1</th>
						<th>Producto Factor2</th>
						<th>Producto Unidadfactor2</th>
						<th>Producto Codigofactor2</th>
						<th>Producto Preciofactor2</th>
						<th>Producto Factor3</th>
						<th>Producto Unidadfactor3</th>
						<th>Producto Codigofactor3</th>
						<th>Producto Preciofactor3</th>
						<th>Producto Factor4</th>
						<th>Producto Unidadfactor4</th>
						<th>Producto Codigofactor4</th>
						<th>Producto Preciofactor4</th>
						<th>Producto Ultimocosto</th>
						<th>Producto Envase</th>
						<th>Producto Nombreenvase</th>
						<th>Producto Costoenvase</th>
						<th>Producto Precioenvase</th>
						<th>Destino Id</th>
						<th>Producto Principioact</th>
						<th>Producto Accionterap</th>
						<th>Producto Cantidadenvase</th>
						<th>Subcategoria Id</th>
						<th>Producto Unidadentera</th>
						<th>Producto Catalogo</th>
						<th>Producto Caracteristicas</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($producto as $p){ ?>
                    <tr>
						<td><?php echo $p['producto_id']; ?></td>
						<td><?php echo $p['estado_id']; ?></td>
						<td><?php echo $p['categoria_id']; ?></td>
						<td><?php echo $p['presentacion_id']; ?></td>
						<td><?php echo $p['moneda_id']; ?></td>
						<td><?php echo $p['producto_codigo']; ?></td>
						<td><?php echo $p['producto_codigobarra']; ?></td>
						<td><?php echo $p['producto_foto']; ?></td>
						<td><?php echo $p['producto_nombre']; ?></td>
						<td><?php echo $p['producto_unidad']; ?></td>
						<td><?php echo $p['producto_marca']; ?></td>
						<td><?php echo $p['producto_industria']; ?></td>
						<td><?php echo $p['producto_costo']; ?></td>
						<td><?php echo $p['producto_precio']; ?></td>
						<td><?php echo $p['producto_comision']; ?></td>
						<td><?php echo $p['producto_tipocambio']; ?></td>
						<td><?php echo $p['producto_cantidadminima']; ?></td>
						<td><?php echo $p['producto_factor']; ?></td>
						<td><?php echo $p['producto_unidadfactor']; ?></td>
						<td><?php echo $p['producto_codigofactor']; ?></td>
						<td><?php echo $p['producto_preciofactor']; ?></td>
						<td><?php echo $p['producto_factor1']; ?></td>
						<td><?php echo $p['producto_unidadfactor1']; ?></td>
						<td><?php echo $p['producto_codigofactor1']; ?></td>
						<td><?php echo $p['producto_preciofactor1']; ?></td>
						<td><?php echo $p['producto_factor2']; ?></td>
						<td><?php echo $p['producto_unidadfactor2']; ?></td>
						<td><?php echo $p['producto_codigofactor2']; ?></td>
						<td><?php echo $p['producto_preciofactor2']; ?></td>
						<td><?php echo $p['producto_factor3']; ?></td>
						<td><?php echo $p['producto_unidadfactor3']; ?></td>
						<td><?php echo $p['producto_codigofactor3']; ?></td>
						<td><?php echo $p['producto_preciofactor3']; ?></td>
						<td><?php echo $p['producto_factor4']; ?></td>
						<td><?php echo $p['producto_unidadfactor4']; ?></td>
						<td><?php echo $p['producto_codigofactor4']; ?></td>
						<td><?php echo $p['producto_preciofactor4']; ?></td>
						<td><?php echo $p['producto_ultimocosto']; ?></td>
						<td><?php echo $p['producto_envase']; ?></td>
						<td><?php echo $p['producto_nombreenvase']; ?></td>
						<td><?php echo $p['producto_costoenvase']; ?></td>
						<td><?php echo $p['producto_precioenvase']; ?></td>
						<td><?php echo $p['destino_id']; ?></td>
						<td><?php echo $p['producto_principioact']; ?></td>
						<td><?php echo $p['producto_accionterap']; ?></td>
						<td><?php echo $p['producto_cantidadenvase']; ?></td>
						<td><?php echo $p['subcategoria_id']; ?></td>
						<td><?php echo $p['producto_unidadentera']; ?></td>
						<td><?php echo $p['producto_catalogo']; ?></td>
						<td><?php echo $p['producto_caracteristicas']; ?></td>
						<td>
                            <a href="<?php echo site_url('producto/edit/'.$p['producto_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('producto/remove/'.$p['producto_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
