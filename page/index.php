<?php
use Gt\DomTemplate\DocumentBinder;
use Gt\Http\Response;
use Gt\Input\Input;
use Gt\Session\Session;

function go(Session $session, DocumentBinder $binder):void {
	if($name = $session->get("name")) {
		$binder->bindKeyValue("your-name", $name);
	}
}

function do_greet(Input $input, Session $session, Response $response):void {
	$session->set("name", $input->getString("your-name"));
	$response->reload();
}
