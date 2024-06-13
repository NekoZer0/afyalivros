<br/>
<div class="card">
    <div class="card-header">Dado do Fornecedor</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input
                    value="<?php ##echo $txtID?>"
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
                <label for="nomedofornecedor" class="form-label">Nome do fornecedor</label>
                <input
                    value="<?php ##echo $nomedofornecedor?>"
                    type="text"
                    class="form-control"
                    name="nomedofornecedor"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Nome do fornecedor do livro ..."
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
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../seccoes/footer.php"); ?>