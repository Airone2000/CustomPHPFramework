<?php

    namespace Database\User;

    use Service\ServiceContainer;

    class UserManager {

        public function getUserById(){}

        public function isSaveable(User $user, &$errors) {

            $strlenAuthor = strlen($user->getUsername());
            if( $strlenAuthor == 0 || $strlenAuthor > 255 ) {
                $errors['author'] = "Please, type in a valid author name";
            }

            return count($errors) == 0;

        }

        public function hydrateUser(User $user, Array $data) {
            $user->setId($data['id']);
            $user->setUsername($data['name']);
            return true;
        }

        public function getBlankUser() {
            return new User();
        }

        public function getUser(Array $data) {
            $user = $this->getBlankUser();
            $this->hydrateUser($user, $data);
            return $user;
        }

        public function saveUser(User $user, &$errors) {

            if( $this->isSaveable($user, $errors) ) {

                # Récupérer le conteneur de services
                $serviceContainer = ServiceContainer::getSelf();

                # Récupérer le service db
                $db = $serviceContainer->get('db');

                # Sauvegarder l'utilisateur selon le mode
                if( !is_null($user->getId()) ) {
                    $db->bindMore(['id' => $user->getId(), 'name' => $user->getUsername()]);
                    $db->query('UPDATE `author` SET name = :name WHERE id = :id');
                    return true;
                }
                else {
                    $db->bind('name', $user->getUsername());
                    $q = $db->query('INSERT INTO `author` (name) VALUES (:name)');

                    # Retourner l'id du user
                    if($q == 1) {
                        $user->setId($db->lastInsertId());
                        return true;
                    }
                }
            }

            return false;
        }

    }