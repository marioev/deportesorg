<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Registrar</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>N&deg;</th>
                        <th></th>
                        <th>NOMBRE</th>
                        <th>TIPO DE USUARIO</th>
                        <th>TELEFONO</th>
                        <th>CORREO E.</th>
                        <th>USUARIO</th>
                        <th>ESTADO</th>
                        <th></th>
                    </tr>
                    <?php $i = 0;
                          foreach($usuario as $u){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td class="text-center">
                            <?php if($u['imagen_usuario'] == null || $u['imagen_usuario'] == ""){ ?>
                                        <img src="<?php echo site_url('resources/images/usuario/default_thumb.jpg'); ?>" class="img-circle" width="40" height="40">
                            <?php }else{ ?>
                                        <a class="btn btn-xs" data-toggle="modal" data-target="#myModal<?php echo $u['id_usuario']; ?>">
                                            <img src="<?php echo site_url('resources/images/usuario/')."thumb_".$u['imagen_usuario']; ?>" class="img-circle" width="40" height="40">
                                        </a>
                            <?php } ?>
                            <!------------------------ INICIO modal para ver imagen ------------------->
                            <div class="modal fade" id="myModal<?php echo $u['id_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $u['id_usuario']; ?>">
                              <div class="modal-dialog" role="document">
                                    <br><br>
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                  </div>
                                  <div class="modal-body">
                                   <!------------------------------------------------------------------->
                                   <img style="max-height: 100%; max-width: 100%" src="<?php echo site_url('resources/images/usuario/').$u['imagen_usuario']; ?>">
                                   <!------------------------------------------------------------------->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!------------------------ FIN modal para ver imagen ------------------->
                        </td>
                        <td ><?php echo $u['nombre_usuario']; ?></td>
                        <td><?php echo $s['first_name']; ?></td>
                        <td><?php echo $s['last_name']; ?></td>
                        <td><?php echo $s['email_address']; ?></td>
                        <td><?php echo $s['username']; ?></td>
                        <td><?php echo $s['algorithm']; ?></td>
                        <td><?php echo $s['salt']; ?></td>
                        <td><?php echo $s['is_active']; ?></td>
                        <td><?php echo $s['is_super_admin']; ?></td>
                        <td><?php echo $s['last_login']; ?></td>
                        <td>
                            <a href="<?php echo site_url('sf_guard_user/edit/'.$s['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('sf_guard_user/remove/'.$s['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $i++;
                          } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
