<script type="text/javascript" src="<?php echo base_url('resources/js/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/js/ckfinder/ckfinder.js'); ?>"></script>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modificar Campeonato</h3>
            </div>
            <?php echo form_open_multipart('campeonato/edit/'.$campeonato['id_camp']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="nombre_camp" class="control-label"><span class="text-danger">*</span>Nombre</label>
                        <div class="form-group">
                            <input type="text" name="nombre_camp" value="<?php echo ($this->input->post('nombre_camp') ? $this->input->post('nombre_camp') : $campeonato['nombre_camp']); ?>" class="form-control" id="nombre_camp" autofocus autocomplete="off" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            <span class="text-danger"><?php echo form_error('nombre_camp');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_gestion" class="control-label"><span class="text-danger">*</span>Gestion</label>
                        <div class="form-group">
                            <select name="id_gestion" class="form-control" id="id_gestion" required >
                                <?php 
                                foreach($all_gestion as $gestion)
                                {
                                    $selected = ($gestion['id_gestion'] == $campeonato['id_gestion']) ? ' selected="selected"' : "";
                                    echo '<option value="'.$gestion['id_gestion'].'" '.$selected.'>'.$gestion['nombre_gestion'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_tipo_camp" class="control-label"><span class="text-danger">*</span>Tipo Campeonato</label>
                        <div class="form-group">
                            <select name="id_tipo_camp" class="form-control" id="id_tipo_camp" required >
                                <?php 
                                foreach($all_tipo_campeonato as $tipo_campeonato)
                                {
                                    $selected = ($tipo_campeonato['id_tipo_camp'] == $campeonato['id_tipo_camp']) ? ' selected="selected"' : "";
                                    echo '<option value="'.$tipo_campeonato['id_tipo_camp'].'" '.$selected.'>'.$tipo_campeonato['nombre_tipo_camp'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha_ini_camp" class="control-label"><span class="text-danger">*</span>F. Inicio</label>
                        <div class="form-group">
                            <input type="date" name="fecha_ini_camp" value="<?php echo ($this->input->post('fecha_ini_camp') ? $this->input->post('fecha_ini_camp') : $campeonato['fecha_ini_camp']); ?>" class="form-control" id="fecha_ini_camp" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha_fin_camp" class="control-label">F. Fin</label>
                        <div class="form-group">
                            <input type="date" name="fecha_fin_camp" value="<?php echo ($this->input->post('fecha_fin_camp') ? $this->input->post('fecha_fin_camp') : $campeonato['fecha_fin_camp']); ?>" class="form-control" id="fecha_fin_camp" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="archivo_camp" class="control-label">Archivo</label>
                        <div class="form-group">
                            <input type="file" name="archivo_camp" value="<?php echo $this->input->post('archivo_camp'); ?>" class="form-control" id="archivo_camp" />
                            <input type="hidden" name="archivo_camp1" value="<?php echo ($this->input->post('archivo_camp') ? $this->input->post('archivo_camp') : $campeonato['archivo_camp']); ?>" class="form-control" id="archivo_camp1" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="convocatoria_camp" class="control-label">Convocatoria</label>
                        <div class="form-group">
                            <textarea name="convocatoria_camp" class="form-control" id="convocatoria_camp"><?php echo ($this->input->post('convocatoria_camp') ? $this->input->post('convocatoria_camp') : $campeonato['convocatoria_camp']); ?></textarea>
                                <script type="text/javascript">
                                    var editor = CKEDITOR.replace( 'convocatoria_camp' );
                                    CKFinder.setupCKEditor( editor, '<?php echo base_url('resources/js/ckfinder/'); ?>' );
                                    //CKFinder.setupCKEditor( editor, '/../../deportesorg/resources/js/ckfinder/' );
                                </script>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $activo = "";
                        $inactivo = "";
                        if($campeonato['estado_camp']     == "ACTIVO"){ $activo = "selected";}
                        elseif($campeonato['estado_camp'] == "INACTIVO"){ $inactivo = "selected";}
                        ?>
                        <label for="estado_camp" class="control-label">Estado</label>
                        <div class="form-group">
                            <select name="estado_camp" id="estado_camp" class="form-control">
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
                <a href="<?php echo site_url('campeonato'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>