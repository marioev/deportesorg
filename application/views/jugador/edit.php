<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jugador Edit</h3>
            </div>
			<?php echo form_open('jugador/edit/'.$jugador['id_jug']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_inf" class="control-label">Id Inf</label>
						<div class="form-group">
							<input type="text" name="id_inf" value="<?php echo ($this->input->post('id_inf') ? $this->input->post('id_inf') : $jugador['id_inf']); ?>" class="form-control" id="id_inf" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="posicion_jug" class="control-label">Posicion Jug</label>
						<div class="form-group">
							<input type="text" name="posicion_jug" value="<?php echo ($this->input->post('posicion_jug') ? $this->input->post('posicion_jug') : $jugador['posicion_jug']); ?>" class="form-control" id="posicion_jug" />
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