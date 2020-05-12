<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Entrenador Equipo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('entrenador_equipo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Equipo</th>
						<th>Id Entrenador</th>
						<th>Desde Ent Equ</th>
						<th>Hasta Ent Equ</th>
						<th>Estado Ent Equ</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($entrenador_equipo as $e){ ?>
                    <tr>
						<td><?php echo $e['id_equipo']; ?></td>
						<td><?php echo $e['id_entrenador']; ?></td>
						<td><?php echo $e['desde_ent_equ']; ?></td>
						<td><?php echo $e['hasta_ent_equ']; ?></td>
						<td><?php echo $e['estado_ent_equ']; ?></td>
						<td>
                            <a href="<?php echo site_url('entrenador_equipo/edit/'.$e['id_equipo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('entrenador_equipo/remove/'.$e['id_equipo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
