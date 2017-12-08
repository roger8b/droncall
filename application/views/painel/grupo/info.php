<section class="content">
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-6">
			<table id="tabela" class="table table-bordered  table-hover table-responsive text-center" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tb_grupo as $tb) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $tb['nome'] ?>
                                </td>
                                <td>
                                    <?php  if($tb['user_status'] == 1){
                                    echo "Ativo";
                                    } else
                                    { echo "Inativo";
                                    } ?>
                                </td>
                                
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
		</div>
	</div>
	
</section>