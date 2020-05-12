<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jug Gol Edit</h3>
            </div>
			<?php echo form_open('jug_gol/edit/'.$jug_gol['id_jug_gol']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_jugador_planilla" class="control-label">Id Jugador Planilla</label>
						<div class="form-group">
							<input type="text" name="id_jugador_planilla" value="<?php echo ($this->input->post('id_jugador_planilla') ? $this->input->post('id_jugador_planilla') : $jug_gol['id_jugador_planilla']); ?>" class="form-control" id="id_jugador_planilla" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gol_jug_gol" class="control-label">Gol Jug Gol</label>
						<div class="form-group">
							<input type="text" name="gol_jug_gol" value="<?php echo ($this->input->post('gol_jug_gol') ? $this->input->post('gol_jug_gol') : $jug_gol['gol_jug_gol']); ?>" class="form-control" id="gol_jug_gol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="minuto_jug_gol" class="control-label">Minuto Jug Gol</label>
						<div class="form-group">
							<input type="text" name="minuto_jug_gol" value="<?php echo ($this->input->post('minuto_jug_gol') ? $this->input->post('minuto_jug_gol') : $jug_gol['minuto_jug_gol']); ?>" class="form-control" id="minuto_jug_gol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_jug_gol" class="control-label">Estado Jug Gol</label>
						<div class="form-group">
							<input type="text" name="estado_jug_gol" value="<?php echo ($this->input->post('estado_jug_gol') ? $this->input->post('estado_jug_gol') : $jug_gol['estado_jug_gol']); ?>" class="form-control" id="estado_jug_gol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descrip_jug_gol" class="control-label">Descrip Jug Gol</label>
						<div class="form-group">
							<textarea name="descrip_jug_gol" class="form-control" id="descrip_jug_gol"><?php echo ($this->input->post('descrip_jug_gol') ? $this->input->post('descrip_jug_gol') : $jug_gol['descrip_jug_gol']); ?></textarea>
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