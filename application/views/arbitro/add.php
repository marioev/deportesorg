<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Arbitro Add</h3>
            </div>
            <?php echo form_open('arbitro/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_inf" class="control-label">Id Inf</label>
						<div class="form-group">
							<input type="text" name="id_inf" value="<?php echo $this->input->post('id_inf'); ?>" class="form-control" id="id_inf" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_arbitro" class="control-label">Estado Arbitro</label>
						<div class="form-group">
							<input type="text" name="estado_arbitro" value="<?php echo $this->input->post('estado_arbitro'); ?>" class="form-control" id="estado_arbitro" />
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