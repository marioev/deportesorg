<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Club Deportivo</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('club_deportivo/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>  Registrar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Club</th>
						<th>NOMBRE</th>
						<th>FUNDACION</th>
						<th>TELEFONO</th>
						<th>ESTADO</th>
						<th>DIRECCION</th>
						<th></th>
                    </tr>
                    <?php foreach($club_deportivo as $c){ ?>
                    <tr>
						<td><?php echo $c['id_club']; ?></td>
						<td><?php echo $c['nombre_club']; ?></td>
						<td><?php echo $c['fundacion_club']; ?></td>
						<td><?php echo $c['telef_club']; ?></td>
						<td><?php echo $c['estado_club']; ?></td>
						<td><?php echo $c['direccion_club']; ?></td>
						<td>
                            <a href="<?php echo site_url('club_deportivo/edit/'.$c['id_club']); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></span></a> 
                            <a href="<?php echo site_url('club_deportivo/remove/'.$c['id_club']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
