<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title center">Campeonatos</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('campeonato/add'); ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Registrar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>N&deg;</th>
                        <th>NOMBRE</th>
                        <th>TIPO</th>
                        <th>GESTION</th>
                        <th>ARCHIVO</th>
                        <th>F. INICIO</th>
                        <th>F. FIN</th>
                        <!--<th>DESCRIPCON</th>-->
                        <th>CONVOCATORIA</th>
                        <th>ESTADO</th>
                        <th></th>
                    </tr>
                    <?php $i = 0;
                          foreach($campeonato as $c){ ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $c['nombre_camp']; ?></td>
                        <td><?php echo $c['nombre_tipo_camp']; ?></td>
                        <td><?php echo $c['nombre_gestion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('/resources/images/campeonato/'.$c['archivo_camp']) ?>" target="_blank"><?php echo $c['archivo_camp']; ?></a>
                        </td>
                        <td><?php echo date("d/m/Y", strtotime($c['fecha_ini_camp'])); ?></td>
                        <td><?php if($c['fecha_fin_camp'] != "0000-00-00"){echo date("d/m/Y", strtotime($c['fecha_fin_camp'])); } ?></td>
                        <td class="text-center">
                            <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $c['id_camp']; ?>"  title="Ver convocatoria"><span class="fa fa-eye"></span></a>
                            <!------------------------ INICIO modal para ver la convocatoria ------------------->
                            <div class="modal fade" id="myModal<?php echo $c['id_camp']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $c['id_camp']; ?>">
                              <div class="modal-dialog" role="document">
                                    <br><br>
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                  </div>
                                  <div class="modal-body">
                                   <!------------------------------------------------------------------->
                                   <?php echo $c['convocatoria_camp']; ?>
                                   <!------------------------------------------------------------------->
                                  </div>
                                  <div class="modal-footer aligncenter">
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span> Cerrar </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!------------------------ FIN modal para ver la convocatoria ------------------->
                        </td>
                        <td><?php echo $c['estado_camp']; ?></td>
                        <!--<td><?php //echo $c['descripcion_camp']; ?></td>-->
                        <td>
                            <a href="<?php echo site_url('campeonato/edit/'.$c['id_camp']); ?>" class="btn btn-info btn-xs" title="Modificar campeonato"><span class="fa fa-edit"></span></a> 
                            <a href="<?php echo site_url('campeonato/remove/'.$c['id_camp']); ?>" class="btn btn-danger btn-xs" title="Eliminar campeonato"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php $i++;
                          } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
