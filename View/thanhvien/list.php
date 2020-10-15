<div class="pt-4">
	<form action="" method="GET">
		<table>
			<tr>
				<td>
					<input style="display: none; opacity: 0" type="text" name="controller" value="thanh-vien" />
					<input style="display: none; opacity: 0" type="text" name="action" value="tim-kiem" />
					<input class="px-4 py-2 text-white" style="border-radius: 5px; border: 1px solid orange;" type="text" name="tukhoa" placeholder="Nhập từ khóa">
				</td>
				<td>
					<input class="btn btn-default btn-danger" type="submit" value="Tìm kiếm">
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="list">
	<a style="background: yellow; color: black; padding: 10px" href="index.php?controller=thanh-vien&action=add">
		Thêm thành viên
	</a>

	<h3>
		Danh sách thành viên - Quản lý thành viên
	</h3>
	<table class="mb-3">
		<thead>
			<tr>
				<th> STT </th>
				<th> Tên thành viên </th>
				<th> Năm Sinh </th>
				<th> Quê Quán </th>
				<th> Hành động </th>
			</tr>
		</thead>
		<tbody>
			<?php
			$stt = 1;
			foreach ($data as $value) {
			?>
				<tr>
					<td> <?php echo $stt; ?> </td>
					<td> <?php echo $value['hoten']; ?> </td>
					<td> <?php echo $value['namsinh']; ?> </td>
					<td> <?php echo $value['quequan']; ?> </td>
					<td>
						<div class="btn btn-success">
							<a style="color: white;" href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['id'] ?>">Edit</a>
						</div>
						<div class="btn btn-danger">
							<a onclick="return confirm('Bạn có chắc muốn xóa không')" style="color: white" href="index.php?controller=thanh-vien&action=delete&id=<?php echo $value['id'] ?>">Delete</a>
						</div>
					</td>
				</tr>
			<?php
				$stt++;
			}
			?>
		</tbody>
	</table>
</div>