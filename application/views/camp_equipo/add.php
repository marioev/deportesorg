<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Camp Equipo Add</h3>
            </div>
            <?php echo form_open('camp_equipo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_equipo" class="control-label">Id Equipo</label>
						<div class="form-group">
							<input type="text" name="id_equipo" value="<?php echo $this->input->post('id_equipo'); ?>" class="form-control" id="id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_camp" class="control-label">Id Camp</label>
						<div class="form-group">
							<input type="text" name="id_camp" value="<?php echo $this->input->post('id_camp'); ?>" class="form-control" id="id_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="etapa_equi_camp" class="control-label">Etapa Equi Camp</label>
						<div class="form-group">
							<input type="text" name="etapa_equi_camp" value="<?php echo $this->input->post('etapa_equi_camp'); ?>" class="form-control" id="etapa_equi_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="categoria_equi_camp" class="control-label">Categoria Equi Camp</label>
						<div class="form-group">
							<input type="text" name="categoria_equi_camp" value="<?php echo $this->input->post('categoria_equi_camp'); ?>" class="form-control" id="categoria_equi_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="serie_equi_camp" class="control-label">Serie Equi Camp</label>
						<div class="form-group">
							<input type="text" name="serie_equi_camp" value="<?php echo $this->input->post('serie_equi_camp'); ?>" class="form-control" id="serie_equi_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="inscripcion" class="control-label">Inscripcion</label>
						<div class="form-group">
							<input type="text" name="inscripcion" value="<?php echo $this->input->post('inscripcion'); ?>" class="form-control" id="inscripcion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="garantia" class="control-label">Garantia</label>
						<div class="form-group">
							<input type="text" name="garantia" value="<?php echo $this->input->post('garantia'); ?>" class="form-control" id="garantia" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dev_garantia" class="control-label">Dev Garantia</label>
						<div class="form-group">
							<input type="text" name="dev_garantia" value="<?php echo $this->input->post('dev_garantia'); ?>" class="form-control" id="dev_garantia" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_equi_camp" class="control-label">Estado Equi Camp</label>
						<div class="form-group">
							<input type="text" name="estado_equi_camp" value="<?php echo $this->input->post('estado_equi_camp'); ?>" class="form-control" id="estado_equi_camp" />
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