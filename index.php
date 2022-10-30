<?php

require_once 'app/query.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginação</title>
</head>

<body>



    <table>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Profissão</th>
        </tr>


        <?php foreach ($result as $items) { ?>
            
            <?php
                extract($items);
            ?>


            <tr>
                <td> <?= $username; ?> </td>
                <td> <?= $address; ?> </td>
                <td> <?= $profession; ?> </td>
            </tr>


        <?php } ?>

    </table>


</body>

</html>