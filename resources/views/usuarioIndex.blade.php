<br/>
    <div class="card">
        <div class="card-header">
           <a
            name=""
            id=""
            class="btn btn-primary"
            href="criar.php"
            role="button"
            >Adicionar Registro</a
           >
           
        </div>
        <div class="card-body">
            <div
                class="table-responsive-sm"
            >
                <table
                    class="table" id="tabela_id"
                >
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome do usuário</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($lista_tb_usuarios as $registro){ ?>
                            <tr class="">
                                <td scope="row"><?php echo $registro['id'];?></td>
                                <td><?php echo $registro['nomedousuario'];?></td>
                                <td><?php echo $registro['email'];?></td>
                                <td>*******</td>
                                <td>
                                    <a
                                        class="btn btn-info"
                                        href="editar.php?txtID=<?php echo $registro['id'];?>"
                                        role="button"
                                        >Editar
                                    </a>
                                    <a
                                        class="btn btn-danger"
                                        href="javascript:apagar(<?php echo $registro['id'];?>);"
                                        role="button"
                                        >Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>  

                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
    
<?php include("../../seccoes/footer.php"); ?>