<?php
class Member
{
	private $username, $db, $id;

	public function __construct($dbh)
	{
		$this->db = $dbh;
	}

	//string
	public function getUserInfo()
	{
		return array(
			"username" => $this->username,
			"id" => $this->id,
		);
	}

	//bool
	public function login($u, $p)
	{
		if($this->usernameExists($u))
		{
			$q = $this->db->prepare("select id, password from membre where username = ?");
			$q->execute([$u]);
			$row = $q->fetch(PDO::FETCH_ASSOC);
			$pass = $row['pass'];

			if(password_verify($_POST['pass'], $pass))
			{
				$this->username = $u;
				$this->id = $row['id'];

				return true;
			}
		} else {
			return false;
		}
	}

	//bool
	public function create($u, $p)
	{
		$pass = password_hash($p, PASSWORD_DEFAULT);
		$u = filter_var($u, FILTER_SANITIZE_STRING);

		if(!$this->usernameExists($u))
		{
			$q = $this->db->pdo->prepare("insert into membre (username, password) values(?,?)");
			$q->execute([$u, $pass]);
		} else {
			die("username already exists, <a href=\"index.php\">try again</a>");
		}
	}

	//bool
	public function usernameExists($u)
	{
		$q = $this->db->prepare("select username from membre where username = ?");
		$q->execute([$u]);
		return $q->fetch(PDO::FETCH_ASSOC);
	}

}
?>
