# Email Library
The library can only be used when you have set your sendmail settings correctly or use a server like shared hosting. also this library is still under developed. if you don't see your email in inbox, please check your spam folder.

## initialize
```php
$config['contentType'] = 'html'; // [html, plain]; default html;
$email->initialize($config);
```

## Send Email
```php
require_once 'mail.php';
$email = new mail();

$email->from('youremail@example.com', 'Your Name');
$email->to('toEmail@example.com');
$email->cc('ccEmail@example.com');
$email->bcc('bccEmail@example.com');

$email->subject('Email Test');
$email->message('Testing the email class.');
$email->send();
```

## using attachment
```php
$email->attachment('path/to/file/', 'file.ext');

``` 

## Check is your email was sent.
```php
if($email->send())
{
	// do if sent
}else
{
	// error, email not sent
}
``` 



