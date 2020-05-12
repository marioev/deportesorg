<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Gestion Edit</h3>
            </div>
			<?php echo form_open('gestion/edit/'.$gestion['id_gestion']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_gestion" class="control-label">Nombre Gestion</label>
						<div class="form-group">
							<input type="text" name="nombre_gestion" value="<?php echo ($this->input->post('nombre_gestion') ? $this->input->post('nombre_gestion') : $gestion['nombre_gestion']); ?>" class="form-control" id="nombre_gestion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_ges" class="control-label">Estado Ges</label>
						<div class="form-group">
							<input type="text" name="estado_ges" value="<?php echo ($this->input->post('estado_ges') ? $this->input->post('estado_ges') : $gestion['estado_ges']); ?>" class="form-control" id="estado_ges" />
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