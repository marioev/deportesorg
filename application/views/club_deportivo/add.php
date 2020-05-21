<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Registrar Club Deportivo</h3>
            </div>
            <?php echo form_open('club_deportivo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_club" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre_club" value="<?php echo $this->input->post('nombre_club'); ?>" class="form-control" id="nombre_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fundacion_club" class="control-label">Fundacion</label>
						<div class="form-group">
							<input type="date" name="fundacion_club" value="<?php echo $this->input->post('fundacion_club'); ?>" class="form-control" id="fundacion_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telef_club" class="control-label">Telefono</label>
						<div class="form-group">
							<input type="text" name="telef_club" value="<?php echo $this->input->post('telef_club'); ?>" class="form-control" id="telef_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion_club" class="control-label">Direccion</label>
						<div class="form-group">
							<input type="text" name="direccion_club" class="form-control" id="direccion_club" value="<?php echo $this->input->post('direccion_club'); ?>" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('club_deportivo'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>