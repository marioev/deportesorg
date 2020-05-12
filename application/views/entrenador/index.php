<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Entrenador Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('entrenador/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Entrenador</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($entrenador as $e){ ?>
                    <tr>
						<td><?php echo $e['id_entrenador']; ?></td>
						<td>
                            <a href="<?php echo site_url('entrenador/edit/'.$e['id_entrenador']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('entrenador/remove/'.$e['id_entrenador']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
