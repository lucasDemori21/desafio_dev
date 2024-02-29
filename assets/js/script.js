
function cadastrar() {

    const nome = $('#nome').val();
    const email = $('#email').val();
    const senha = $('#senha').val();

    if (nome == '' || email == '' || senha == '') {

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preeencha todos os campos!"
        });

        exit();
    }
    $.ajax({
        url: 'controller/insertUser.php',
        type: 'POST',
        data: {
            nome: nome,
            email: email,
            senha: senha
        },
        success: function (data) {
            if (data == 'ok') {
                Swal.fire({
                    icon: "success",
                    title: "Bem vindo!",
                    text: "Usuário cadastrado com sucesso!"
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Erro ao cadastrar usuário!"
                });
            }

        }
    })
}

function editar(id) {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;
    $.ajax({
        url: '../controller/update.php',
        method: 'POST',
        data: {
            id: id,
            nome: nome,
            email: email,
            senha: senha
        },
        success: function (data) {
            if (data == 'ok') {
                Swal.fire({
                    icon: 'success',
                    title: 'Usuário editado com sucesso',
                    showConfirmButton: false,
                    timer: 1500
                })
                setTimeout(() => {
                    window.location.href = 'usuarios.php';
                }, 2000)
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro ao editar usuário',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        }
    })
}

function deletar(id) {
    Swal.fire({
        title: "Você tem certeza?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Sim, deletar!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '../controller/delete.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire({
                            title: "Deletado!",
                            text: "Seu cadastro foi deletado com sucesso.",
                            icon: "success"
                        });
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao deletar usuário',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            })
        }
    })
}