<?php 

if (empty($_POST['lastname']) && isset($_POST['contact__name']) && isset($_POST['contact__email']) && isset($_POST['contact__comment'])) {
  require_once 'vendor/autoload.php';

  // Create the Transport
  $transport = (new Swift_SmtpTransport('mail.archsourcing.com', 587))
    ->setUsername('website@archsourcing.com')
    ->setPassword('^#QVkb#faaqv');

  $name = filter_var($_POST['contact__name']);
  $email = filter_var($_POST['contact__email'], FILTER_SANITIZE_EMAIL);
  $comment = filter_var($_POST['contact__comment']);

  $mailer = new Swift_Mailer($transport);

  $message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['website@archsourcing.com' => 'Archsourcing'])
    ->setReplyTo([$email => $name])
    ->setTo(['ignacio@ign.uy' => 'Website admin'])
    ->setBody($comment);

  $result = $mailer->send($message);
  
  header('Content-type:application/json;charset=utf-8');
  echo json_encode($result);
  
}
else {
  var_dump($_POST);
}