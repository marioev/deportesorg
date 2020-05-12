<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fixture Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fixture/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Fix</th>
						<th>Id Equipo</th>
						<th>Equ Id Equipo</th>
						<th>Titulo Fix</th>
						<th>Fecha Fix</th>
						<th>Estado Fix</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fixture as $f){ ?>
                    <tr>
						<td><?php echo $f['id_fix']; ?></td>
						<td><?php echo $f['id_equipo']; ?></td>
						<td><?php echo $f['equ_id_equipo']; ?></td>
						<td><?php echo $f['titulo_fix']; ?></td>
						<td><?php echo $f['fecha_fix']; ?></td>
						<td><?php echo $f['estado_fix']; ?></td>
						<td>
                            <a href="<?php echo site_url('fixture/edit/'.$f['id_fix']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fixture/remove/'.$f['id_fix']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
