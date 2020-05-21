<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tipos de Usuario</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tipo_usuario/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Registrar</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>N&deg;</th>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                    <?php $i = 0;
                          foreach($tipo_usuario as $tu){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $tu['descripcion_tipousuario']; ?></td>
                        <td>
                            <a href="<?php echo site_url('tipo_usuario/edit/'.$tu['id_tipousuario']); ?>" class="btn btn-info btn-xs" title="Modificar tipo usuario"><span class="fa fa-edit"></span></a> 
                            <!--<a href="<?php // echo site_url('sf_guard_user/remove/'.$s['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>-->
                        </td>
                    </tr>
                    <?php $i++;
                    } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
