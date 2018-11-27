
<?php
	/**
	 * Mostrar errores de PHP
	 */
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	/**
	 * Archivos necesarios de inicio
	 */
	require_once "config/constantes.php";
	require_once "config/autoload.php";
	require_once "config/request.php";
	require_once "config/router.php";
	require_once "dao/singletondao.php";
	/**
	 * Alias
	 */
	use Config\Autoload as Autoload;
	use Config\Router 	as Router;
	use Config\Request 	as Request;
	use DAO\SingletonDAO as SingletonDao;


	Autoload::start();
	session_start();
	Router::direct(new Request());




?>
