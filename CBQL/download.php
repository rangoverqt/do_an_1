<?php
session_start();
ob_start();
require("../Conn_DB.php");
if ($conn->connect_error) {
    die("Kết nối thất bại:" . $conn->connect_error);
}
if(isset($_POST['xuatfile']) && isset($_POST['nhap_diem_1']))
{
$sql = "select * from ttlophoc where Malophoc =123456";
}
else
{
	$sql = "select * from ttlophoc where Malophoc =123457";
}
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<meta charset="utf-8">
<table border="1" cellpadding="5" cellspacing="0.5">
		<thead>
		<tr>
			<td>Malophoc</td>
			<td>Khóa</td>
			<td>Thời gian mở khóa</td>
			<td>Lớp</td>
			<td>Thời gian bắt đầu</td>
			<td>Thời gian kết thúc</td>
			<td>Ngày thi dự kiến</td>
			<td>Giảng viên</td>
			<td>Sỉ số</td>
		</tr>
		</thead>
		<tbody>	
			<tr>
				<td><?php echo($row["Malophoc"])?></td>
				<td><?php echo($row["Khoa"])?></td>
				<td><?php echo($row["TGmokhoa"])?></td>
				<td><?php echo($row["Lop"])?></td>
				<td><?php echo($row["TGBD"])?></td>
				<td><?php echo($row["TGKT"])?></td>
				<td><?php echo($row["NTdukien"])?></td>
				<td><?php echo($row["Giangvien"])?></td>
				<td><?php echo($row["SS"])?></td>
			</tr>
	</tbody>
</table>
<br></br>
<?php
// Câu SQL lấy danh sách
	if (isset($_POST['nhap_diem_1']))
	{
$sql = "SELECT * FROM diem_thcb ";
	}
	else 
	{
$sql = "SELECT * FROM diem_thnc ";		
	}
$query = mysqli_query($conn, $sql);
?>
	<meta charset = "utf8_unicode_ci">
	<table border="1" cellpadding="5" cellspacing="0.5">
		<thead>
		<tr>
			<td>STT</td>
			<td>Mã học viên</td>
			<td>Tên học viên</td>
			<td>Ngày sinh</td>
			<td>Lớp học</td>
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
				<td><?php echo($row["Lop"])?></td>
				<td><input type="number" name="Diemlythuyet" disabled max="10" min="0" maxlength="1" value="<?php echo($row["Diemlythuyet"])?>"></td>
				<td><input type="number" name="Diemthuchanh" disabled max="10" min="0" maxlength="1" value="<?php echo($row["Diemthuchanh"])?>"></td>
	</tr>
			<?php
				}
			}
			?>
		</tbody>
	</table>
<br></br>
<a href="getexcel.php">Click để tải về</a>