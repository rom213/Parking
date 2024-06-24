<?php

class Users_model
{

	private $db;
	private $users;

	private $key = "hola_mundo";

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->users = array();
	}

	public function get_users()
	{
		$sql = "SELECT * FROM users";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$this->users[] = $row;
		}
		return $this->users;
	}

	public function insertar($username, $email, $password, $birth_day, $direccion)
	{
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$resultado = $this->db->query("INSERT INTO users (username, email, password, birth_day, direccion) VALUES ('$username', '$email', '$hashed_password', '$birth_day', '$direccion')");
	}


	public function validate_session($email, $password)
	{
		$stmt = $this->db->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($id, $username, $email, $hashed_password);
		$stmt->fetch();

		if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
			return ['id' => $id, 'username' => $username, 'email' => $email];
		} else {
			return false;
		}
	}



	public function modificar($id, $username, $email, $birth_day, $direccion)
	{
		$resultado = $this->db->query("UPDATE users SET username='$username', email='$email', birth_day='$birth_day', direccion='$direccion' WHERE id = '$id'");
	}

	public function eliminar($id)
	{

		$resultado = $this->db->query("DELETE FROM users WHERE id = '$id'");
	}

	public function get_user($id)
	{
		$sql = "SELECT * FROM users WHERE id='$id' LIMIT 1";
		$resultado = $this->db->query($sql);
		$row = $resultado->fetch_assoc();

		return $row;
	}
}
