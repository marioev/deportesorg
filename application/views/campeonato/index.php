<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Campeonato Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('campeonato/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Camp</th>
						<th>Id Gestion</th>
						<th>Id Tipo Camp</th>
						<th>Nombre Camp</th>
						<th>Archivo Camp</th>
						<th>Fecha Ini Camp</th>
						<th>Fecha Fin Camp</th>
						<th>Estado Camp</th>
						<th>Descripcion Camp</th>
						<th>Convocatoria Camp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($campeonato as $c){ ?>
                    <tr>
						<td><?php echo $c['id_camp']; ?></td>
						<td><?php echo $c['id_gestion']; ?></td>
						<td><?php echo $c['id_tipo_camp']; ?></td>
						<td><?php echo $c['nombre_camp']; ?></td>
						<td><?php echo $c['archivo_camp']; ?></td>
						<td><?php echo $c['fecha_ini_camp']; ?></td>
						<td><?php echo $c['fecha_fin_camp']; ?></td>
						<td><?php echo $c['estado_camp']; ?></td>
						<td><?php echo $c['descripcion_camp']; ?></td>
						<td><?php echo $c['convocatoria_camp']; ?></td>
						<td>
                            <a href="<?php echo site_url('campeonato/edit/'.$c['id_camp']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('campeonato/remove/'.$c['id_camp']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
