<?php

    namespace Service;

    class Twig {

        private $twig;

        /**
         * Twig constructor.
         */
        public function __construct() {

            # Parser le fichier de configuration
            $config = parse_ini_file('./config/twig.ini.php');

            # Emplacement de stockage des vues
            $loader = new \Twig_Loader_Filesystem($config['dir_view']);

            # Nouvel environnement Twig avec référence vers répertoire de cache
            # Auto_reload = TRUE pour le développement.
            $this->twig = new \Twig_Environment($loader, [
                'cache' => $config['dir_cache'],
                'auto_reload' => true
            ]);

            # Définir des variables globales
            $this->defineGlobalVars();

            return;
        }

        public function getCsrfToken() {
            $serviceContainer = ServiceContainer::getSelf();
            $csrfService = $serviceContainer->get('csrf');
            return $csrfService->getCsrfToken();
        }

        private function defineGlobalVars() {

            $this->twig->addGlobal('blog', $this);
            $this->twig->addGlobal('this_uri', $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
            $this->twig->addGlobal('base_uri', "../..");
            $this->twig->addGlobal('uri', URI);
            $this->twig->addGlobal('short_uri', SHORT_URI);

            return;
        }

        /**
         * Return a view
         * @param $filename
         * @param array ...$vars
         * @return string
         */
        public function sprintView($filename, $vars = []) {
            return $this->twig->render("{$filename}.html.twig", $vars);
        }

        /**
         * Display a view
         * @param $filename
         * @param array ...$vars
         */
        public function printView($filename, $vars = []) {
            echo $this->sprintView($filename, $vars);
            return;
        }
    }