<br/>
<div class="card">
    <div class="card-header">Dados dos Funcionarios</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input
                    value="<?php echo $txtID?>"
                    type="text"
                    class="form-control"
                    name="txtID"
                    id="txtID"
                    readonly
                    aria-describedby="helpId"
                    placeholder="ID"
                />
            </div>

            <div class="mb-3">
                <label for="primeironome" class="form-label">Primeiro nome</label>
                <input
                    value="<?php echo $primeironome?>"
                    type="text"
                    class="form-control"
                    name="primeironome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Primeiro nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="ultimonome" class="form-label">Ultimo Nome</label>
                <input
                    value="<?php echo $ultimonome?>"
                    type="text"
                    class="form-control"
                    name="ultimonome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="ultimonome ..."
                />
            </div>
            
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <br/>
                <img
                    width="100"
                    src="<?php echo $registro['foto']; ?>"
                    class="img-fluid rounded-top "
                    alt="nomefoto"  
                /> 
                <br/> 
                <input
                    type="file"
                    class="form-control"
                    name="foto"
                    id="foto"
                    aria-describedby="helpId"
                    placeholder="foto"
                />
            </div>
            <div class="mb-3">
                <label for="documento" class="form-label">Documento (PDF)</label>
                <a href="<?php echo $documento?>" target="_blank"><?php echo $documento?></a>
                <input
                    type="file"
                    class="form-control"
                    name="documento"
                    id="documento"
                    aria-describedby="helpId"
                    placeholder="documento"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Posição</label>
                <select
                    class="form-select form-select-sm"
                    name="idposicao"
                    id="idposicao"
                >
                    <?php
                    foreach($lista_tb_posicao as $registro){ ?> 

                        <option <?php echo ($idposicao==$registro['id'])?"selected":"";?> value="<?php echo $registro['id'];?>">
                            <?php echo $registro['nomedaposicao'];?>
                        </option>
                    <?php } ?>  
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Data de admissão</label>
                
                <input
                    value="<?php echo $data?>"
                    type="date"
                    class="form-control"
                    name="data"
                    id="iddata"
                    aria-describedby="emailHelpId"
                    placeholder="abc@mail.com"
                />
                
            </div>
            <button
                type="submit"
                class="btn btn-success"
            >
                Actualizar Registro
            </button>
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Cancelar</a
            >      
        </form>
    </div>
    
</div>
<?php include("../../seccoes/footer.php"); ?>