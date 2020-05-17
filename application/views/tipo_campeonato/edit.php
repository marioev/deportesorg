<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Tipo Campeonato</h3>
            </div>
            <?php echo form_open('tipo_campeonato/edit/'.$tipo_campeonato['id_tipo_camp']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="nombre_tipo_camp" class="control-label"><span class="text-danger">*</span>Nombre</label>
                        <div class="form-group">
                            <input type="text" name="nombre_tipo_camp" value="<?php echo ($this->input->post('nombre_tipo_camp') ? $this->input->post('nombre_tipo_camp') : $tipo_campeonato['nombre_tipo_camp']); ?>" class="form-control" id="nombre_tipo_camp" autofocus autocomplete="off" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            <span class="text-danger"><?php echo form_error('nombre_tipo_camp');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $activo = "";
                        $inactivo = "";
                        if($tipo_campeonato['estado_tipo_camp']     == "ACTIVO"){ $activo = "selected";}
                        elseif($tipo_campeonato['estado_tipo_camp'] == "INACTIVO"){ $inactivo = "selected";}
                        ?>
                        <label for="estado_tipo_camp" class="control-label">Estado</label>
                        <div class="form-group">
                            <select name="estado_tipo_camp" id="estado_tipo_camp" class="form-control">
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
                <a href="<?php echo site_url('tipo_campeonato'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>				
            <?php echo form_close(); ?>
        </div>
    </div>
</div>