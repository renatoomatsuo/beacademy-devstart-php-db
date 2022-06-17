<main class="container mt-4 bg-light border border-dark rounded p-5">
    <h1>Editar produto</h1>
    <hr>

    <div class="row align-items-center">
        <div class="col-6 p-3 border-end border-dark">
            <form action="" method="post">
                <p class=mb-5>Não se esqueça de preencher todas as informações sobre o produto.</p>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="category_id">
                        <?php
                            extract($data);
                            extract($product);

                            while ($category = $categories->fetch(\PDO::FETCH_ASSOC)) {
                                if($category['id']==$category_id){
                                    echo "<option selected>{$category['name']}</option>";
                                }
                                echo "<option value='{category['id']}'>{$category['name']}</option>";
                            }
                        ?>
                    </select>
                        <label for="floatingSelect">Escolha a categoria do produto</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input value="<?php echo $name ?>" id="name" name="name" type="text" class="form-control" placeholder="50" required>
                    <label class="form-label" for="name">Nome da novo produto</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="description" id="description" cols="30" rows="2" class="form-control" placeholder="50"required><?php echo $description ?></textarea>
                    <label class="form-label" for="description">Descrição do produto</label>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $brand ?>" name="brand" id="brand" type="text" class="form-control" placeholder="50" required/>
                    <label class="form-label" for="brand" class="form-control" placeholder="nome da marca">Marca do produto</label>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $quantity ?>" name="quantity" id="quantity" type="number" class="form-control" placeholder="50" required/>
                    <label class="form-label" for="quantity"  required>Quantidade no estoque</label>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $price ?>" name="price" id="price" type="float" class="form-control" placeholder="100.00" required/>
                    <label class="form-label" for="price">Preço do produto</label>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $photo ?>" name="photo" id="photo" type="text" class="form-control" placeholder="name@example.com" required/>
                    <label class="form-label" for="photo">Imagem do produto</label>
                </div>
                
                <button class="btn btn-lg btn-primary" type="submit">Adicionar</button>
            </form>
        </div>
        <div class="col-6">
            <img src="https://cdn.pixabay.com/photo/2019/08/18/09/26/flatlay-4413792_1280.jpg" class="img-fluid my-3" alt="...">
        </div>
    </div>
</main>
