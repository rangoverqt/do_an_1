<?php
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/My template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/menu_tab.css">
<link rel="stylesheet" type="text/css" href="../css/content.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="header"><!-- begin header --> 
  <img src="../images/webdev_0008s_0000_Layer-2.png" alt="header"/> </div>
<!-- end header -->
<div class="clr"></div>
<!-- InstanceBeginEditable name="content" -->
<div id="menu"> <a id="hinh" href="chonlop.php"><img src="../images/webdev_0001s_0003_home.png" alt="home"/></a>
  <ul>
    <li><a href="#">Thông báo</a></li>
    <li><a href="#">Kế hoạch</a></li>
    <li><a href="#">Tạo biểu mẫu</a></li>
    <li><a href="#">Hộp thư</a></li>
    <li><a href="#">Chấm thi</a></li>
    <li><a href="#">Thông tin</a></li>
  </ul>
</div>
<div id="function">
  <h1>Chức năng trực tuyến</h1>
  <ul>
	  <li><a href="timkiem.php">Tìm kiếm thông tin</a></li>
    <li><a href="#">Xếp lớp học</a></li>
    <li><a href="#">Xếp lớp thi</a></li>
    <li><a href="#">Gửi yêu cầu</a></li>
  </ul>
</div>
<div id="content">
  <h1>Danh sách lớp học</h1>
<div id="lophoc">
<?php
// Kết nối CSDL
require("../Conn_DB.php");
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại:" . $conn->connect_error);
} 
// Câu SQL lấy danh sách
$sql = "SELECT * FROM ttlophoc WHERE Malophoc";
$query = mysqli_query($conn, $sql);
?>
	<meta charset = "utf8_unicode_ci">
	<form action = "">
	<table id="table" border="1" cellpadding="5" cellspacing="0.5">
		<thead>
		<tr>
			<td id="malh">Mã lớp học</td>
			<td id="khoa">Khóa</td>
			<td id="lop">Lớp</td>
			<td id="nd">Nhập điểm</td>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php
					$sql = "select Malophoc from ttlophoc where Malophoc='123456'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Malophoc']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Khoa from ttlophoc where Malophoc='123456'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Khoa']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Lop from ttlophoc where Malophoc='123456'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Lop']);
					}
					?>
				</td>
				<td>
					<button name="nhap_diem_1" formaction="nhapdiem.php" formmethod="post" value="nhap_1">
				Nhập điểm</button>
				</td>
			</tr>
			<tr>
				<td>
					<?php
					$sql = "select Malophoc from ttlophoc where Malophoc='123458'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Malophoc']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Khoa from ttlophoc where Malophoc='123458'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Khoa']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Lop from ttlophoc where Malophoc='123458'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Lop']);
					}
					?>
				</td>
				<td>
					<button name="nhap_diem_3" formaction="nhapdiem1.php" formmethod="post" value="nhap_3">
				Nhập điểm</button>
				</td>
			</tr>

			<tr>
				<td>
					<?php
					$sql = "select Malophoc from ttlophoc where Malophoc='123457'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Malophoc']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Khoa from ttlophoc where Malophoc='123457'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Khoa']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Lop from ttlophoc where Malophoc='123457'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Lop']);
					}
					?>
				</td>
				<td>
					<button name="nhap_diem_2" formaction="nhapdiem2.php" formmethod="post" value="nhap_2" >Nhập điểm
				</button>
				</td>
			</tr>
			<tr>
				<td>
					<?php
					$sql = "select Malophoc from ttlophoc where Malophoc='123459'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Malophoc']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Khoa from ttlophoc where Malophoc='123459'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Khoa']);
					}
					?>
				</td>
				<td>
					<?php
					$sql = "select Lop from ttlophoc where Malophoc='123459'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Lop']);
					}
					?>
				</td>
				<td>
					<button name="nhap_diem_4" formaction="nhapdiem3.php" formmethod="post" value="nhap_4">
				Nhập điểm</button>
				</td>
			</tr>

		</tbody>
	</table>
	</form>
</div>
</div>
<div id="taikhoan">
  <h1>Tài khoản</h1>
  <ul>
  <li><a href="#">Đăng Xuất</a></li>
  <li><a href="#">Đổi mật khẩu</a></li>
  </ul>
</div>
<div id="function2">
  <h1>Chức năng</h1>
  <ul>
    <li><a href="#">Xem lịch dạy</a></li>
    <li><a href="#">Xem lịch coi thi</a></li>
    <li><a href="#">Báo cáo</a></li>
    <li><a href="#">Danh sách thí sinh</a></li>
  </ul>
</div>
<!-- InstanceEndEditable -->
<div class="footer"> <img src="../images/footer.png" alt="footer"/> </div>
</body>
<!-- InstanceEnd --></html>