<?php
require_once('../config/db/conn.php');


$sql = 'SELECT * FROM users WHERE id = ' . $_POST['id'];

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Admin</title>
</head>

<body>
    <div class="container">
        <form action="../controller/update.php" method="post">
            <?php while ($user = mysqli_fetch_array($result)) { ?>
                <div class="box">
                    <div class="input-group padding-bottom-xs">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" value="<?php echo $user['nome']; ?>">
                    </div>
                    <div class="input-group padding-bottom-xs">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="input-group padding-bottom-xs">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="********">
                    </div>

                    <div class="group-button">
                        <a href="usuarios.php" class="btn btn-success">Voltar</a>
                        <button class="btn btn-primary" type="button" onclick="editar(<?php echo $user['id'] ?>)">Salvar</button>
                    </div>
                </div>
            <?php } ?>
        </form>

        <script src="../assets/js/jquery-3.1.7.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>