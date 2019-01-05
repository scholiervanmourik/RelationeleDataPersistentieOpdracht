<?php
	class UserRepository {
		private $conn;
		
		function __construct($connection) {
			$this->conn = $connection;
		}
		
		function register($username, $password) {
			$stmt = $this->conn->prepare('
				INSERT INTO `Users` (`Username`, `Hash`)
				VALUES (?, ?);
			');
			$hashed = password_hash($password, PASSWORD_DEFAULT);
			$stmt->bind_param('ss', $username, $hashed);
			$stmt->execute();
		}
		
		function login($username, $password) {
			$stmt = $this->conn->prepare('
				SELECT * FROM `Users`
				WHERE `Username` = ?;
			');
			$stmt->bind_param('s', $username);
			$stmt->execute();
			$result = $stmt->get_result()->fetch_assoc();
			if (password_verify($password, $result['Hash'])) {
				return $result;
			}
			return null;
		}
		
		function getByUsername($username) {
			$stmt = $this->conn->prepare('
				SELECT * FROM `Users`
				WHERE `Username` = ?;
			');
			$stmt->bind_param('s', $username);
			$stmt->execute();
			return $stmt->get_result()->fetch_assoc();
		}
	}
?>