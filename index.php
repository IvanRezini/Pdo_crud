<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar</title>
    </head>
    <body>
        <?php
        require 'classes/Cliente.php';
        $cli = new Cliente();
        $clientes = $cli->listar();
        ?>
        <a href="adicionar.php">Novo cliente</a>
        <table>
            <thead>
                <tr>
                    <td>Codigo</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Telefone</td>  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $c) { ?>
                    <tr>
                        <td><?php echo $c ['codCli']; ?> </td>
                        <td><?php echo $c ['nomCli']; ?> </td>
                        <td><?php echo $c ['endCli']; ?> </td>
                        <td><?php echo $c ['telCli']; ?> </td>
                        <td><button type="submit">Editar</button>
                            <button type="submit">Excluir</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
