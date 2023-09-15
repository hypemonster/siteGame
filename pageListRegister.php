<?php
include("Função.php");
include("conexão.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleADM.css">
    <title>Lista de clientes</title>
</head>
<body>
    <center>
        <h4>Clientes Cadastrados</h4>
            <table>
                <!--tableHeader-->
                <tr class="tableHeader">
                    <th>Código</th>
                    <th style="width: 30%">Nome</th>
                    <th style="width: 30%">Email</th>
                    <th>Senha</th>
                    <th>Excluir</th>
                    <th>Alterar</th>
                </tr>
                <?php
                    $clientes=listarClientes($conn);
                    foreach($clientes as $cliente):
                ?>
                <tr>
                    <td><?php echo $cliente['id_user']?></td>
                    <td><?php echo $cliente['nome']?></td>
                    <td><?php echo $cliente['email']?></td>
                    <td><?php echo $cliente['senha']?></td>

                    <td>
                        <a href="excluir.php?id_user=
                        <?php echo $cliente['id_user'] ?>">Excluir</a>
                    </td>

                    <td>
                        <a href="pageAlter.php?id_user=
                        <?php echo $cliente['id_user'] ?>">Alterar</a>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
            </table>
    </center>
</body>
</html>