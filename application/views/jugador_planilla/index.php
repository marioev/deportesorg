<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jugador Planilla Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jugador_planilla/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Jugador Planilla</th>
						<th>Jugador</th>
						<th>Arquero</th>
						<th>Capitan</th>
						<th>Id Plan</th>
						<th>Id Jug</th>
						<th>Num Casaca</th>
						<th>Gol</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($jugador_planilla as $j){ ?>
                    <tr>
						<td><?php echo $j['id_jugador_planilla']; ?></td>
						<td><?php echo $j['jugador']; ?></td>
						<td><?php echo $j['arquero']; ?></td>
						<td><?php echo $j['capitan']; ?></td>
						<td><?php echo $j['id_plan']; ?></td>
						<td><?php echo $j['id_jug']; ?></td>
						<td><?php echo $j['num_casaca']; ?></td>
						<td><?php echo $j['gol']; ?></td>
						<td>
                            <a href="<?php echo site_url('jugador_planilla/edit/'.$j['id_jugador_planilla']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jugador_planilla/remove/'.$j['id_jugador_planilla']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
