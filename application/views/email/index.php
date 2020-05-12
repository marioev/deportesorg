<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Email Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('email/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Email</th>
						<th>Id Inf</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($email as $e){ ?>
                    <tr>
						<td><?php echo $e['id_email']; ?></td>
						<td><?php echo $e['id_inf']; ?></td>
						<td><?php echo $e['email']; ?></td>
						<td>
                            <a href="<?php echo site_url('email/edit/'.$e['id_email']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('email/remove/'.$e['id_email']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
