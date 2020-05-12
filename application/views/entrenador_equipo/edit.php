<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Entrenador Equipo Edit</h3>
            </div>
			<?php echo form_open('entrenador_equipo/edit/'.$entrenador_equipo['id_equipo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="desde_ent_equ" class="control-label">Desde Ent Equ</label>
						<div class="form-group">
							<input type="text" name="desde_ent_equ" value="<?php echo ($this->input->post('desde_ent_equ') ? $this->input->post('desde_ent_equ') : $entrenador_equipo['desde_ent_equ']); ?>" class="has-datepicker form-control" id="desde_ent_equ" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hasta_ent_equ" class="control-label">Hasta Ent Equ</label>
						<div class="form-group">
							<input type="text" name="hasta_ent_equ" value="<?php echo ($this->input->post('hasta_ent_equ') ? $this->input->post('hasta_ent_equ') : $entrenador_equipo['hasta_ent_equ']); ?>" class="has-datepicker form-control" id="hasta_ent_equ" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_ent_equ" class="control-label">Estado Ent Equ</label>
						<div class="form-group">
							<input type="text" name="estado_ent_equ" value="<?php echo ($this->input->post('estado_ent_equ') ? $this->input->post('estado_ent_equ') : $entrenador_equipo['estado_ent_equ']); ?>" class="form-control" id="estado_ent_equ" />
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