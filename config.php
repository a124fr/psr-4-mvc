<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'developnment')
{
	define("BASE_URL", "http://localhost/psr-4-mvc/");
	$config['dbname'] = 'mvc_psr4';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	$config['port'] = 3308;
}
else 
{
	define("BASE_URL", "http://meusite.com.br/");
	$config['dbname'] = 'mvc_psr4';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	$config['port'] = 3308;
}

global $db;
try
{	
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'].";port=".$config['port'], $config['dbuser'], $config['dbpass']);
}
catch(PDOException $e)
{
	echo "ERRO: ".$e->getMessage();
}