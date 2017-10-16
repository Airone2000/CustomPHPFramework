<?php

    # Temporisation de sortie
    ob_start();
    session_start();
    session_regenerate_id();

    # Afficher les erreurs
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    # Autoloading de composer
    require './vendor/autoload.php';

    # Quelques constantes utiles
    define('SHORT_URI', 'http://blog2.erwanguillou.com/');
    define('URI', 'http://blog2.erwanguillou.com/index.php');

    # Nouvelle instance du conteneur de services
    $serviceContainer = new \Service\ServiceContainer();

    # Middleware CSRF
    $csrfService = $serviceContainer->get('csrf');
    try {
        $csrfService->checkCsrf();
    }
    catch (Exception $e) {
        die("Fatal error : you cannot perform this action.");
    }

    # Récupérer le contrôleur et la méthode depuis l'URL
    list($controller, $method) = explode('/', ltrim($_SERVER['PATH_INFO'], '/'));

    # Si on a bien un contrôleur et une méthode ( <> NULL)
    if( !!$controller && !!$method ) {

        # Adapter les noms de contrôleur + méthode
        $controller = "Controller\\". ucfirst($controller) ."Controller";
        $method = "{$method}Action";

        # Tester l'existence du contrôleur et de sa méthode
        if( class_exists($controller) && method_exists($controller, $method) ) {

            # S'ils existent, on les invoque et on récupère la réponse
            # Injection du serviceContainer dans le BaseController
            $controller = new $controller($serviceContainer);
            $response = call_user_func( [$controller, $method] );

            # Page OK ; Exit code OK
            header("HTTP/1.1 200 OK");
            echo $response;
            exit(0);
        }

        # La classe ou la méthode n'existe pas = la page n'existe pas
        else {
            # Erreur 404 ; Exit code 1
            header("HTTP/1.1 404 Not Found");
            echo "Page not found";
            exit(1);
        }
    }

    # Récupérer le contenu temporisé, vider le tampon, afficher le contenu
    $content = ob_get_contents();
    ob_end_clean();
    echo $content;
    exit(0);

    # Eof
