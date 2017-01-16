<?php
function __autoload($cl)
{
	$class=$cl.".php";
	require_once $class;
}

