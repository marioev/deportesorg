<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Inf Personal Add</h3>
            </div>
            <?php echo form_open('inf_personal/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ap_pat" class="control-label">Ap Pat</label>
						<div class="form-group">
							<input type="text" name="ap_pat" value="<?php echo $this->input->post('ap_pat'); ?>" class="form-control" id="ap_pat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ap_mat" class="control-label">Ap Mat</label>
						<div class="form-group">
							<input type="text" name="ap_mat" value="<?php echo $this->input->post('ap_mat'); ?>" class="form-control" id="ap_mat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_nac" class="control-label">Fecha Nac</label>
						<div class="form-group">
							<input type="text" name="fecha_nac" value="<?php echo $this->input->post('fecha_nac'); ?>" class="has-datepicker form-control" id="fecha_nac" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sexo" class="control-label">Sexo</label>
						<div class="form-group">
							<input type="text" name="sexo" value="<?php echo $this->input->post('sexo'); ?>" class="form-control" id="sexo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="est_civil" class="control-label">Est Civil</label>
						<div class="form-group">
							<input type="text" name="est_civil" value="<?php echo $this->input->post('est_civil'); ?>" class="form-control" id="est_civil" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ci" class="control-label">Ci</label>
						<div class="form-group">
							<input type="text" name="ci" value="<?php echo $this->input->post('ci'); ?>" class="form-control" id="ci" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Foto</label>
						<div class="form-group">
							<input type="text" name="foto" value="<?php echo $this->input->post('foto'); ?>" class="form-control" id="foto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direccion</label>
						<div class="form-group">
							<textarea name="direccion" class="form-control" id="direccion"><?php echo $this->input->post('direccion'); ?></textarea>
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