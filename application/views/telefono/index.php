<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Telefono Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('telefono/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Telefono</th>
						<th>Id Inf</th>
						<th>Num Telefono</th>
						<th>Tipo Telefono</th>
						<th>Lugar Telefono</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($telefono as $t){ ?>
                    <tr>
						<td><?php echo $t['id_telefono']; ?></td>
						<td><?php echo $t['id_inf']; ?></td>
						<td><?php echo $t['num_telefono']; ?></td>
						<td><?php echo $t['tipo_telefono']; ?></td>
						<td><?php echo $t['lugar_telefono']; ?></td>
						<td>
                            <a href="<?php echo site_url('telefono/edit/'.$t['id_telefono']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('telefono/remove/'.$t['id_telefono']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
