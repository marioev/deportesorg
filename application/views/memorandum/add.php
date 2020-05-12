<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Memorandum Add</h3>
            </div>
            <?php echo form_open('memorandum/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_jug" class="control-label">Id Jug</label>
						<div class="form-group">
							<input type="text" name="id_jug" value="<?php echo $this->input->post('id_jug'); ?>" class="form-control" id="id_jug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_equipo" class="control-label">Id Equipo</label>
						<div class="form-group">
							<input type="text" name="id_equipo" value="<?php echo $this->input->post('id_equipo'); ?>" class="form-control" id="id_equipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="titulo_memo" class="control-label">Titulo Memo</label>
						<div class="form-group">
							<input type="text" name="titulo_memo" value="<?php echo $this->input->post('titulo_memo'); ?>" class="form-control" id="titulo_memo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="inicio_memo" class="control-label">Inicio Memo</label>
						<div class="form-group">
							<input type="text" name="inicio_memo" value="<?php echo $this->input->post('inicio_memo'); ?>" class="has-datepicker form-control" id="inicio_memo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fin_memo" class="control-label">Fin Memo</label>
						<div class="form-group">
							<input type="text" name="fin_memo" value="<?php echo $this->input->post('fin_memo'); ?>" class="has-datepicker form-control" id="fin_memo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_memo" class="control-label">Estado Memo</label>
						<div class="form-group">
							<input type="text" name="estado_memo" value="<?php echo $this->input->post('estado_memo'); ?>" class="form-control" id="estado_memo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_memo" class="control-label">Detalle Memo</label>
						<div class="form-group">
							<textarea name="detalle_memo" class="form-control" id="detalle_memo"><?php echo $this->input->post('detalle_memo'); ?></textarea>
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