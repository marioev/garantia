<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Registro Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('registro/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Registro Id</th>
						<th>Producto Id</th>
						<th>Usuario Id</th>
						<th>Registro Serie</th>
						<th>Cliente Aniversario</th>
						<th>Registro Fecha</th>
						<th>Registro Hora</th>
						<th>Registro Vigencia</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($registro as $r){ ?>
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
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
