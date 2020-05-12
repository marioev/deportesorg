<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Equipo Jugador Edit</h3>
            </div>
			<?php echo form_open('equipo_jugador/edit/'.$equipo_jugador['id_jug_equipo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_jug" class="control-label">Id Jug</label>
						<div class="form-group">
							<input type="text" name="id_jug" value="<?php echo ($this->input->post('id_jug') ? $this->input->post('id_jug') : $equipo_jugador['id_jug']); ?>" class="form-control" id="id_jug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_equipo" class="control-label">Id Equipo</label>
						<div class="form-group">
							<input type="text" name="id_equipo" value="<?php echo ($this->input->post('id_equipo') ? $this->input->post('id_equipo') : $equipo_jugador['id_equipo']); ?>" class="form-control" id="id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desde_equ_jug" class="control-label">Desde Equ Jug</label>
						<div class="form-group">
							<input type="text" name="desde_equ_jug" value="<?php echo ($this->input->post('desde_equ_jug') ? $this->input->post('desde_equ_jug') : $equipo_jugador['desde_equ_jug']); ?>" class="has-datepicker form-control" id="desde_equ_jug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hasta_equ_jug" class="control-label">Hasta Equ Jug</label>
						<div class="form-group">
							<input type="text" name="hasta_equ_jug" value="<?php echo ($this->input->post('hasta_equ_jug') ? $this->input->post('hasta_equ_jug') : $equipo_jugador['hasta_equ_jug']); ?>" class="has-datepicker form-control" id="hasta_equ_jug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_jug_equipo" class="control-label">Estado Jug Equipo</label>
						<div class="form-group">
							<input type="text" name="estado_jug_equipo" value="<?php echo ($this->input->post('estado_jug_equipo') ? $this->input->post('estado_jug_equipo') : $equipo_jugador['estado_jug_equipo']); ?>" class="form-control" id="estado_jug_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="obs_equ_jug" class="control-label">Obs Equ Jug</label>
						<div class="form-group">
							<textarea name="obs_equ_jug" class="form-control" id="obs_equ_jug"><?php echo ($this->input->post('obs_equ_jug') ? $this->input->post('obs_equ_jug') : $equipo_jugador['obs_equ_jug']); ?></textarea>
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