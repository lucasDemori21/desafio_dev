<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container">
        <div class="box">
            <div class="input-group padding-bottom-xs">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">            
            </div>
            <div class="input-group padding-bottom-xs">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="exemplo@email.com">
            </div>
        <div class="input-group padding-bottom-xs">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="********">
        </div>

        <div class="group-button">
            <a href="admin/usuarios.php" class="btn btn-success">Visualizar usuarios</a>
            <button class="btn btn-primary" onclick="cadastrar()">Cadastrar</button>
        </div>
    </div>


    <script src="assets/js/script.js">
    </script>
    <script src="assets/js/jquery-3.1.7.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>