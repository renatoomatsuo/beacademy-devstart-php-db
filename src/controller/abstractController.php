<?php

declare(strict_types=1);

namespace App\Controller;
abstract class AbstractController
{
    public function render(string $viewPath, $data = null) : void
    {
        include dirname(__DIR__)."/view/_partials/head.php";
        include dirname(__DIR__)."/view/{$viewPath}.php";
        include dirname(__DIR__)."/view/_partials/footer.php";
    }
}
