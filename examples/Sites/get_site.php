<?php

require_once("../config.php");

$params = array(
	'domain'=>'example.com',
);

$request = new \DALTCORE\Plesk\GetSite($config, $params);
$info = $request->process();

var_dump($info);