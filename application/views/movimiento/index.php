<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Movimiento Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('movimiento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Mov</th>
						<th>Id Camp</th>
						<th>Fecha Mov</th>
						<th>Tipo Mov</th>
						<th>Cant Ingreso</th>
						<th>Cant Egreso</th>
						<th>Cant Saldo</th>
						<th>Monto Ingreso</th>
						<th>Monto Salida</th>
						<th>Monto Saldo</th>
						<th>Estado Mov</th>
						<th>Detalle Mov</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($movimiento as $m){ ?>
                    <tr>
						<td><?php echo $m['id_mov']; ?></td>
						<td><?php echo $m['id_camp']; ?></td>
						<td><?php echo $m['fecha_mov']; ?></td>
						<td><?php echo $m['tipo_mov']; ?></td>
						<td><?php echo $m['cant_ingreso']; ?></td>
						<td><?php echo $m['cant_egreso']; ?></td>
						<td><?php echo $m['cant_saldo']; ?></td>
						<td><?php echo $m['monto_ingreso']; ?></td>
						<td><?php echo $m['monto_salida']; ?></td>
						<td><?php echo $m['monto_saldo']; ?></td>
						<td><?php echo $m['estado_mov']; ?></td>
						<td><?php echo $m['detalle_mov']; ?></td>
						<td>
                            <a href="<?php echo site_url('movimiento/edit/'.$m['id_mov']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('movimiento/remove/'.$m['id_mov']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
