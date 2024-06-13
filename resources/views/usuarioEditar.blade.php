<br/>
<div class="card">
    <div class="card-header">Dados dos usuário</div>
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
                <label for="nomeusuario" class="form-label">Nome do usuário</label>
                <input
                    value="<?php echo $nomedousuario?>"
                    type="text"
                    class="form-control"
                    name="nomedousuario"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Nome do usuário ..."
                />
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    value="<?php echo $email?>"   
                    type="email"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="helpId"
                    placeholder="exmplo@email.com"
                />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input
                value="<?php echo $senha?>"
                    type="password"
                    class="form-control"
                    name="senha"
                    id="senha"
                    aria-describedby="helpId"
                    placeholder="Sua senha ..."
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

<?php include("../../seccoes/footer.php"); ?>

