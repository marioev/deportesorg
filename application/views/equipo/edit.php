<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Equipo Edit</h3>
            </div>
			<?php echo form_open('equipo/edit/'.$equipo['id_equipo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_club" class="control-label">Id Club</label>
						<div class="form-group">
							<input type="text" name="id_club" value="<?php echo ($this->input->post('id_club') ? $this->input->post('id_club') : $equipo['id_club']); ?>" class="form-control" id="id_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_equipo" class="control-label">Nombre Equipo</label>
						<div class="form-group">
							<input type="text" name="nombre_equipo" value="<?php echo ($this->input->post('nombre_equipo') ? $this->input->post('nombre_equipo') : $equipo['nombre_equipo']); ?>" class="form-control" id="nombre_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_equipo" class="control-label">Estado Equipo</label>
						<div class="form-group">
							<input type="text" name="estado_equipo" value="<?php echo ($this->input->post('estado_equipo') ? $this->input->post('estado_equipo') : $equipo['estado_equipo']); ?>" class="form-control" id="estado_equipo" />
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