<?php
session_start();
if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = '';
}

switch ($action) {
	case 'add': {
			require_once('View/thanhvien/add_user.php');
			if (isset($_POST['add-user'])) {
				$hoten = $_POST['hoten'];
				$namsinh = $_POST['namsinh'];
				$quequan = $_POST['quequan'];
				$isDone = $db->insertData($hoten, $namsinh, $quequan);
				$_SESSION['thanhcong'] = 'add_success';
				header('location: index.php?controller=thanh-vien&action=add');
			}
			break;
		}
	case 'edit': {
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$_dataById = $db->getDataById('thanhvien', $id);
			}

			if (isset($_POST['edit-user'])) {
				$id = $_GET['id'];
				$hoten = $_POST['hoten'];
				$namsinh = $_POST['namsinh'];
				$quequan = $_POST['quequan'];
				$isDone = $db->updateData($id, $hoten, $namsinh, $quequan);
				if ($isDone) {
					header('location: index.php?controller=thanh-vien&action=list');
				}
			}
			require_once('View/thanhvien/edit_user.php');
			break;
		}

	case 'delete': {
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$isDone = $db->delete($id, 'thanhvien');
				if ($isDone) {
					header('location: index.php?controller=thanh-vien&action=list');
				}
			}
			break;
		}
	case 'list': {
			$tblTable = "thanhvien";
			$data = $db->getAllData($tblTable);
			require_once('View/thanhvien/list.php');
			break;
		}

	case 'tim-kiem': {
			$keyWord = $_GET['tukhoa'];
			$table = 'thanhvien';
			$_data = $db->searchByKey($table, $keyWord);
			require_once('View/thanhvien/search_user.php');
			break;
		}

	default:
		require_once('View/thanhvien/list.php');
		break;
}
