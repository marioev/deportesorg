<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Noticium Edit</h3>
            </div>
			<?php echo form_open('noticium/edit/'.$noticium['id_not']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_camp" class="control-label">Id Camp</label>
						<div class="form-group">
							<input type="text" name="id_camp" value="<?php echo ($this->input->post('id_camp') ? $this->input->post('id_camp') : $noticium['id_camp']); ?>" class="form-control" id="id_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_ini_not" class="control-label">Fecha Ini Not</label>
						<div class="form-group">
							<input type="text" name="fecha_ini_not" value="<?php echo ($this->input->post('fecha_ini_not') ? $this->input->post('fecha_ini_not') : $noticium['fecha_ini_not']); ?>" class="has-datepicker form-control" id="fecha_ini_not" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_fin_not" class="control-label">Fecha Fin Not</label>
						<div class="form-group">
							<input type="text" name="fecha_fin_not" value="<?php echo ($this->input->post('fecha_fin_not') ? $this->input->post('fecha_fin_not') : $noticium['fecha_fin_not']); ?>" class="has-datepicker form-control" id="fecha_fin_not" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion_not" class="control-label">Descripcion Not</label>
						<div class="form-group">
							<textarea name="descripcion_not" class="form-control" id="descripcion_not"><?php echo ($this->input->post('descripcion_not') ? $this->input->post('descripcion_not') : $noticium['descripcion_not']); ?></textarea>
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