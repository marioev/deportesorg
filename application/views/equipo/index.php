<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Equipos</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('equipo/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>  Registrar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nº</th>
						<th>CLUB</th>
						<th>NOMBRE</th>
						<th>ESTADO</th>
						<th></th>
                    </tr>
                    <?php foreach($equipo as $e){ ?>
                    <tr>
						<td><?php echo $e['id_equipo']; ?></td>
						<td><?php echo $e['id_club']; ?></td>
						<td><?php echo $e['nombre_equipo']; ?></td>
						<td><?php echo $e['estado_equipo']; ?></td>
						<td>
                            <a href="<?php echo site_url('equipo/edit/'.$e['id_equipo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span></a> 
                            <a href="<?php echo site_url('equipo/remove/'.$e['id_equipo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
