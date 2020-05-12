<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sf Guard User Add</h3>
            </div>
            <?php echo form_open('sf_guard_user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="first_name" class="control-label">First Name</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?php echo $this->input->post('first_name'); ?>" class="form-control" id="first_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="control-label">Last Name</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?php echo $this->input->post('last_name'); ?>" class="form-control" id="last_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_address" class="control-label">Email Address</label>
						<div class="form-group">
							<input type="text" name="email_address" value="<?php echo $this->input->post('email_address'); ?>" class="form-control" id="email_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="algorithm" class="control-label">Algorithm</label>
						<div class="form-group">
							<input type="text" name="algorithm" value="<?php echo $this->input->post('algorithm'); ?>" class="form-control" id="algorithm" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="salt" class="control-label">Salt</label>
						<div class="form-group">
							<input type="text" name="salt" value="<?php echo $this->input->post('salt'); ?>" class="form-control" id="salt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_active" class="control-label">Is Active</label>
						<div class="form-group">
							<input type="text" name="is_active" value="<?php echo $this->input->post('is_active'); ?>" class="form-control" id="is_active" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_super_admin" class="control-label">Is Super Admin</label>
						<div class="form-group">
							<input type="text" name="is_super_admin" value="<?php echo $this->input->post('is_super_admin'); ?>" class="form-control" id="is_super_admin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_login" class="control-label">Last Login</label>
						<div class="form-group">
							<input type="text" name="last_login" value="<?php echo $this->input->post('last_login'); ?>" class="has-datetimepicker form-control" id="last_login" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>