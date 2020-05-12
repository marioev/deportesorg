<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Delegado Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('delegado/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Delegado</th>
						<th>Id Jug</th>
						<th>Id Inf</th>
						<th>Estado Delegado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($delegado as $d){ ?>
                    <tr>
						<td><?php echo $d['id_delegado']; ?></td>
						<td><?php echo $d['id_jug']; ?></td>
						<td><?php echo $d['id_inf']; ?></td>
						<td><?php echo $d['estado_delegado']; ?></td>
						<td>
                            <a href="<?php echo site_url('delegado/edit/'.$d['id_delegado']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('delegado/remove/'.$d['id_delegado']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
