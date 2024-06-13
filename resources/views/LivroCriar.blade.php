<br/>
<div class="card">
    <div class="card-header">Dados dos Funcionarios</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="primeironome" class="form-label">Primeiro nome</label>
                <input
                    type="text"
                    class="form-control"
                    name="primeironome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Primeiro nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="ultimonome" class="form-label">Ultimo nome</label>
                <input
                    type="text"
                    class="form-control"
                    name="ultimonome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Ultimo nome ..."
                />
            </div>
            
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
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
                        <option value="<?php echo $registro['id'];?>">
                            <?php echo $registro['nomedaposicao'];?>
                        </option>
                    <?php } ?>  
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Data de admissão</label>
                <input
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
                Adicionar Registro
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