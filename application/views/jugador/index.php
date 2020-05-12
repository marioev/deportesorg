<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jugador Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jugador/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Jug</th>
						<th>Id Inf</th>
						<th>Posicion Jug</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($jugador as $j){ ?>
                    <tr>
						<td><?php echo $j['id_jug']; ?></td>
						<td><?php echo $j['id_inf']; ?></td>
						<td><?php echo $j['posicion_jug']; ?></td>
						<td>
                            <a href="<?php echo site_url('jugador/edit/'.$j['id_jug']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jugador/remove/'.$j['id_jug']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
