<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Arbitro Planilla Add</h3>
            </div>
            <?php echo form_open('arbitro_planilla/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tipo_juez" class="control-label">Tipo Juez</label>
						<div class="form-group">
							<input type="text" name="tipo_juez" value="<?php echo $this->input->post('tipo_juez'); ?>" class="form-control" id="tipo_juez" />
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