<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Camp Equipo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('camp_equipo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Equi Camp</th>
						<th>Id Equipo</th>
						<th>Id Camp</th>
						<th>Etapa Equi Camp</th>
						<th>Categoria Equi Camp</th>
						<th>Serie Equi Camp</th>
						<th>Inscripcion</th>
						<th>Garantia</th>
						<th>Dev Garantia</th>
						<th>Estado Equi Camp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($camp_equipo as $c){ ?>
                    <tr>
						<td><?php echo $c['id_equi_camp']; ?></td>
						<td><?php echo $c['id_equipo']; ?></td>
						<td><?php echo $c['id_camp']; ?></td>
						<td><?php echo $c['etapa_equi_camp']; ?></td>
						<td><?php echo $c['categoria_equi_camp']; ?></td>
						<td><?php echo $c['serie_equi_camp']; ?></td>
						<td><?php echo $c['inscripcion']; ?></td>
						<td><?php echo $c['garantia']; ?></td>
						<td><?php echo $c['dev_garantia']; ?></td>
						<td><?php echo $c['estado_equi_camp']; ?></td>
						<td>
                            <a href="<?php echo site_url('camp_equipo/edit/'.$c['id_equi_camp']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('camp_equipo/remove/'.$c['id_equi_camp']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
