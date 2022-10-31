



const listarPaginacao = async (num_page) => {

    let list, response, result, pagina;
    list = document.querySelector('.list-pagination');

    response = await fetch(`app/query.php?page=${num_page}`);
    result = await response.text();
    
    list.innerHTML = result;

    pagina = document.querySelector('.exibindo_pagina');
    pagina.innerHTML = `Exibindo Página: ${num_page}`;

}

listarPaginacao(1);