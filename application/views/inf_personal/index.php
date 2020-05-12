<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Inf Personal Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('inf_personal/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Inf</th>
						<th>User Id</th>
						<th>Nombre</th>
						<th>Ap Pat</th>
						<th>Ap Mat</th>
						<th>Fecha Nac</th>
						<th>Sexo</th>
						<th>Est Civil</th>
						<th>Ci</th>
						<th>Foto</th>
						<th>Direccion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($inf_personal as $i){ ?>
                    <tr>
						<td><?php echo $i['id_inf']; ?></td>
						<td><?php echo $i['user_id']; ?></td>
						<td><?php echo $i['nombre']; ?></td>
						<td><?php echo $i['ap_pat']; ?></td>
						<td><?php echo $i['ap_mat']; ?></td>
						<td><?php echo $i['fecha_nac']; ?></td>
						<td><?php echo $i['sexo']; ?></td>
						<td><?php echo $i['est_civil']; ?></td>
						<td><?php echo $i['ci']; ?></td>
						<td><?php echo $i['foto']; ?></td>
						<td><?php echo $i['direccion']; ?></td>
						<td>
                            <a href="<?php echo site_url('inf_personal/edit/'.$i['id_inf']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('inf_personal/remove/'.$i['id_inf']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
