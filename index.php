<?php

    require_once 'app/connection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Paginação Simples</title>
</head>

<body>


    <article class="article list-pagination">

    </article>





    <?php

        $stmt = "SELECT * FROM usuarios";
        $stmt = $connection->prepare($stmt);
        $stmt->execute();
        $result = $stmt->rowCount();

        $quantidade_por_pagina = 5;

        $paginacao = ceil(intval($result) / $quantidade_por_pagina);
 
    ?>



    <ul class="paginator">
        <li><a href="#" onclick=listarPaginacao(1)>Primeira</a></li>

        <?php 
            for($i = 1; $i <= $paginacao; $i++) {
                echo '<li><a href="#" class="" onclick=listarPaginacao('.$i.') >'.$i.'</a></li>';
            }
        ?>

        <li><a href="#" onclick=listarPaginacao(<?= $paginacao ?>)>Ultima</a></li>
    </ul>



    <script src="js/script.js"></script>
</body>

</html>