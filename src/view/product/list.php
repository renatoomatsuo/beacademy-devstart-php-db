<main class="container mt-4 bg-light border border-dark rounded p-5" style="min-height: 80vh">
    <a href="/produtos/relatorio" class="btn btn-sm m-4 p-3 border border-dark border-sm shadow" style="background: linear-gradient(180deg, rgba(255,252,31,1) 0%, rgba(255,200,0,1) 100%);" type="button">Gerar relatório</a>
    <h1>Lista de produtos</h1>
    <hr>
    
    <div class='row row-cols-1 row-cols-md-3 g-4'>
        <?php

while ($product = $data->FETCH(\PDO::FETCH_ASSOC)) {
    extract($product);
    echo "  <div class='col'>
                <div class='card m-3 p-3 border-dark shadow rounded flex-wrap' style='height:300px; min-width:200px'>
                <img src='{$photo}' type='button' class='card-img-top mx-auto d-block img-thumbnail' style='width:90px;'alt='{$name}'
                            data-bs-toggle='modal' data-bs-target='#modal{$id}' style='height:70px'>
                            <div class='card-body' style='height:100px; overflow:auto'>
                            <h5 class='card-title'>{$name}</h5>
                            <span>Marca: {$brand}</span>
                            <hr>
                            <h6 class='card-title'>Descrição</h6>
                            <p class='card-text'>{$description}</p>
                            <h6 class='card-title'>Preço: R$ {$price}</h6>
                                <p class='card-text'>Qts em estoque: {$quantity} un.</p>
                                <p class='card-text'>Adicionado em {$create_at}</p>
                                </div>
                                <div class='card-footer row justify-content-between' style='height:60px;'>
                                <a href='/produtos/editar?id={$id}' type='button' class='btn btn-warning col-5 block'><i class='bi bi-pencil-square'> Editar</i></a>
                                <a href='/produtos/excluir?id={$id}' type='button' class='btn btn-danger col-5 block'><i class='bi bi-trash'> Excluir</i></a>
                            </div>
                        </div>
                    </div>";

    echo "<div class='modal fade' id='modal{$id}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>{$name}</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                        <img class='w-100' src='{$photo}'>
                        </div>
                        
                        </div>
                        </div>
                        </div>";
}
$noItems = $data->rowCount();
if ($noItems == 0) {
    echo "<div class='d-flex flex-column justify-content-center align-items-center mt-5'>
                        <h1>Ops! Nenhum produto aqui.</h1>
                        <p>Clique <a href='/produtos/adicionar'>aqui</a> para cadastrar um produto.</p>
                        </div>";
}
?>
    </div>
    <a href="/produtos/adicionar" class="btn btn-xl position-fixed m-4 p-3 border border-dark border-3 bottom-0 end-0 index-3 shadow" style="background: linear-gradient(180deg, rgba(255,252,31,1) 0%, rgba(255,200,0,1) 100%);" type="button">Adicionar produto</a>
</main>
