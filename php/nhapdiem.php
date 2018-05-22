<?php
// Kết nối CSDL
$conn = mysqli_connect("localhost","root","","diemhv");
mysqli_set_charset($conn,"utf8");
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại:" . $conn->connect_error);
} 
// Câu SQL lấy danh sách
$sql = "SELECT * FROM diem";
$query = mysqli_query($conn, $sql);
?>
<html>
	<head>
		<meta charset = "utf8_unicode_ci">
		<link rel="stylesheet" type="text/css" href="css/content.css"/>
	</head>
</html>
<body>
	<table id="table_diem" border="1">
		<thead>
		<tr>
			<td>STT</td>
			<td>Mã học viên</td>
			<td>Tên học viên</td>
			<td>Ngày sinh</td>
			<td>Mã lớp học</td>
			<td>Điểm lý thuyết</td>
			<td>Điểm thực hành</td>
		</tr>
		</thead>
		<tbody>
			<?php
			if (mysqli_num_rows($query)>0){
				while ($row = mysqli_fetch_assoc($query)){
			?>		
			<tr>
				<td><?php echo($row["STT"])?></td>
				<td><?php echo($row["Mahv"])?></td>
				<td><?php echo($row["Tenhv"])?></td>
				<td><?php echo($row["Ngaysinh"])?></td>
				<td><?php echo($row["Malophoc"])?></td>
				<td><?php echo($row["Diemlythuyet"])?></td>
				<td><?php echo($row["Diemthuchanh"])?></td>
	</tr>
			<?php
				}
			}
			?>
		</tbody>
	</table>
</body>