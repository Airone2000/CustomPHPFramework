<?php

    namespace Controller;

    use Service\ServiceContainer;

    class BaseController {

        protected $container;

        /**
         * BaseController constructor.
         *
         * @param \Service\ServiceContainer $serviceContainer
         */
        public function __construct(ServiceContainer $serviceContainer)
        {
            $this->container = $serviceContainer;
        }

        /**
         * Raccourci pour retourner une vue
         * @param $filename
         * @param array $vars
         * @return mixed
         */
        public function render($filename, $vars = []) {
            return $this->container->get('twig')->sprintView($filename, $vars);
        }

        public function isMethod($method) {
            return $_SERVER['REQUEST_METHOD'] === $method;
        }

    }