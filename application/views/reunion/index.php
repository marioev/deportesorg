<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reunion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reunion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Reunion</th>
						<th>Id Camp</th>
						<th>Fecha Reunion</th>
						<th>Ini Reunion</th>
						<th>Fin Reunion</th>
						<th>Detalle Reunion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reunion as $r){ ?>
                    <tr>
						<td><?php echo $r['id_reunion']; ?></td>
						<td><?php echo $r['id_camp']; ?></td>
						<td><?php echo $r['fecha_reunion']; ?></td>
						<td><?php echo $r['ini_reunion']; ?></td>
						<td><?php echo $r['fin_reunion']; ?></td>
						<td><?php echo $r['detalle_reunion']; ?></td>
						<td>
                            <a href="<?php echo site_url('reunion/edit/'.$r['id_reunion']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('reunion/remove/'.$r['id_reunion']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
