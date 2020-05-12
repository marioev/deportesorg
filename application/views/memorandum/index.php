<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Memorandum Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('memorandum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Memo</th>
						<th>Id Jug</th>
						<th>Id Equipo</th>
						<th>Titulo Memo</th>
						<th>Inicio Memo</th>
						<th>Fin Memo</th>
						<th>Estado Memo</th>
						<th>Detalle Memo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($memorandum as $m){ ?>
                    <tr>
						<td><?php echo $m['id_memo']; ?></td>
						<td><?php echo $m['id_jug']; ?></td>
						<td><?php echo $m['id_equipo']; ?></td>
						<td><?php echo $m['titulo_memo']; ?></td>
						<td><?php echo $m['inicio_memo']; ?></td>
						<td><?php echo $m['fin_memo']; ?></td>
						<td><?php echo $m['estado_memo']; ?></td>
						<td><?php echo $m['detalle_memo']; ?></td>
						<td>
                            <a href="<?php echo site_url('memorandum/edit/'.$m['id_memo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('memorandum/remove/'.$m['id_memo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
