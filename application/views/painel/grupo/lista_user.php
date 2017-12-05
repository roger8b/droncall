<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table id="tabela" class="table table-bordered  table-hover table-responsive text-center" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tb_user as $ln) {
    ?>
                            <tr>
                                <td>
                                    <?php echo $ln['nome'] ?>
                                </td>
                                <td>
                                    <?php 
                                      if($ln['user_status'] == 0){
                                        echo "Criado";
                                      } else if ($ln['user_status'] == 1){
                                        echo "Ativo";
                                      } else {
                                        echo "Bloqueado";
                                      }
                                     ?>
                                </td>
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