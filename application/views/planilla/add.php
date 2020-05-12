<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Planilla Add</h3>
            </div>
            <?php echo form_open('planilla/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_fix" class="control-label">Id Fix</label>
						<div class="form-group">
							<input type="text" name="id_fix" value="<?php echo $this->input->post('id_fix'); ?>" class="form-control" id="id_fix" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="equipo1" class="control-label">Equipo1</label>
						<div class="form-group">
							<input type="text" name="equipo1" value="<?php echo $this->input->post('equipo1'); ?>" class="form-control" id="equipo1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="equipo2" class="control-label">Equipo2</label>
						<div class="form-group">
							<input type="text" name="equipo2" value="<?php echo $this->input->post('equipo2'); ?>" class="form-control" id="equipo2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gol_equipo1" class="control-label">Gol Equipo1</label>
						<div class="form-group">
							<input type="text" name="gol_equipo1" value="<?php echo $this->input->post('gol_equipo1'); ?>" class="form-control" id="gol_equipo1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gol_equipo2" class="control-label">Gol Equipo2</label>
						<div class="form-group">
							<input type="text" name="gol_equipo2" value="<?php echo $this->input->post('gol_equipo2'); ?>" class="form-control" id="gol_equipo2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="puntos_equipo1" class="control-label">Puntos Equipo1</label>
						<div class="form-group">
							<input type="text" name="puntos_equipo1" value="<?php echo $this->input->post('puntos_equipo1'); ?>" class="form-control" id="puntos_equipo1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="puntos_equipo2" class="control-label">Puntos Equipo2</label>
						<div class="form-group">
							<input type="text" name="puntos_equipo2" value="<?php echo $this->input->post('puntos_equipo2'); ?>" class="form-control" id="puntos_equipo2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_plan" class="control-label">Estado Plan</label>
						<div class="form-group">
							<input type="text" name="estado_plan" value="<?php echo $this->input->post('estado_plan'); ?>" class="form-control" id="estado_plan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observacion_plan" class="control-label">Observacion Plan</label>
						<div class="form-group">
							<textarea name="observacion_plan" class="form-control" id="observacion_plan"><?php echo $this->input->post('observacion_plan'); ?></textarea>
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