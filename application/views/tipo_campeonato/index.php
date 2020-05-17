<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tipo Campeonato</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tipo_campeonato/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Registrar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>N&deg;</th>
                        <th>NOMBRE</th>
                        <th>ESTADO</th>
                        <th></th>
                    </tr>
                    <?php $i = 0;
                          foreach($tipo_campeonato as $t){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $t['nombre_tipo_camp']; ?></td>
                        <td><?php echo $t['estado_tipo_camp']; ?></td>
                        <td>
                            <a href="<?php echo site_url('tipo_campeonato/edit/'.$t['id_tipo_camp']); ?>" class="btn btn-info btn-xs" title="Modifcar tipo de campeonato"><span class="fas fa-edit"></span></a> 
                            <!--<a href="<?php //echo site_url('tipo_campeonato/remove/'.$t['id_tipo_camp']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>-->
                        </td>
                    </tr>
                    <?php $i++;
                          } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
