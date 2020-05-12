<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Premio Add</h3>
            </div>
            <?php echo form_open('premio/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_camp" class="control-label">Id Camp</label>
						<div class="form-group">
							<input type="text" name="id_camp" value="<?php echo $this->input->post('id_camp'); ?>" class="form-control" id="id_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_equipo" class="control-label">Id Equipo</label>
						<div class="form-group">
							<input type="text" name="id_equipo" value="<?php echo $this->input->post('id_equipo'); ?>" class="form-control" id="id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_premio" class="control-label">Nombre Premio</label>
						<div class="form-group">
							<input type="text" name="nombre_premio" value="<?php echo $this->input->post('nombre_premio'); ?>" class="form-control" id="nombre_premio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="costo_premio" class="control-label">Costo Premio</label>
						<div class="form-group">
							<input type="text" name="costo_premio" value="<?php echo $this->input->post('costo_premio'); ?>" class="form-control" id="costo_premio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_premio" class="control-label">Detalle Premio</label>
						<div class="form-group">
							<textarea name="detalle_premio" class="form-control" id="detalle_premio"><?php echo $this->input->post('detalle_premio'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_premio" class="control-label">Estado Premio</label>
						<div class="form-group">
							<textarea name="estado_premio" class="form-control" id="estado_premio"><?php echo $this->input->post('estado_premio'); ?></textarea>
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