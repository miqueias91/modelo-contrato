<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="pt-br, pt, en" http-equiv="Content-Language">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/jquery-ui.min.css">
        <script src="./js/jquery-3.3.1.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery-ui.min.js"></script>
        <script src="./js/ckeditor/ckeditor.js"></script>
        <script src="./js/script.js"></script>
        <title>Modelo Contrato</title>
        <script type="text/javascript">
            $( document ).ready(function() {
                var conteudo = CKEDITOR.replace('conteudo', {
                    language: 'pt',
                });
                $('#btn-salvar').click(function(){
                    $('#form').submit();
                });
            });
        </script>
    </head>
    <body>
        <?php include_once "header.php";?>
        <main class="main" style="margin-top:20px">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">            
                        <h1  class="mt-5">Modelo Contrato</h1>
                    </div>
                </div>
                <br>
                <form class="form-signin" id="form" method="post" action="salvarModeloContrato.php">
                    <div class="form-group">
                        <label for="titulo">Título do Contrato</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do Contrato">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea class="form-control"  name="conteudo" id="conteudo"></textarea>
                    </div>
                    <br>
                    <a title="salvar" href="#" class="btn btn-outline-success btn-sm" id="btn-salvar">Salvar</a>
                </form>
                <br>
                <br>
            </section>
        </main>
    </body>
</html>