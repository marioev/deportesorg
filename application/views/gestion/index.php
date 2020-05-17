<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Gestiones</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('gestion/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Registrar</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>N&deg;</th>
                        <th>NOMBRE</th>
                        <th>F. INICIO</th>
                        <th>F. FIN</th>
                        <th>ESTADO</th>
                        <th></th>
                    </tr>
                    <?php $i = 0;
                          foreach($gestion as $g){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $g['nombre_gestion']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($g['inicio_gestion'])); ?></td>
                        <td><?php if($g['fin_gestion'] != "0000-00-00"){ echo date("d/m/Y", strtotime($g['fin_gestion'])); } ?></td>
                        <td><?php echo $g['estado_gestion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('gestion/edit/'.$g['id_gestion']); ?>" class="btn btn-info btn-xs" title="Modificar gestion"><span class="fas fa-edit"></span></a> 
                            <!--<a href="<?php //echo site_url('gestion/remove/'.$g['id_gestion']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>-->
                        </td>
                    </tr>
                    <?php $i++;
                          } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
