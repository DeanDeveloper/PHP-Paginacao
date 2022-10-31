<?php

require_once 'connection.php';



$pagina_atual = intval($_GET['page']);


if($pagina_atual <= 0) { 
    $pagina_atual = 1;
}


// regra de negocio
$quantidade_por_pagina = 5;

$listar = ($quantidade_por_pagina * $pagina_atual) - $quantidade_por_pagina;



// Select Table Database'
$stmt = "SELECT * FROM usuarios LIMIT $listar, $quantidade_por_pagina";
$stmt = $connection->prepare($stmt);
$stmt->execute();
$result = $stmt->fetchAll();

?>





<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Profissão</th>
    </tr>


    <?php
    foreach ($result as $items) {
        extract($items);

    ?>

        <tr>
            <td> <?= $id; ?> </td>
            <td> <?= $username; ?> </td>
            <td> <?= $address; ?> </td>
            <td> <?= $profession; ?> </td>
        </tr>


    <?php } ?>

    </table>

    <p class="exibindo_pagina"></p>

