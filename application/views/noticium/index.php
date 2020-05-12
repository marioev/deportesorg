<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Noticia Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('noticium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Not</th>
						<th>Id Camp</th>
						<th>Fecha Ini Not</th>
						<th>Fecha Fin Not</th>
						<th>Descripcion Not</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($noticia as $n){ ?>
                    <tr>
						<td><?php echo $n['id_not']; ?></td>
						<td><?php echo $n['id_camp']; ?></td>
						<td><?php echo $n['fecha_ini_not']; ?></td>
						<td><?php echo $n['fecha_fin_not']; ?></td>
						<td><?php echo $n['descripcion_not']; ?></td>
						<td>
                            <a href="<?php echo site_url('noticium/edit/'.$n['id_not']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('noticium/remove/'.$n['id_not']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
