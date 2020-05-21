<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Club Deportivo Edit</h3>
            </div>
			<?php echo form_open('club_deportivo/edit/'.$club_deportivo['id_club']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_club" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre_club" value="<?php echo ($this->input->post('nombre_club') ? $this->input->post('nombre_club') : $club_deportivo['nombre_club']); ?>" class="form-control" id="nombre_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fundacion_club" class="control-label">Fundacion</label>
						<div class="form-group">
							<input type="date" name="fundacion_club" value="<?php echo ($this->input->post('fundacion_club') ? $this->input->post('fundacion_club') : $club_deportivo['fundacion_club']); ?>" class="form-control" id="fundacion_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telef_club" class="control-label">Telefono</label>
						<div class="form-group">
							<input type="text" name="telef_club" value="<?php echo ($this->input->post('telef_club') ? $this->input->post('telef_club') : $club_deportivo['telef_club']); ?>" class="form-control" id="telef_club" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion_club" class="control-label">Direccion</label>
						<div class="form-group">
							<input type="text"  name="direccion_club" class="form-control" id="direccion_club" value="<?php echo ($this->input->post('direccion_club') ? $this->input->post('direccion_club') : $club_deportivo['direccion_club']); ?>" />
						</div>
					</div>
					<div class="col-md-6">
                        <?php
                        $activo = "";
                        $inactivo = "";
                        if($club_deportivo['estado_club']     == "ACTIVO"){ $activo = "selected";}
                        elseif($club_deportivo['estado_club'] == "INACTIVO"){ $inactivo = "selected";}
                        ?>
                        <label for="estado_club" class="control-label">Estado</label>
                        <div class="form-group">
                            <select name="estado_club" id="estado_club" class="form-control">
                                <option <?php echo $activo; ?> value="ACTIVO"> ACTIVO </option>
                                <option <?php echo $inactivo; ?> value="INACTIVO"> INACTIVO </option>
                            </select>
                        </div>
                    </div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('club_deportivo'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
          	</div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>