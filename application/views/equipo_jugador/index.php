<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Equipo Jugador Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('equipo_jugador/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Jug Equipo</th>
						<th>Id Jug</th>
						<th>Id Equipo</th>
						<th>Desde Equ Jug</th>
						<th>Hasta Equ Jug</th>
						<th>Estado Jug Equipo</th>
						<th>Obs Equ Jug</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($equipo_jugador as $e){ ?>
                    <tr>
						<td><?php echo $e['id_jug_equipo']; ?></td>
						<td><?php echo $e['id_jug']; ?></td>
						<td><?php echo $e['id_equipo']; ?></td>
						<td><?php echo $e['desde_equ_jug']; ?></td>
						<td><?php echo $e['hasta_equ_jug']; ?></td>
						<td><?php echo $e['estado_jug_equipo']; ?></td>
						<td><?php echo $e['obs_equ_jug']; ?></td>
						<td>
                            <a href="<?php echo site_url('equipo_jugador/edit/'.$e['id_jug_equipo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('equipo_jugador/remove/'.$e['id_jug_equipo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
