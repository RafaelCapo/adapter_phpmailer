<?php
	require_once 'config.php';
	require_once 'vendor/autoload.php';

	use Rafa\Adapters\PhpMailerAdapter;

	$subject = 'Bem vindo';
	//$body = '<h1>Bem vindo Fulano,</h1><p>se inscreva no canal...</p>';
	$body = file_get_contents('app/template/email/welcome.html');

	$mail = new PhpMailerAdapter;
	$mail->setFrom('sender@example.com', 'Rafael Capoani');
	$mail->addAddress('teste@example.com', 'Teste');
	$mail->mountContent($subject, $body);
	$mail->addAttachment('photo2.png');
	$mail->send();
	