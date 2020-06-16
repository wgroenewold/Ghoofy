<?php

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require_once('app/slack.php');

setlocale(LC_ALL, 'nl_NL');

ghoofy::instance();

/**
 * Class ghoofy
 */
class ghoofy
{
	/**
	 * Singleton holder
	 */
	private static $instance;

	/**
	 * Get the singleton
	 *
	 * @return ghoofy
	 */
	public static function instance()
	{
		if (!isset(self::$instance)) {
			self::$instance = new static();
		}

		return self::$instance;
	}

	private function __construct()
	{
		$this->slack = new ghoofy_slack();
	}
}