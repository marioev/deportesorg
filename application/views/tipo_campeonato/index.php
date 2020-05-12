<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tipo Campeonato Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tipo_campeonato/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Tipo Camp</th>
						<th>Nombre Tipo Camp</th>
						<th>Estado Tipo Camp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tipo_campeonato as $t){ ?>
                    <tr>
						<td><?php echo $t['id_tipo_camp']; ?></td>
						<td><?php echo $t['nombre_tipo_camp']; ?></td>
						<td><?php echo $t['estado_tipo_camp']; ?></td>
						<td>
                            <a href="<?php echo site_url('tipo_campeonato/edit/'.$t['id_tipo_camp']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tipo_campeonato/remove/'.$t['id_tipo_camp']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
