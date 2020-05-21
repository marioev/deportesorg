<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<link href="<?php echo site_url('resources/css/formValidation.css')?>" rel="stylesheet">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Registrar Usuario</h3>
            </div>
            <?php echo form_open_multipart('usuario/add', array("name" => "usuarioForm", "id"=>"usuarioForm")); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="nombre_usuario" class="control-label"><span class="text-danger">*</span>Nombre</label>
                        <div class="form-group">
                            <input type="text" name="nombre_usuario" value="<?php echo $this->input->post('nombre_usuario'); ?>" class="form-control" id="nombre_usuario" autofocus autocomplete="off" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            <span class="text-danger"><?php echo form_error('nombre_usuario');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_tipousuario" class="control-label"><span class="text-danger">*</span>Tipo de Usuario</label>
                        <div class="form-group">
                            <select name="id_tipousuario" class="form-control" id="id_tipousuario" required >
                                <option value=""> - TIPO USUARIO - </option>
                                <?php 
                                foreach($all_tipo_usuario as $tipo_usuario)
                                {
                                    $selected = ($tipo_usuario['id_tipousuario'] == $this->input->post('id_tipousuario')) ? ' selected="selected"' : "";
                                    echo '<option value="'.$tipo_usuario['id_tipousuario'].'" '.$selected.'>'.$tipo_usuario['descripcion_tipousuario'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="telefono_usuario" class="control-label">Tel&eacute;fono</label>
                        <div class="form-group">
                            <input type="text" name="telefono_usuario" value="<?php echo $this->input->post('telefono_usuario'); ?>" class="form-control" id="telefono_usuario" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="email_usuario" class="control-label"><span class="text-danger">*</span>Correo Electr&oacute;nico</label>
                        <div class="form-group">
                            <input type="email" name="email_usuario" value="<?php echo $this->input->post('email_usuario'); ?>" class="form-control" id="email_usuario" autocomplete="off" required />
                            <span class="text-danger"><?php echo form_error('email_usuario');?></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="login_usuario" class="control-label"><span class="text-danger">*</span>Usuario</label>
                        <div class="form-group">
                            <input type="text" name="login_usuario" value="<?php echo $this->input->post('login_usuario'); ?>" class="form-control" id="login_usuario" required autocomplete="off" />
                            <span class="text-danger"><?php echo form_error('login_usuario');?></span>
                            <div id="user-result"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="clave_usuario" class="control-label"><span class="text-danger">*</span>Contraseña</label>
                        <div class="form-group">
                            <input type="password" name="clave_usuario" value="<?php echo $this->input->post('clave_usuario'); ?>" class="form-control" id="clave_usuario" required />
                            <span class="text-danger"><?php echo form_error('clave_usuario');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="rclave_usuario" class="control-label"><span class="text-danger">*</span>Repetir Contraseña</label>
                        <div class="form-group">
                            <input type="password" name="rclave_usuario" value="<?php echo $this->input->post('rclave_usuario'); ?>" class="form-control" id="rclave_usuario" required />
                            <span class="text-danger"><?php echo form_error('rclave_usuario');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="imagen_usuario" class="control-label">Imagen</label>
                        <div class="form-group">
                            <input type="file" name="imagen_usuario"  id="imagen_usuario" kl_virtual_keyboard_secure_input="on" class="form-control.input"  value="<?php echo $this->input->post('imagen_usuario'); ?>" accept="image/png, image/jpeg, image/jpg, image/gif" >
                            <!--<small class="help-block" data-fv-result="INVALID" data-fv-for="chivo" data-fv-validator="notEmpty" style=""></small>-->
                            <h4 id='loading' ></h4>
                            <div id="message"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url('resources/images/usuario/default.jpg')?>" id="previewing" class="img-responsive center-block">
                    </div>
                </div>
            </div>
            <div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('usuario'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar</a>
            </div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#usuarioForm').formValidation({
            message: 'Este valor no es valido',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                id_tipousuario:{
                    validators:{
                        notEmpty: {
                            message: 'Elegir un tipo de usuario'
                        }
                    }
                },

                nombre_usuario: {
                    validators: {
                        notEmpty: {
                            message: 'Nombre es un campo requerido'
                        },
                        stringLength: {
                            min: 3,
                            max: 150,
                            message: 'Nombre debe tener al menos 3 caracteres y maximo 150'
                        },
                        regexp: {
                            regexp: /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u,
                            message: 'Solo es posible usar letras y espacios en blanco'
                        }
                    }
                },
                email_usuario: {
                    validators: {
                        notEmpty: {
                            message: 'Email es un campo requerido'
                        },
                        emailAddress: {
                            message: 'Entrada no es un email valido'
                        }
                    }
                },
                /*usuario_imagen: {
                    validators: {
                        file: {
                            extension: 'jpeg,jpg,png,gif',
                            type: 'image/jpeg,image/png,image/jpg,image/gif',
                            maxSize: 360800,   // 2048 * 1024
                            message: 'El archivo seleccionado no es valido, Tamaño Maximo 350 Kb'
                        }
                    }
                },*/
                clave_usuario:{
                    validators:{
                        notEmpty: {
                            message: 'Contraseña es obligatorio'
                        }
                    }
                },
                rclave_usuario: {
                    validators: {
                        notEmpty: {
                            message: 'Repetir contraseña es obligatorio'
                        },
                        identical: {
                            field: 'usuario_clave',
                            message: 'Los campos no son iguales, vuelva a intentar'
                        }
                    }
                }
            }
        });
        
        $(function() {
            $("#imagen_usuario").change(function() {

                $("#message").empty(); // To remove the previous error message
                var file = this.files[0];
                var imagefile = file.type;
                var match= ["image/jpeg","image/png","image/jpg","image/gif"];
                if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
                {
                    //alert();
                    $('#previewing').attr('src','<?php echo base_url("resources/images/usuario/default.jpg")?>');
                    $("#message").html("<p id='error'>Seleccione un archivo valido</p>"+"<h4>Nota</h4>"+"<span id='error_message'>Solo son permitidos imagenes tipo: jpeg, jpg y png</span>");
                    return false;
                }
                else
                {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });

        function imageIsLoaded(e) {
            $("#imagen_usuario").css("color","green");
            $('#image_preview').css("display", "block");
            $('#previewing').attr('src', e.target.result);
            $('#previewing').attr('width', '50%');
            $('#previewing').attr('height', '59%');
        };

        var x_timer;
        $("#login_usuario").keyup(function (e){
            clearTimeout(x_timer);
            var user_login = $(this).val();
            //if(  isNaN(user_numero) ){
            x_timer = setTimeout(function(){
                check_login_ajax(user_login);
            }, 1000);
            //}
        });

        function check_login_ajax(userlogin){

            var parametros = {
                'login':userlogin
            };
            //alert('num:'+usernumero+',iddes:'+useriddes);
            $.ajax({
                data:  parametros,
                url:   '<?php echo base_url('usuario/haylogin1')?>',
                type:  'post',
//                    dataType: "json",
                beforeSend: function () {
                    /// $("#registrando").html("<h5>Procesando, espere por favor...</h5>");
                    $("#user-result").html('<img src="<?php echo base_url('resources/images/loader.gif')?>" />');
                },
                success:  function (response) {
                    console.log(response);
                    if(response=='1'){
                        $("#user-result").html('<small style="color: #f0120a;" class="help-block"><i class="fa fa-close"></i> El login: '+userlogin+' Ya esta en uso, elija otro</small>');
                        $("#usuarioForm").attr('class', 'form-group has-feedback has-error');
                        $("#boton").attr( "disabled","disabled" );
                    }
                    if(response=='0'){
                        $("#user-result").html('<i class="fa fa-check" style="color: #00CC00;"></i>');
                        $("#usuarioForm").attr('class', 'form-group');
                        $("#boton").removeAttr("disabled");
                    }
                }
            });
        }


    });
</script>
<script src="<?php echo base_url('resources/js/formValidation.js');?>"></script>
<script src="<?php echo base_url('resources/js/formValidationBootstrap.js');?>"></script>