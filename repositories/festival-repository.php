<?php
	class FestivalRepository {
			private $conn;
			
			function __construct($connection) {
				$this->conn = $connection;
			}
			
			function insert($name) {
				$stmt = $this->conn->prepare('
					INSERT INTO `Festivals` (name)
					VALUES (?);
				');
				$stmt->bind_param('s', $name);
				$stmt->execute();
			}
			
			function getById($id) {
				$stmt = $this->conn->prepare('
					SELECT * FROM `Festivals`
					WHERE `UID` = ?;
				');
				$stmt->bind_param('i', $id);
				$stmt->execute();
				return $stmt->get_result()->fetch_assoc();
			}
			
			function getAll() {
				return mysqli_fetch_all($this->conn->query('SELECT * FROM `Festivals`;'), MYSQLI_ASSOC);
			}
		}
?>