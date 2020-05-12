<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sf Guard User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('sf_guard_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>User Id</th>
						<th>Password</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Username</th>
						<th>Algorithm</th>
						<th>Salt</th>
						<th>Is Active</th>
						<th>Is Super Admin</th>
						<th>Last Login</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sf_guard_user as $s){ ?>
                    <tr>
						<td><?php echo $s['user_id']; ?></td>
						<td><?php echo $s['password']; ?></td>
						<td><?php echo $s['first_name']; ?></td>
						<td><?php echo $s['last_name']; ?></td>
						<td><?php echo $s['email_address']; ?></td>
						<td><?php echo $s['username']; ?></td>
						<td><?php echo $s['algorithm']; ?></td>
						<td><?php echo $s['salt']; ?></td>
						<td><?php echo $s['is_active']; ?></td>
						<td><?php echo $s['is_super_admin']; ?></td>
						<td><?php echo $s['last_login']; ?></td>
						<td>
                            <a href="<?php echo site_url('sf_guard_user/edit/'.$s['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('sf_guard_user/remove/'.$s['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
