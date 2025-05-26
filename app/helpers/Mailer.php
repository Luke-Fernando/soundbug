<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    private $mail;
    private $template;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
    }

    public function set_template($data, $path)
    {
        extract($data);
        ob_start();
        require_once $path;
        $this->template = ob_get_clean();
    }

    public function send($subject, $send_address)
    {
        try {
            //Server settings
            $this->mail->isSMTP();
            $this->mail->Host       = Environment::get_env("SMTP_HOST");
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = Environment::get_env("SMTP_USERNAME");
            $this->mail->Password   = Environment::get_env("SMTP_PASSWORD");
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $this->mail->Port       = Environment::get_env("SMTP_PORT");

            //Recipients
            $this->mail->setFrom(Environment::get_env("FROM_ADDRESS"), 'Soundbug.io');
            $this->mail->addAddress($send_address);

            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            if (isset($this->template)) {
                $this->mail->Body    = $this->template;
            } else {
                echo 'Template not set';
                return;
            }

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage() . " " . Environment::get_env("SMTP_HOST");
        }
    }
}
