<?php

    /**
     * This service is used only in accordance with the home form.
     * It has not been produced to be shared.
     */

    namespace Service;

    class Mailer {

        public function tryToSendMail() {
            return ($_POST['action'] ?? NULL) === "send_mail";
        }

        public function handleRequest(&$name = null, &$email = null, &$message = null, &$errors = []) {
            $email = trim($_POST['email']) ?? NULL;
            $name = trim($_POST['name']) ?? NULL;
            $message = trim($_POST['message']) ?? NULL;

            if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                $errors['email'] = "Please, type-in a valid E-Mail Address";
            }

            if( strlen($name) === 0 ) {
                $errors['name'] = "Please, type-in your complete name";
            }

            if( strlen($message) === 0 ) {
                $errors['message'] = "Please, type-in your message";
            }

            return count($errors) === 0;
        }

        public function send(Array $recipient, $msg, $redirect = "./index.php") {
            $transport = new \Swift_SmtpTransport();
            $mailer = new \Swift_Mailer($transport);
            $message = new \Swift_Message();

            $message->setFrom(['contact@erwanguillou.com' => "Erwan GUILLOU"]);
            $message->setTo(["maels1991@gmail.com" => "Erwan"]);
            $message->setReplyTo([$recipient['email'] => $recipient['name']]);
            $message->setBody("$msg \r\n\r\nSent by : $recipient[email] ($recipient[name])");

            $mailer->send($message);
            $_SESSION['mail-sent'] = true;
            header('location:' . $redirect);
            exit(1);
        }

        public function handleSessionFlash(&$mailSent) {
            if( $_SESSION['mail-sent'] ?? false ) {
                $mailSent = "<div id=\"mail-sent\" class=\"alert alert-success text-center alert-dismissible\" role=\"alert\"><i class=\"fa fa-check-circle\"></i> <strong>Got it !</strong> I'm already writting back to you =) <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>";
                unset($_SESSION['mail-sent']);
            }
        }

    }