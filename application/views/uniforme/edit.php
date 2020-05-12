<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Uniforme Edit</h3>
            </div>
			<?php echo form_open('uniforme/edit/'.$uniforme['id_unif']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_equipo" class="control-label">Id Equipo</label>
						<div class="form-group">
							<input type="text" name="id_equipo" value="<?php echo ($this->input->post('id_equipo') ? $this->input->post('id_equipo') : $uniforme['id_equipo']); ?>" class="form-control" id="id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="casaca_unif" class="control-label">Casaca Unif</label>
						<div class="form-group">
							<input type="text" name="casaca_unif" value="<?php echo ($this->input->post('casaca_unif') ? $this->input->post('casaca_unif') : $uniforme['casaca_unif']); ?>" class="form-control" id="casaca_unif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pant_corto_unif" class="control-label">Pant Corto Unif</label>
						<div class="form-group">
							<input type="text" name="pant_corto_unif" value="<?php echo ($this->input->post('pant_corto_unif') ? $this->input->post('pant_corto_unif') : $uniforme['pant_corto_unif']); ?>" class="form-control" id="pant_corto_unif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medias_unif" class="control-label">Medias Unif</label>
						<div class="form-group">
							<input type="text" name="medias_unif" value="<?php echo ($this->input->post('medias_unif') ? $this->input->post('medias_unif') : $uniforme['medias_unif']); ?>" class="form-control" id="medias_unif" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="imagen_unif" class="control-label">Imagen Unif</label>
						<div class="form-group">
							<input type="text" name="imagen_unif" value="<?php echo ($this->input->post('imagen_unif') ? $this->input->post('imagen_unif') : $uniforme['imagen_unif']); ?>" class="form-control" id="imagen_unif" />
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