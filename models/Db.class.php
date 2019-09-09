<?php
class Db
{
	private $host, $db, $user, $pass;
	private $charset = 'utf8mb4';
	private $dsn;
	public $pdo;

	private $options = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];

	function __construct($config_file)
	{
		$this->getConfig($config_file);

		$this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
		$this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->options);
		return $this->pdo;
	}

	function getConfig($config_file)
	{
		if(!file_exists($config_file)) die("Configuration file not found");

		$config = json_decode(file_get_contents($config_file));
		$this->host = $config->db_host;
		$this->user = $config->db_user;
		$this->pass = $config->db_pass;
		$this->db = $config->db_db;
	}
}
?>