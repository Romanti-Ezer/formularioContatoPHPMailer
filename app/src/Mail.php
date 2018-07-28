<?php

namespace app\src;

use PHPMailer\PHPMailer\PHPMailer;

class Mail {
    public $assunto;
    public $corpo;

    public function getAssunto() {
        return $this->assunto;
    }
    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }
    public function getCorpo() {
        return $this->corpo;
    }
    public function setCorpo($corpo) {
        $this->corpo = $corpo;
    }

    public function send() {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output when = 2
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'email@domain.com';                 // SMTP username
            $mail->Password = 'yourpassword';                     // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';

            //Recipients
            $mail->setFrom('romanti@b2smarketing.com', 'Romanti-Ezer Santos');
            $mail->addAddress('romanti123gds@gmail.com', 'Romanti-Ezer');     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $this->getAssunto();
            $mail->Body    = $this->getCorpo();
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Mensagem enviada com sucesso!';
            return true;
        } catch (Exception $e) {
            echo 'A Mensagem não pôde ser enviada. Mailer Error: ', $mail->ErrorInfo;
            return false;
        }
    }

}