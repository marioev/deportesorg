<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tipo Campeonato Edit</h3>
            </div>
			<?php echo form_open('tipo_campeonato/edit/'.$tipo_campeonato['id_tipo_camp']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_tipo_camp" class="control-label">Nombre Tipo Camp</label>
						<div class="form-group">
							<input type="text" name="nombre_tipo_camp" value="<?php echo ($this->input->post('nombre_tipo_camp') ? $this->input->post('nombre_tipo_camp') : $tipo_campeonato['nombre_tipo_camp']); ?>" class="form-control" id="nombre_tipo_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_tipo_camp" class="control-label">Estado Tipo Camp</label>
						<div class="form-group">
							<input type="text" name="estado_tipo_camp" value="<?php echo ($this->input->post('estado_tipo_camp') ? $this->input->post('estado_tipo_camp') : $tipo_campeonato['estado_tipo_camp']); ?>" class="form-control" id="estado_tipo_camp" />
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