<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jugador Planilla Edit</h3>
            </div>
			<?php echo form_open('jugador_planilla/edit/'.$jugador_planilla['id_jugador_planilla']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="jugador" value="1" <?php echo ($jugador_planilla['jugador']==1 ? 'checked="checked"' : ''); ?> id='jugador' />
							<label for="jugador" class="control-label">Jugador</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="arquero" value="1" <?php echo ($jugador_planilla['arquero']==1 ? 'checked="checked"' : ''); ?> id='arquero' />
							<label for="arquero" class="control-label">Arquero</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="capitan" value="1" <?php echo ($jugador_planilla['capitan']==1 ? 'checked="checked"' : ''); ?> id='capitan' />
							<label for="capitan" class="control-label">Capitan</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_plan" class="control-label">Id Plan</label>
						<div class="form-group">
							<input type="text" name="id_plan" value="<?php echo ($this->input->post('id_plan') ? $this->input->post('id_plan') : $jugador_planilla['id_plan']); ?>" class="form-control" id="id_plan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_jug" class="control-label">Id Jug</label>
						<div class="form-group">
							<input type="text" name="id_jug" value="<?php echo ($this->input->post('id_jug') ? $this->input->post('id_jug') : $jugador_planilla['id_jug']); ?>" class="form-control" id="id_jug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_casaca" class="control-label">Num Casaca</label>
						<div class="form-group">
							<input type="text" name="num_casaca" value="<?php echo ($this->input->post('num_casaca') ? $this->input->post('num_casaca') : $jugador_planilla['num_casaca']); ?>" class="form-control" id="num_casaca" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gol" class="control-label">Gol</label>
						<div class="form-group">
							<input type="text" name="gol" value="<?php echo ($this->input->post('gol') ? $this->input->post('gol') : $jugador_planilla['gol']); ?>" class="form-control" id="gol" />
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