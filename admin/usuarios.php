<?php
require_once '../config/db/conn.php';
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Usuários</h2>
                <a href="../index.php" class="btn btn-success">Cadastrar</a>
            </div>
            <div class="col-sm-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($user = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['nome'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td class="" style="display: flex; flex-direction:row;">
                                    <form action="update.php" method="post">
                                        <button type="submit" name="id" value="<?php echo $user['id'] ?>" class="btn btn-deafult"><i class="fa-solid fa-pen"></i></button>
                                    </form>
                                    <button type="button" onclick="deletar(<?php echo $user['id'] ?>)" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/jquery-3.1.7.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>