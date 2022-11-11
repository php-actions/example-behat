<?php
use Gt\DomTemplate\DocumentBinder;
use Gt\Input\Input;

function do_greet(Input $input, DocumentBinder $binder):void {
	$binder->bindData($input);
}
