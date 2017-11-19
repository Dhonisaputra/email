<?php  
	require_once 'mail.php';
	$email = new mail();


	$email->from('dhoni.p.saputra@gmail.com', 'Your Name');
	$email->to('dhoni.purnomo.saputra@gmail.com');

	$email->subject('Email Test');
	$email->message('Testing the email class.');

	// if want to debug;
	if($email->send() )
	{
		echo 'Email was sent';
	}else
	{
		echo 'Error while sending email';
	}
?>