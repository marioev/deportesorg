<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mesa Directiva Add</h3>
            </div>
            <?php echo form_open('mesa_directiva/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_camp" class="control-label">Id Camp</label>
						<div class="form-group">
							<input type="text" name="id_camp" value="<?php echo $this->input->post('id_camp'); ?>" class="form-control" id="id_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_inf" class="control-label">Id Inf</label>
						<div class="form-group">
							<input type="text" name="id_inf" value="<?php echo $this->input->post('id_inf'); ?>" class="form-control" id="id_inf" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_club" class="control-label">Id Club</label>
						<div class="form-group">
							<input type="text" name="id_club" value="<?php echo $this->input->post('id_club'); ?>" class="form-control" id="id_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cargo_mesa" class="control-label">Cargo Mesa</label>
						<div class="form-group">
							<input type="text" name="cargo_mesa" value="<?php echo $this->input->post('cargo_mesa'); ?>" class="form-control" id="cargo_mesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_mesa" class="control-label">Estado Mesa</label>
						<div class="form-group">
							<input type="text" name="estado_mesa" value="<?php echo $this->input->post('estado_mesa'); ?>" class="form-control" id="estado_mesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ini_mesa" class="control-label">Ini Mesa</label>
						<div class="form-group">
							<input type="text" name="ini_mesa" value="<?php echo $this->input->post('ini_mesa'); ?>" class="has-datepicker form-control" id="ini_mesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fin_mesa" class="control-label">Fin Mesa</label>
						<div class="form-group">
							<input type="text" name="fin_mesa" value="<?php echo $this->input->post('fin_mesa'); ?>" class="has-datepicker form-control" id="fin_mesa" />
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