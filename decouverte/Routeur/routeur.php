<?php

// use App\Controller\ArticleController;

// switch ($_GET["page"]) {
//     case 'addArticle':
//         $controller = new ArticleController();
//         $controller->addArticle(/* $_POST */);
//         break;
//     case 'home':
//         $controller = new ArticleController();
//         $controller->home();
//         break;
    
//     default:
//         # code...
//         break;
// }

$id = 3;

$routes = [
    "addArticle" => ["controller" =>"ArticleController", "method" => "addArticle"],
    "home" => ["controller" =>"ArticleController", "method" => "home"],
    "test" => ["controller" =>"ArticleController", "method" => "test", "param" => ["id" => $id]],
];

$case = $routes[$_GET["page"]];
$caseController = "App\Controller\\".$case["controller"];
$controller = new $caseController();
$method = $case["method"];

$param = null;
if (isset($case["param"])) {
    $param = $case["param"];
}

$controller->$method($param);