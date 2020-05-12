<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fixture Edit</h3>
            </div>
			<?php echo form_open('fixture/edit/'.$fixture['id_fix']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_equipo" class="control-label">Id Equipo</label>
						<div class="form-group">
							<input type="text" name="id_equipo" value="<?php echo ($this->input->post('id_equipo') ? $this->input->post('id_equipo') : $fixture['id_equipo']); ?>" class="form-control" id="id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="equ_id_equipo" class="control-label">Equ Id Equipo</label>
						<div class="form-group">
							<input type="text" name="equ_id_equipo" value="<?php echo ($this->input->post('equ_id_equipo') ? $this->input->post('equ_id_equipo') : $fixture['equ_id_equipo']); ?>" class="form-control" id="equ_id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="titulo_fix" class="control-label">Titulo Fix</label>
						<div class="form-group">
							<input type="text" name="titulo_fix" value="<?php echo ($this->input->post('titulo_fix') ? $this->input->post('titulo_fix') : $fixture['titulo_fix']); ?>" class="form-control" id="titulo_fix" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_fix" class="control-label">Fecha Fix</label>
						<div class="form-group">
							<input type="text" name="fecha_fix" value="<?php echo ($this->input->post('fecha_fix') ? $this->input->post('fecha_fix') : $fixture['fecha_fix']); ?>" class="has-datetimepicker form-control" id="fecha_fix" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_fix" class="control-label">Estado Fix</label>
						<div class="form-group">
							<input type="text" name="estado_fix" value="<?php echo ($this->input->post('estado_fix') ? $this->input->post('estado_fix') : $fixture['estado_fix']); ?>" class="form-control" id="estado_fix" />
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