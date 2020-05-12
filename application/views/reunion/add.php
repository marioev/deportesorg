<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Reunion Add</h3>
            </div>
            <?php echo form_open('reunion/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_camp" class="control-label">Id Camp</label>
						<div class="form-group">
							<input type="text" name="id_camp" value="<?php echo $this->input->post('id_camp'); ?>" class="form-control" id="id_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_reunion" class="control-label">Fecha Reunion</label>
						<div class="form-group">
							<input type="text" name="fecha_reunion" value="<?php echo $this->input->post('fecha_reunion'); ?>" class="has-datepicker form-control" id="fecha_reunion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ini_reunion" class="control-label">Ini Reunion</label>
						<div class="form-group">
							<input type="text" name="ini_reunion" value="<?php echo $this->input->post('ini_reunion'); ?>" class="form-control" id="ini_reunion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fin_reunion" class="control-label">Fin Reunion</label>
						<div class="form-group">
							<input type="text" name="fin_reunion" value="<?php echo $this->input->post('fin_reunion'); ?>" class="form-control" id="fin_reunion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_reunion" class="control-label">Detalle Reunion</label>
						<div class="form-group">
							<textarea name="detalle_reunion" class="form-control" id="detalle_reunion"><?php echo $this->input->post('detalle_reunion'); ?></textarea>
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