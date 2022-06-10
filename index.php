<?php
// Récupération de l'URI sans les "/" avec la fonction explode.
$url = explode('/', $_SERVER['REQUEST_URI']);



// Switch qui permet de rediriger l'utilisateur selon l'url entrée.
switch ($url[2]) {
    case '' :
        require __DIR__ . '/views/health.php';
        break;
    case 'happiness' :
        require __DIR__ . '/views/happiness.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>