<?php
// Récupération de l'URI sans les "/" avec la méthode explode.
$url = explode('/', $_SERVER['REQUEST_URI']);


// Switch qui permet de rediriger l'utilisateur selon l'url entrée.
switch ($url[2]) {
    case '' :
        require DIR . '/views/home.php';
        break;
    case 'happy' :
        require DIR . '/views/happy.php';
        break;
    case 'health' :
        require DIR . '/views/health.php';
        break;
    default:
        http_response_code(404);
        require DIR . '/views/404.php';
        break;
}

?>