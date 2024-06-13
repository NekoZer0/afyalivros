<!doctype html>
<html lang="pt-AO">

<head>
    <title>Katamba | Control de Relatorios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!--Jquary | https://releases.jquery.com/-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DataTables https://datatables.net/manual/installation -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?php //echo $url_base; ?>index.php" aria-current="page"><span
                            class="navbar-brand mb-0 h1 ">AFYA</span>
                        <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $url_base; ?>modelos/funcionarios">Controle de Relatorios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $url_base; ?>modelos/posicoes">Posições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $url_base; ?>modelos/usuarios">Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php // echo $url_base; ?>terminar.php">Terminar Secção</a>
                </li>
            </ul>
        </nav>
        <br>
    </header>
    <main class="container">
        <?php
            $this->carregarViewNoTemplate($nomeView, $dadosModel)
        ?>
        <?php

        
        if (isset($_GET['mensagem'])) { ?>
            <script>
                Swal.fire({ icon: "success", title: "<?php echo $_GET['mensagem']; ?>" });
            </script>
        <?php } ?>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(
            function () {
                $("#tabela_id").DataTable({
                    "pageLength": 3,
                    lengthMenu: [
                        [3, 10, 25, 50],
                        [3, 10, 25, 50]
                    ],
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/pt-PT.json"
                    }
                });
            }
        );
    </script>

    <script>
        function apagar(id) {
            alert(id);
            Swal.fire({
                title: 'Deseja apagar esse registro?',
                showCancelButton: true,
                confirmButtonText: 'Sim, Eliminar',
                denyButtonText: `Não eliminar`,
            })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location = "index.php?txtID=" + id;
                    }
                })
        }
    </script>
</body>

</html>