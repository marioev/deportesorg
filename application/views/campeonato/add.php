<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Campeonato Add</h3>
            </div>
            <?php echo form_open('campeonato/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_gestion" class="control-label">Id Gestion</label>
						<div class="form-group">
							<input type="text" name="id_gestion" value="<?php echo $this->input->post('id_gestion'); ?>" class="form-control" id="id_gestion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_tipo_camp" class="control-label">Id Tipo Camp</label>
						<div class="form-group">
							<input type="text" name="id_tipo_camp" value="<?php echo $this->input->post('id_tipo_camp'); ?>" class="form-control" id="id_tipo_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_camp" class="control-label">Nombre Camp</label>
						<div class="form-group">
							<input type="text" name="nombre_camp" value="<?php echo $this->input->post('nombre_camp'); ?>" class="form-control" id="nombre_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="archivo_camp" class="control-label">Archivo Camp</label>
						<div class="form-group">
							<input type="text" name="archivo_camp" value="<?php echo $this->input->post('archivo_camp'); ?>" class="form-control" id="archivo_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_ini_camp" class="control-label">Fecha Ini Camp</label>
						<div class="form-group">
							<input type="text" name="fecha_ini_camp" value="<?php echo $this->input->post('fecha_ini_camp'); ?>" class="has-datepicker form-control" id="fecha_ini_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_fin_camp" class="control-label">Fecha Fin Camp</label>
						<div class="form-group">
							<input type="text" name="fecha_fin_camp" value="<?php echo $this->input->post('fecha_fin_camp'); ?>" class="has-datepicker form-control" id="fecha_fin_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_camp" class="control-label">Estado Camp</label>
						<div class="form-group">
							<input type="text" name="estado_camp" value="<?php echo $this->input->post('estado_camp'); ?>" class="form-control" id="estado_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion_camp" class="control-label">Descripcion Camp</label>
						<div class="form-group">
							<textarea name="descripcion_camp" class="form-control" id="descripcion_camp"><?php echo $this->input->post('descripcion_camp'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="convocatoria_camp" class="control-label">Convocatoria Camp</label>
						<div class="form-group">
							<textarea name="convocatoria_camp" class="form-control" id="convocatoria_camp"><?php echo $this->input->post('convocatoria_camp'); ?></textarea>
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