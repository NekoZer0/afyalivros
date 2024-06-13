<br/>
    <div class="card">
        <div class="card-header">
           <a
            name=""
            id=""
            class="btn btn-primary"
            href="criar.php"
            role="button"
            >Adicionar Livro</a
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
                            <th scope="col">ID</th>
                            <th scope="col">Nome do Livro</th>
                            <th scope="col">Foto</th>
                            <th scope="col">LivroPDF</th>
                            <th scope="col">Fornecidor</th>
                            <th scope="col">Data</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($lista_tb_funcionarios as $registro){ ?>
                            <tr class="">
                                <td scope="row"><?php echo $registro['id'];?></td>
                                <td scope="row"><?php echo $registro['primeironome']." ".$registro['ultimonome'];?></td>
                                <td scope="row">
                                    <img
                                        width="32"
                                        src="<?php echo $registro['foto']; ?>"
                                        class="img-fluid rounded-top "
                                        alt="nomefoto"  
                                    />  
                                </td>
                                <td><?php echo $registro['livroPDF'];?></td>
                                <td><?php echo $registro['fornecedor'];?></td>
                                <td><?php echo $registro['data'];?></td>
                                <td>
                                    <a
                                        name=""
                                        id=""
                                        class="btn btn-primary"
                                        href="relatorio.php?txtID=<?php echo $registro['id'];?>"
                                        role="button"
                                        >Carta</a
                                    >
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