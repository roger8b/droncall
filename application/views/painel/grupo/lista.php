<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table id="tabela" class="table table-bordered  table-hover table-responsive text-center" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Administrador</th>
                                <th>Status</th>
                                <th>Editar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tb_grupo as $tb) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $tb['grupo'] ?>
                                </td>
                                <td>
                                    <?php echo $tb['admin']  ?>
                                </td>
                                <td>
                                    <?php  if($tb['status'] == 1){
                                    echo "Ativo";
                                    } else
                                    { echo "Inativo";
                                    } ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('painel_controle/grupo/') .$tb['id']?>"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <?php 
                                    if($tb['pertence'] == 1){
                                        echo '<a class="btn btn-block btn-primary" href="' .base_url('painel_controle/grupo/entrar/')  .$tb['id']. '">Entrar</a>';
                                    } else {
                                        echo '<a class="btn btn-block btn-primary" href="#">Solicitar</a>';
                                    }

                                     ?>
                                     <a href=""></a>

                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
</section>

<script type="text/javascript">
    entrar(1,2,3);
</script>