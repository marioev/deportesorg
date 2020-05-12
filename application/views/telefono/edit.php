<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Telefono Edit</h3>
            </div>
			<?php echo form_open('telefono/edit/'.$telefono['id_telefono']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_inf" class="control-label">Id Inf</label>
						<div class="form-group">
							<input type="text" name="id_inf" value="<?php echo ($this->input->post('id_inf') ? $this->input->post('id_inf') : $telefono['id_inf']); ?>" class="form-control" id="id_inf" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_telefono" class="control-label">Num Telefono</label>
						<div class="form-group">
							<input type="text" name="num_telefono" value="<?php echo ($this->input->post('num_telefono') ? $this->input->post('num_telefono') : $telefono['num_telefono']); ?>" class="form-control" id="num_telefono" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_telefono" class="control-label">Tipo Telefono</label>
						<div class="form-group">
							<input type="text" name="tipo_telefono" value="<?php echo ($this->input->post('tipo_telefono') ? $this->input->post('tipo_telefono') : $telefono['tipo_telefono']); ?>" class="form-control" id="tipo_telefono" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lugar_telefono" class="control-label">Lugar Telefono</label>
						<div class="form-group">
							<input type="text" name="lugar_telefono" value="<?php echo ($this->input->post('lugar_telefono') ? $this->input->post('lugar_telefono') : $telefono['lugar_telefono']); ?>" class="form-control" id="lugar_telefono" />
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