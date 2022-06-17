<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController {
    public function listAction(): void 
    {
        $con = Connection::getConnection();
        $result = $con->prepare("SELECT * FROM tb_category;");
        $result->execute();
        
        parent::render('category/list', $result);
    }

    public function addAction(): void 
    {
        if($_POST){
            extract($_POST);
            $con = Connection::getConnection();
            
            $verify = $con->query("SELECT * FROM tb_category WHERE name = '{$name}';");
            if ($verify->rowCount() > 0 ) {
                parent::render('error/notEdited');
                exit;
            }

            $result = $con->prepare("INSERT INTO tb_category(name, description)
            VALUES('{$name}', '{$description}');");
            $result->execute();

            if($result->rowCount() > 0) {
                parent::render('category/addConfirm');
            }
        }
        parent::render('category/add');
    }

    public function editAction(): void 
    {
        //evita o usuario editar a url ou entrar no /editar sem o id
        if (!isset($_GET["id"])) {
            (new ErrorController())->notFoundAction();
            exit;
        }

        $id = $_GET["id"];
        
        $con = Connection::getConnection();

        if($_POST){
            extract($_POST);

            $result = $con->prepare("UPDATE tb_category SET name ='{$name}', description = '{$description}' WHERE id = '{$id}';"); 
            $result->execute();
            
            if($result->rowCount() > 0) {
                parent::render('category/addConfirm');
                exit;
            } else {
                echo "nenhuma alteracao feita";
            }
        }

        $result = $con->prepare("SELECT * FROM tb_category WHERE id = '{$id}';");
        $result->execute();
        

        parent::render('category/edit', $result);
    }

    public function deleteAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare("DELETE FROM tb_category WHERE id = {$_GET['id']};");
        $result->execute();

        if($result->rowCount() > 0) {
            parent::render('category/deleteConfirm');
                exit;
        }
    }
}
