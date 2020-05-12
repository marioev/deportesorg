<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uniforme Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('uniforme/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Unif</th>
						<th>Id Equipo</th>
						<th>Casaca Unif</th>
						<th>Pant Corto Unif</th>
						<th>Medias Unif</th>
						<th>Imagen Unif</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($uniforme as $u){ ?>
                    <tr>
						<td><?php echo $u['id_unif']; ?></td>
						<td><?php echo $u['id_equipo']; ?></td>
						<td><?php echo $u['casaca_unif']; ?></td>
						<td><?php echo $u['pant_corto_unif']; ?></td>
						<td><?php echo $u['medias_unif']; ?></td>
						<td><?php echo $u['imagen_unif']; ?></td>
						<td>
                            <a href="<?php echo site_url('uniforme/edit/'.$u['id_unif']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('uniforme/remove/'.$u['id_unif']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
