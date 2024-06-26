<!doctype html>
<html lang="pt-PT">
    <head>
        <title>Entrar</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container">
            <div class="row">
                <div class="col-md-4 ">
                </div>
                <div class="col-md-4 ">
                    <br><br><br><br>
                    <br><br><br><br>
                   <div class="card">
                        <div class="card-header">Entrar</div>
                        <div class="card-body">
                            <?php if(isset($mensagem)) {?>
                                <div
                                    class="alert alert-danger"
                                    role="alert"
                                >
                                    <strong><?php echo $mensagem?></strong>
                                 </div>
                            <?php }?>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="nomedousuario" class="form-label">Usuário:</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nomedousuario"
                                        id="nomedousuario"
                                        aria-describedby="helpId"
                                        placeholder="Insira o seu nome de usuario..."
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha:</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="senha"
                                        id="senha"
                                        placeholder="Insira a sua senha de usuario..."
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-primary w-100"
                                >
                                    Entrar no Sisstema
                                </button>
                                
                            </form>
                        </div>
                   </div>
                   
                </div>
            </div>
            

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
