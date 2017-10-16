<?php

    namespace Service;

    use Database\BlogPost\BlogPostManager;
    use Database\User\User;
    use Database\User\UserManager;

    class ServiceContainer {

        public static $instance;
        private $services;

        /**
         * ServiceContainer constructor.
         */
        public function __construct() {

            # Enregistrer nos services
            $this->services = [
                'db'            =>  new Db(),
                'csrf'          =>  new Csrf(),
                'twig'          =>  new Twig(),
                'mailer'        =>  new Mailer(),
                'bp_manager'    =>  new BlogPostManager(),
                'user_manager'  =>  new UserManager()
            ];

            # Sauver l'instance au niveau de la classe
            self::$instance = $this;
        }

        /**
         * @param $serviceName
         * @return mixed|null
         */
        public function get($serviceName) {
            if( array_key_exists($serviceName, $this->services) ) {
                return $this->services[$serviceName];
            }
            else {
                return null;
            }
        }

        public static function getSelf() {
            return self::$instance;
        }
    }