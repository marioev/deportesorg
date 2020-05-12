<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jug Gol Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jug_gol/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Jug Gol</th>
						<th>Id Jugador Planilla</th>
						<th>Gol Jug Gol</th>
						<th>Minuto Jug Gol</th>
						<th>Estado Jug Gol</th>
						<th>Descrip Jug Gol</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($jug_gol as $j){ ?>
                    <tr>
						<td><?php echo $j['id_jug_gol']; ?></td>
						<td><?php echo $j['id_jugador_planilla']; ?></td>
						<td><?php echo $j['gol_jug_gol']; ?></td>
						<td><?php echo $j['minuto_jug_gol']; ?></td>
						<td><?php echo $j['estado_jug_gol']; ?></td>
						<td><?php echo $j['descrip_jug_gol']; ?></td>
						<td>
                            <a href="<?php echo site_url('jug_gol/edit/'.$j['id_jug_gol']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jug_gol/remove/'.$j['id_jug_gol']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
