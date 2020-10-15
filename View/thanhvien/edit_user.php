<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit thành viên</title>
</head>

<body>
	<div class="add-member">
		<a style="background: yellow; color: black; padding: 10px" href="index.php?controller=thanh-vien&action=list">
			Danh Sách
		</a>
		<h3>
			Cập nhật thông tin thành viên</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Tên thành viên: </td>
					<td>
						<input value="<?php echo $_dataById['hoten'] ?>" type="text" name="hoten" placeholder="Tên thành viên">
					</td>
				</tr>
				<tr>
					<td>Năm sinh </td>
					<td>
						<input value="<?php echo $_dataById['namsinh'] ?>" type="text" name="namsinh" placeholder="Năm sinh">
					</td>
				</tr>

				<tr>
					<td>Quê quán: </td>
					<td>
						<input value="<?php echo $_dataById['quequan'] ?>" type="text" name="quequan" placeholder="Quê quán">
					</td>
				</tr>

				<tr>
					<td>

					</td>
					<td>
						<input type="submit" name="edit-user" value="Cập nhật thành viên">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>