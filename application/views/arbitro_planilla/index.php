<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Arbitro Planilla Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('arbitro_planilla/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Arbitro</th>
						<th>Id Plan</th>
						<th>Tipo Juez</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($arbitro_planilla as $a){ ?>
                    <tr>
						<td><?php echo $a['id_arbitro']; ?></td>
						<td><?php echo $a['id_plan']; ?></td>
						<td><?php echo $a['tipo_juez']; ?></td>
						<td>
                            <a href="<?php echo site_url('arbitro_planilla/edit/'.$a['id_arbitro']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('arbitro_planilla/remove/'.$a['id_arbitro']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
