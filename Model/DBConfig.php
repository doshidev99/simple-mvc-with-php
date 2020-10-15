<?php
class Database
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $pass = 'root';
	private $dbname = 'quanlythanhvien_mvc';

	// private $conn = NULL;
	private $result = NULL;

	public function connect()
	{
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if (!$this->conn || $this->conn->connect_error) {
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

	// method get data with ID
	public function getDataById($table, $id)
	{
		$sql = "SELECT * FROM $table WHERE id='$id'";

		$this->execute($sql);

		if ($this->num_rows() != 0) {
			$data = mysqli_fetch_array($this->result);
		} else {
			$data = 0;
		}
		return $data;
	}

	// method count record

	public function num_rows()
	{
		if ($this->result) {
			$num = mysqli_num_rows($this->result);
		} else {
			$num = 0;
		}
		return $num;
	}

	// method GET all

	public function getAllData($table)
	{
		$sql = "SELECT * FROM $table";
		$this->execute($sql);

		if ($this->num_rows() == 0) {
			$data = 0;
		} else {
			while ($datas = $this->getData()) {
				// mảng k tuần tự
				$data[] = $datas;
			}
		}
		return $data;
	}


	// Method add - C

	public function insertData($hoten, $namsinh, $quequan)
	{
		$sql = "INSERT INTO thanhvien(hoten, namsinh, quequan) VALUES('$hoten', '$namsinh', '$quequan')";
		return $this->execute($sql);
	}

	// Method edit - E
	public function updateData($id, $hoten, $namsinh, $quequan)
	{
		$sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh='$namsinh', quequan='$quequan' WHERE
		id='$id'";
		return $this->execute($sql);
	}

	// Method delete - D
	public function delete($id, $table)
	{
		$sql = "DELETE FROM $table WHERE id = '$id'";
		return $this->execute($sql);
	}

	// Method searching - S -

	public function searchByKey($table, $key)
	{
		$sql = "SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC";
		$result = $this->execute($sql);
		if ($result <= 0) {
			$data = 0;
		} else {
			$data = $this->getData();
		}
		return $data;
	}
}
?>

<script>
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>