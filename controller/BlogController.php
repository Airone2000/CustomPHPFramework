<?php

    namespace Controller;

    use Database\BlogPost\BlogPost;
    use Database\User\User;

    class BlogController extends BaseController {

        public function indexAction(){

            # Récupérer les blogposts
            $blogPostManager = $this->container->get('bp_manager');
            $blogposts = $blogPostManager->getBlogPostList();

            return $this->render('blog/index', ['blogposts' => $blogposts]);
        }

        public function addAction(){

            # Managers
            $userManager = $this->container->get('user_manager');
            $blogPostManager = $this->container->get('bp_manager');

            # New instances
            $blogPost = $blogPostManager->getBlankBlogPost();
            $author = $userManager->getBlankUser();
            $errors = [];

            # If form is sent
            if( $this->isMethod('POST') ) {

                # Try to fill author
                $userManager->hydrateUser($author, ['id' => NULL, 'name' => trim($_POST['author'] ?? NULL)]);

                # Try to fill blogpost
                $blogPostManager->hydrateBlogPost($blogPost, [
                    'id' => NULL,
                    'title' => trim($_POST['title'] ?? NULL),
                    'header' => trim($_POST['header'] ?? NULL),
                    'content' => trim($_POST['content'] ?? NULL),
                    'author' => $author,
                    'publishing_date' => NULL,
                    'editing_date' => NULL
                ]);

                # Try to save
                $userManager->saveUser($author, $errors);
                $blogPostManager->saveBlogPost($blogPost, $errors);

                # Succès !
                if( count($errors) == 0 ) {
                    header("location:".URI."/blog/view?id=" . $blogPost->getId());
                    exit(1);
                }
            }

            # Afficher le formulaire d'ajout d'un post
            return $this->render('blog/add', [
                'author' => $author,
                'blogpost' => $blogPost,
                'errors' => $errors
            ]);
        }

        public function editAction(){

            # Récupérer les managers
            $blogPostManager = $this->container->get('bp_manager');
            $userManager = $this->container->get('user_manager');

            try {
                $blogPost = $blogPostManager->getBlogPostById( +($_GET['id'] ?? 0) );

                if( $this->isMethod('POST') ) {

                    # Hydrate author
                    $author = $blogPost->getAuthor();
                    $userManager->hydrateUser($author, [
                        'id' => $author->getId(),
                        'name' => trim($_POST['author'] ?? $author->getUsername())
                    ]);

                    # Hydrate blogpost from request
                    $blogPostManager->hydrateBlogPost($blogPost, [
                        'id' => $blogPost->getId(),
                        'title' => trim($_POST['title'] ?? $blogPost->getTitle()),
                        'header' => trim($_POST['header'] ?? $blogPost->getHeader()),
                        'content' => trim($_POST['content'] ?? $blogPost->getContent()),
                        'author' => $author,
                        'publishing_date' => $blogPost->getPublishingDate(),
                        'editing_date' => NULL
                    ]);

                    # Try to save
                    $errors = [];
                    $userManager->saveUser($author, $errors);
                    $blogPostManager->saveBlogPost($blogPost, $errors);

                    # Succès !
                    if( count($errors) == 0 ) {
                        header("location:".URI."/blog/view?id=" . $blogPost->getId());
                        exit(1);
                    }
                }

                return $this->render('blog/edit', ['blogpost' => $blogPost, 'errors' => $errors ?? []]);
            }
            catch (\Exception $e) {
                echo $e->getMessage();
            }
        }

        public function viewAction(){

            # Récupérer le manager pour récupérer le blogpost
            $blogPostManager = $this->container->get('bp_manager');

            try {
                $blogPost = $blogPostManager->getBlogPostById( +($_GET['id'] ?? 0) );
                return $this->render('blog/view', ['blogpost' => $blogPost]);
            }
            catch (\Exception $e) {
                echo $e->getMessage();
            }

        }

    }