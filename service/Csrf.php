<?php

    namespace Service;

    class Csrf {

        private $csrfToken;
        private $lDelimiter = "#";
        private $rDelimiter = "#";

        public function __construct() {
            $this->setCsrfToken($this->lDelimiter. ($_SESSION['csrf_token'] ?? $this->defineCsrfToken()) .$this->rDelimiter);
        }

        public function defineCsrfToken() {
            $token = 'DER'.uniqid().'AAAB';
            $this->setCsrfToken($token);
            return $token;
        }

        public function setCsrfToken($token) {
            $this->csrfToken = $token;
            $_SESSION['csrf_token'] = trim($token, '#');
            return $this;
        }

        public function getCsrfToken($escaped = true) {
            if($escaped)
                return trim($this->csrfToken, '#');
            else
                return $this->csrfToken;
        }

        public function checkCsrf() {

            if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

                # Get token from request
                $inputCsrf = $_POST['csrf_token'] ?? NULL;

                if( "#{$inputCsrf}#" !== $this->getCsrfToken(0) ) {
                    throw new \Exception("Oups ! It seems like a CSRF attempt.");
                }
            }

        }

    }