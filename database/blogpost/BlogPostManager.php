<?php

    namespace Database\BlogPost;

    use Service\ServiceContainer;

    class BlogPostManager {

        # Retourne une instance de BlogPost
        public function getBlankBlogPost() {
            return new BlogPost();
        }
        public function saveBlogPost(BlogPost $blogPost, &$errors) {

            # Récupérer le conteneur de services
            $serviceContainer = ServiceContainer::getSelf();

            # Quelques vérifications avant de sauvegarder
            if( $this->isSaveable($blogPost, $errors) ) {

                # Récupérer le service db
                $db = $serviceContainer->get('db');

                # Sauvegarder en fonction du mode
                $db->bindMore([
                    'title' => $blogPost->getTitle(),
                    'header' => $blogPost->getHeader(),
                    'author' => $blogPost->getAuthor()->getId(),
                    'content' => $blogPost->getContent()
                ]);

                # Si on est en édition
                if( !is_null($blogPost->getId()) ) {
                    $db->bind('id', $blogPost->getId());
                    $q = $db->query('UPDATE `post` SET title = :title, header = :header, author_id = :author, content = :content, editing_date = NOW() WHERE id = :id');
                    return true;
                }

                # Sinon on crée
                else {
                    $q = $db->query('INSERT INTO `post` (title, header, content, author_id) VALUES (:title, :header, :content, :author)');
                    if($q == 1){

                        # Récupérer l'ID et l'associer directement au blogpost
                        $blogPost->setId( $db->lastInsertId() );
                        return true;
                    }

                }
            }

            return false;
        }

        public function isSaveable(BlogPost $blogPost, &$errors) {

            $strlenTitle = strlen($blogPost->getTitle());
            if( $strlenTitle == 0 || $strlenTitle > 255 ) {
                $errors['title'] = "Please, type in a valid title";
            }

            $strlenHeader = strlen($blogPost->getHeader());
            if( $strlenHeader > 255 ) {
                $errors['header'] = "Please, type in a valid header";
            }

            $strlenContent = strlen($blogPost->getContent());
            if( $strlenContent == 0 ) {
                $errors['content'] = "Content cannot be blank";
            }

            $authorId = +$blogPost->getAuthor()->getId();
            if( $authorId == 0 ) {
                $errors['author'] = "Please, type in a valid author name";
            }

            return count($errors) == 0;
        }

        public function hydrateBlogPost(BlogPost $blogPost, $data) {
            $blogPost->setId($data['id']);
            $blogPost->setTitle($data['title']);
            $blogPost->setHeader($data['header']);
            $blogPost->setContent($data['content']);
            $blogPost->setAuthor($data['author']);
            $blogPost->setPublishingDate($data['publishing_date']);
            $blogPost->setEditingDate($data['editing_date']);
        }

        # getBlank + hydrate
        public function getBlogPostById(int $id) {

            # Récupérer le service db
            $serviceContainer = ServiceContainer::getSelf();
            $db = $serviceContainer->get('db');

            # Récupérer le post en db
            $db->bind('id', $id);
            $data = $db->row('SELECT p.*, a.name as author_name FROM `post` p LEFT JOIN `author` a ON p.author_id = a.id WHERE p.id = :id');

            # Récupérer l'auteur
            $userManager = $serviceContainer->get('user_manager');
            $author = $userManager->getUser(['id' => $data['author_id'], 'name' => $data['author_name']]);

            # Récupérer le blogpost
            $blogPost = $this->getBlogPost(['id' => $data['id'], 'title' => $data['title'], 'header' => $data['header'], 'content' => $data['content'], 'author' => $author, 'publishing_date' => $data['publishing_date'], 'editing_date' => $data['editing_date']]);

            # Retourner la réponse
            if( is_null($blogPost->getId()) ) {
                throw new \Exception("Trying to access non existing blogpost");
            }

            return $blogPost;
        }

        # getBlank + hydrate (alias de getBlogPostById)
        public function getBlogPost(Array $data) {
            $blogPost = $this->getBlankBlogPost();
            $this->hydrateBlogPost($blogPost, $data);
            return $blogPost;
        }

        # Retourne une instance de BlogPostItarator
        public function getBlogPostList() {

            # On pourrait ajouter des contraintes pour paginer, par exemple.
            return new BlogPostIterator();
        }

    }