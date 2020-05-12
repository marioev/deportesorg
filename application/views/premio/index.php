<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Premio Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('premio/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Premio</th>
						<th>Id Camp</th>
						<th>Id Equipo</th>
						<th>Nombre Premio</th>
						<th>Costo Premio</th>
						<th>Detalle Premio</th>
						<th>Estado Premio</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($premio as $p){ ?>
                    <tr>
						<td><?php echo $p['id_premio']; ?></td>
						<td><?php echo $p['id_camp']; ?></td>
						<td><?php echo $p['id_equipo']; ?></td>
						<td><?php echo $p['nombre_premio']; ?></td>
						<td><?php echo $p['costo_premio']; ?></td>
						<td><?php echo $p['detalle_premio']; ?></td>
						<td><?php echo $p['estado_premio']; ?></td>
						<td>
                            <a href="<?php echo site_url('premio/edit/'.$p['id_premio']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('premio/remove/'.$p['id_premio']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
