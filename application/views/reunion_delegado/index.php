<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reunion Delegado Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reunion_delegado/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Reunion</th>
						<th>Id Delegado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reunion_delegado as $r){ ?>
                    <tr>
						<td><?php echo $r['id_reunion']; ?></td>
						<td><?php echo $r['id_delegado']; ?></td>
						<td>
                            <a href="<?php echo site_url('reunion_delegado/edit/'.$r['id_reunion']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('reunion_delegado/remove/'.$r['id_reunion']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
