<?php
require_once('includes/sessiondata.php');
require_once('httpful.phar');

$authkey = array('authKey' => $_POST['unitkey']);

$uri = 'http://145.24.222.173:8000/api/auth';
$response = \Httpful\Request::post($uri)
		->body(json_encode($authkey))
		->sends('application/json')
		->send();

if($response->body->success)
{
	header('Location: tests/test.html');
}
else
{
	header('Location: login.php?success=false');
}
