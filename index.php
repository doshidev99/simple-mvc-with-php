<?php
class Database
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $pass = 'root';
	private $dbname = 'quanlythanhvien_mvc';

	private $conn = NULL;
	private $result = NULL;

	public function connect()
	{
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if (!$this->conn) {
			echo "had error ";
			exit();
		} else {
			//fix vietnamese
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this->conn;
	}

	// compile

	public function execute($sql)
	{
		$this->result = $this->conn->query($sql);
		return $this->result;
	}

	// method GET

	public function getData()
	{
		if ($this->result) {
			$data = mysqli_fetch_array($this->result);
		} else {
			$data = 0;
		}
		return $data;
	}


	// method GET all

	public function getAllDate()
	{
		if (!$this->result) {
			$data = 0;
		} else {
			while ($datas = $this->getData()) {
				$data[] = $datas;
				// mảng k tuần tự
			}
		}
		return $data;
	}

	// Method add - C

	public function insertData($hoten, $namsinh, $quequan)
	{
		$sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan) VALUES(null, $hoten, $namsinh, $quequan)";
		return $this->execute($sql);
	}

	// Method edit - E
	public function updateData($id, $hoten, $namsinh, $quequan)
	{
		$sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh='$namsinh', quequan='$quequan' WHERE
		id='$id'";
		return $this->execute($sql);
	}

	// MEthod delete - D
	public function delete($id)
	{
		$sql = "DELETE FROM thanh vien WHERE id = '$id'";
		return $this->execute($sql);
	}
}
