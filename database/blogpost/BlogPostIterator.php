<?php

    namespace Database\BlogPost;

    use Database\User\User;
    use Service\ServiceContainer;

    class BlogPostIterator implements \Iterator {

        private $cursor;
        private $data;
        private $serviceContainer;


        public function __construct()
        {
            # Curseur à 0
            $this->rewind();

            # Récupérer les données à partir des paramètres d'entrée
            # 1. Charger le service BDD
            $this->serviceContainer = ServiceContainer::getSelf();
            $db = $this->serviceContainer->get('db');

            # 2. Récupérer le contenu de la requête directement dans la propriété
            $this->data = $db->query('SELECT p.*, a.name author_name FROM `post` p LEFT JOIN `author` a ON p.author_id = a.id WHERE 1 ORDER BY p.id DESC');

            # Terminer
            return true;
        }

        /**
         * Return the current element
         *
         * @link http://php.net/manual/en/iterator.current.php
         * @return mixed Can return any type.
         * @since 5.0.0
         */
        public function current()
        {
            # Retouner un objet
            $data = $this->data[$this->cursor];

            # Get the author
            $userManager = $this->serviceContainer->get('user_manager');
            $author = $userManager->getUser(['id' => $data['author_id'], 'name' => $data['author_name']]);

            # get the blogPost
            $bp_manager = $this->serviceContainer->get('bp_manager');
            $blogPost = $bp_manager->getBlogPost(['id' => $data['id'], 'title' => $data['title'], 'header' => $data['header'], 'content' => $data['content'], 'author' => $author, 'publishing_date' => $data['publishing_date'], 'editing_date' => $data['editing_date']]);

            return $blogPost;
        }

        /**
         * Move forward to next element
         *
         * @link http://php.net/manual/en/iterator.next.php
         * @return void Any returned value is ignored.
         * @since 5.0.0
         */
        public function next()
        {
            ++$this->cursor;
        }

        /**
         * Return the key of the current element
         *
         * @link http://php.net/manual/en/iterator.key.php
         * @return mixed scalar on success, or null on failure.
         * @since 5.0.0
         */
        public function key()
        {
            return $this->cursor;
        }

        /**
         * Checks if current position is valid
         *
         * @link http://php.net/manual/en/iterator.valid.php
         * @return boolean The return value will be casted to boolean and then evaluated.
         * Returns true on success or false on failure.
         * @since 5.0.0
         */
        public function valid()
        {
            return isset( $this->data[ $this->cursor ] );
        }

        /**
         * Rewind the Iterator to the first element
         *
         * @link http://php.net/manual/en/iterator.rewind.php
         * @return void Any returned value is ignored.
         * @since 5.0.0
         */
        public function rewind()
        {
            $this->cursor = 0;
        }
    }