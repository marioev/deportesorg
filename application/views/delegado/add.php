<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Delegado Add</h3>
            </div>
            <?php echo form_open('delegado/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_jug" class="control-label">Id Jug</label>
						<div class="form-group">
							<input type="text" name="id_jug" value="<?php echo $this->input->post('id_jug'); ?>" class="form-control" id="id_jug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_inf" class="control-label">Id Inf</label>
						<div class="form-group">
							<input type="text" name="id_inf" value="<?php echo $this->input->post('id_inf'); ?>" class="form-control" id="id_inf" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_delegado" class="control-label">Estado Delegado</label>
						<div class="form-group">
							<input type="text" name="estado_delegado" value="<?php echo $this->input->post('estado_delegado'); ?>" class="form-control" id="estado_delegado" />
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