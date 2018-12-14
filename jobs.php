<?php 


if (empty($_POST['lastname']) && isset($_POST['jobs-email'])) {
  require_once 'vendor/autoload.php';

  // Create the Transport
  $transport = (new Swift_SmtpTransport('server449.dinamichosting.com', 587))
    ->setUsername('website@archsourcing.com')
    ->setPassword('^#QVkb#faaqv');

  $email = filter_var($_POST['jobs-email'], FILTER_SANITIZE_EMAIL);

  $mailer = new Swift_Mailer($transport);

  $message = (new Swift_Message('Job submission'))
    ->setFrom(['website@archsourcing.com' => '/ASG'])
    ->setReplyTo([$email])
    ->setTo(['mercedes@archsourcing.com', 'andy@archsourcing.com']);

  if(is_uploaded_file($_FILES['jobs-file']['tmp_name'])) {
    $message->attach(
      Swift_Attachment::fromPath($_FILES['jobs-file']['tmp_name'])->setFilename($_FILES['jobs-file']['name'])
    );
  }

  $result = $mailer->send($message);
  header("Location: /thank-you");
  
  
}
else {
  die('Access Forbidden: no fields set.');
}