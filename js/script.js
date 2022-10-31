



const listarPaginacao = async (num_page) => {

    let list, response, result;
    list = document.querySelector('.list-pagination');

    response = await fetch(`app/query.php?page=${num_page}`);
    result = await response.text();
    
    list.innerHTML = result;
}

listarPaginacao(1);