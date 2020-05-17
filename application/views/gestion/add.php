<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Registrar Gesti&oacute;n</h3>
            </div>
            <?php echo form_open('gestion/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="nombre_gestion" class="control-label"><span class="text-danger">*</span>Nombre</label>
                        <div class="form-group">
                            <input type="text" name="nombre_gestion" value="<?php echo $this->input->post('nombre_gestion'); ?>" class="form-control" id="nombre_gestion" autofocus autocomplete="off" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            <span class="text-danger"><?php echo form_error('nombre_gestion');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inicio_gestion" class="control-label"><span class="text-danger">*</span>F. Inicio</label>
                        <div class="form-group">
                            <input type="date" name="inicio_gestion" value="<?php echo $this->input->post('inicio_gestion'); ?>" class="form-control" id="inicio_gestion" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fin_gestion" class="control-label">F. Fin</label>
                        <div class="form-group">
                            <input type="date" name="fin_gestion" value="<?php echo $this->input->post('fin_gestion'); ?>" class="form-control" id="fin_gestion" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Guardar
            </button>
                <a href="<?php echo site_url('gestion'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>