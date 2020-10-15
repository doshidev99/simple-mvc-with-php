<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm thành viên</title>
</head>

<body>
	<div class="add-member">
		<a style="background: yellow; color: black; padding: 10px" href="index.php?controller=thanh-vien&action=list">
			Danh Sách
		</a>
		<h3>
			Thêm mới thành viên</h3>
		<form action="index.php?controller=thanh-vien&action=add" method="POST">
			<table>
				<tr>
					<td class="text-white">Tên thành viên: </td>
					<td>
						<input type="text" class="text-white" name="hoten" placeholder="Tên thành viên">
					</td>
				</tr>
				<tr>
					<td class="text-white">Năm sinh </td>
					<td>
						<input type="text" class="text-white" name="namsinh" placeholder="Năm sinh">
					</td>
				</tr>

				<tr>
					<td class="text-white">Quê quán: </td>
					<td>
						<input type="text" class="text-white" name="quequan" placeholder="Quê quán">
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="add-user" value="Thêm thành viên">
					</td>
				</tr>
			</table>
			<?php
			if (isset($_SESSION['thanhcong']) && !empty($_SESSION['thanhcong'])) {
				echo "<p style='color: green; text-align: center'>Thêm thành công </p>";
			}
			?>
		</form>


	</div>
</body>

</html>