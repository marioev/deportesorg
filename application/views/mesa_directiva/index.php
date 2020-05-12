<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mesa Directiva Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mesa_directiva/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Mesa</th>
						<th>Id Camp</th>
						<th>Id Inf</th>
						<th>Id Club</th>
						<th>Cargo Mesa</th>
						<th>Estado Mesa</th>
						<th>Ini Mesa</th>
						<th>Fin Mesa</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($mesa_directiva as $m){ ?>
                    <tr>
						<td><?php echo $m['id_mesa']; ?></td>
						<td><?php echo $m['id_camp']; ?></td>
						<td><?php echo $m['id_inf']; ?></td>
						<td><?php echo $m['id_club']; ?></td>
						<td><?php echo $m['cargo_mesa']; ?></td>
						<td><?php echo $m['estado_mesa']; ?></td>
						<td><?php echo $m['ini_mesa']; ?></td>
						<td><?php echo $m['fin_mesa']; ?></td>
						<td>
                            <a href="<?php echo site_url('mesa_directiva/edit/'.$m['id_mesa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('mesa_directiva/remove/'.$m['id_mesa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
