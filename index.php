<?php
// Récupération de l'URI sans les "/" avec la méthode explode.
$url = explode('/', $_SERVER['REQUEST_URI']);


// Switch qui permet de rediriger l'utilisateur selon l'url entrée.
switch ($url[2]) {
    case 'home' :
        require __DIR__ . '/views/home.php';
        break;
    case 'happy' :
        require __DIR__ . '/views/happy.php';
        break;
    case 'health' :
        require __DIR__ . '/views/health.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>