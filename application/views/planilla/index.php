<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Planilla Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('planilla/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Plan</th>
						<th>Id Fix</th>
						<th>Equipo1</th>
						<th>Equipo2</th>
						<th>Gol Equipo1</th>
						<th>Gol Equipo2</th>
						<th>Puntos Equipo1</th>
						<th>Puntos Equipo2</th>
						<th>Estado Plan</th>
						<th>Observacion Plan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($planilla as $p){ ?>
                    <tr>
						<td><?php echo $p['id_plan']; ?></td>
						<td><?php echo $p['id_fix']; ?></td>
						<td><?php echo $p['equipo1']; ?></td>
						<td><?php echo $p['equipo2']; ?></td>
						<td><?php echo $p['gol_equipo1']; ?></td>
						<td><?php echo $p['gol_equipo2']; ?></td>
						<td><?php echo $p['puntos_equipo1']; ?></td>
						<td><?php echo $p['puntos_equipo2']; ?></td>
						<td><?php echo $p['estado_plan']; ?></td>
						<td><?php echo $p['observacion_plan']; ?></td>
						<td>
                            <a href="<?php echo site_url('planilla/edit/'.$p['id_plan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('planilla/remove/'.$p['id_plan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
