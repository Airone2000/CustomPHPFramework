<?php

    namespace Controller;

    class CoreController extends BaseController {

        public function indexAction()
        {
            # Récupérer le service mailer
            $mailer = $this->container->get('mailer');

            # Créer des variables vides
            $name = $email = $message = $mailSent = null;
            $errors = [];

            # Si on tente d'expédier un mail
            if( $this->isMethod('POST') && $mailer->tryToSendMail()) {

                # On vérifie si la requête comporte les bons éléments
                if( $mailer->handleRequest($name, $email, $message, $errors) ) {

                    # On envoi le message
                    $mailer->send(['name' => $name, 'email' => $email], $message, (SHORT_URI . 'index.php/core/index#mail-sent'));
                }
            }

            # Notification succès
            $mailer->handleSessionFlash($mailSent);

            # Similaire à $this->container->get('twig')->sprintView($filename, $vars)
            return $this->render('core/index', [
                'mailSent' => $mailSent,
                'form' => [
                    'name' => $name,
                    'email' => $email,
                    'message' => $message,
                    'errors' => $errors
                ]
            ]);
        }
    }