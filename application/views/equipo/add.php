<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Equipo Add</h3>
            </div>
            <?php echo form_open('equipo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_club" class="control-label">Club</label>
						<div class="form-group">
							<input type="text" name="id_club" value="<?php echo $this->input->post('id_club'); ?>" class="form-control" id="id_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_equipo" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre_equipo" value="<?php echo $this->input->post('nombre_equipo'); ?>" class="form-control" id="nombre_equipo" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('equipo'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>