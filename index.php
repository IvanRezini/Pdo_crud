<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'classes/Cliente.php';
        $cli = new Cliente();
        $clientes = $cli->listar();
        ?>

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
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </body>
</html>
