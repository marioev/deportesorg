<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Movimiento Add</h3>
            </div>
            <?php echo form_open('movimiento/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_camp" class="control-label">Id Camp</label>
						<div class="form-group">
							<input type="text" name="id_camp" value="<?php echo $this->input->post('id_camp'); ?>" class="form-control" id="id_camp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_mov" class="control-label">Fecha Mov</label>
						<div class="form-group">
							<input type="text" name="fecha_mov" value="<?php echo $this->input->post('fecha_mov'); ?>" class="has-datetimepicker form-control" id="fecha_mov" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_mov" class="control-label">Tipo Mov</label>
						<div class="form-group">
							<input type="text" name="tipo_mov" value="<?php echo $this->input->post('tipo_mov'); ?>" class="form-control" id="tipo_mov" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cant_ingreso" class="control-label">Cant Ingreso</label>
						<div class="form-group">
							<input type="text" name="cant_ingreso" value="<?php echo $this->input->post('cant_ingreso'); ?>" class="form-control" id="cant_ingreso" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cant_egreso" class="control-label">Cant Egreso</label>
						<div class="form-group">
							<input type="text" name="cant_egreso" value="<?php echo $this->input->post('cant_egreso'); ?>" class="form-control" id="cant_egreso" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cant_saldo" class="control-label">Cant Saldo</label>
						<div class="form-group">
							<input type="text" name="cant_saldo" value="<?php echo $this->input->post('cant_saldo'); ?>" class="form-control" id="cant_saldo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_ingreso" class="control-label">Monto Ingreso</label>
						<div class="form-group">
							<input type="text" name="monto_ingreso" value="<?php echo $this->input->post('monto_ingreso'); ?>" class="form-control" id="monto_ingreso" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_salida" class="control-label">Monto Salida</label>
						<div class="form-group">
							<input type="text" name="monto_salida" value="<?php echo $this->input->post('monto_salida'); ?>" class="form-control" id="monto_salida" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_saldo" class="control-label">Monto Saldo</label>
						<div class="form-group">
							<input type="text" name="monto_saldo" value="<?php echo $this->input->post('monto_saldo'); ?>" class="form-control" id="monto_saldo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado_mov" class="control-label">Estado Mov</label>
						<div class="form-group">
							<input type="text" name="estado_mov" value="<?php echo $this->input->post('estado_mov'); ?>" class="form-control" id="estado_mov" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle_mov" class="control-label">Detalle Mov</label>
						<div class="form-group">
							<textarea name="detalle_mov" class="form-control" id="detalle_mov"><?php echo $this->input->post('detalle_mov'); ?></textarea>
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