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
    <li><a href="#">Xếp lớp học</a></li>
    <li><a href="#">Xếp lớp thi</a></li>
    <li><a href="#">Gửi yêu cầu</a></li>
  </ul>
</div>
<div id="content">
  <h1>Tìm kiếm học viên</h1>
	<div id="tabletk">
	<form action="" method="post">
		<meta charset="utf-8">
		<h2>Chọn cách tìm kiếm:</h2>
		<select name="chon">
			<option value="ma_hoc_vien">Mã học viên</option>
			<option value="ten_hoc_vien">Tên học viên</option>
			<option value="lop">Lớp</option>
		</select>
		<h2>Nhập thông tin tìm kiếm: </h2>
		<input type="text" name="gia_tri" placeholder="nhập giá trị" />
		<input id="tk" type="submit" name="search" value="Tìm kiếm" />
	</form>
	<?php
	$connect = mysqli_connect("localhost", "root", "", "diemhv");
	mysqli_set_charset($connect,'utf8');
	if(isset($_POST['search']) && $_POST['chon'] == "ma_hoc_vien")
	{
		$sql = "select * from ds_hocvien where Mahv='".$_POST['gia_tri']."'";
		$query = mysqli_query($connect, $sql);
			?>
		 <table id="table1" border="1" cellpadding="5" cellspacing="0.5">
        <tr>           
            <th>Mã học viên</th>
            <th>Tên học viên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Quê quán</th>
            <th>Điểm lý thuyết</th>
			<th>Điểm thực hành</th>
			<th>Tùy chọn</th>
        </tr>
        <?php           
            while($row = mysqli_fetch_array($query))
            {
                $chuoi = "<tr>";
                $chuoi .= "<td>".$row['Mahv']."</td>";
                $chuoi .= "<td>".$row['Tenhv']."</td>";
                $chuoi .= "<td>".$row['Gioitinh']."</td>";
                $chuoi .= "<td>".$row['Ngaysinh']."</td>";
                $chuoi .= "<td>".$row['Quequan']."</td>";
				$chuoi .= "<td>".$row['Diemlythuyet']."</td>";
				$chuoi .= "<td>".$row['Diemthuchanh']."</td>";
                $chuoi .= "<td><a href='edit1.php?ID=". $row["Mahv"] . "'> Chỉnh sửa </a></td>";
                $chuoi .= "</tr>";
                echo $chuoi;
            }
        ?>
         
    </table>
		<?php
	}
	if(isset($_POST['search']) && $_POST['chon'] == "ten_hoc_vien")
	{
		$sql_1 = "select * from ds_hocvien where Tenhv='".$_POST['gia_tri']."'";
		$query_1 = mysqli_query($connect, $sql_1);
		?>
		 <table id="table1" border="1" cellpadding="5" cellspacing="0.5">
        <tr>           
            <th>Mã học viên</th>
            <th>Tên học viên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Quê quán</th>
            <th>Điểm lý thuyết</th>
			<th>Điểm thực hành</th>
			<th>Tùy chọn</th>
        </tr>
        <?php           
            while($row_1 = mysqli_fetch_array($query_1))
            {
                $chuoi = "<tr>";
                $chuoi .= "<td>".$row_1['Mahv']."</td>";
                $chuoi .= "<td>".$row_1['Tenhv']."</td>";
                $chuoi .= "<td>".$row_1['Gioitinh']."</td>";
                $chuoi .= "<td>".$row_1['Ngaysinh']."</td>";
                $chuoi .= "<td>".$row_1['Quequan']."</td>";
				$chuoi .= "<td>".$row_1['Diemlythuyet']."</td>";
				$chuoi .= "<td>".$row_1['Diemthuchanh']."</td>";
                $chuoi .= "<td><a href='edit1.php?ID=". $row_1["Mahv"] . "'> Chỉnh sửa </a></td>";
                $chuoi .= "</tr>";
                echo $chuoi;
            }
        ?>
	    </table>
		<?php
	}
	if(isset($_POST['search']) && $_POST['chon'] == "lop")
	{
		$sql_2 = "select * from ds_hocvien where Lop='".$_POST['gia_tri']."'";
		$query_2 = mysqli_query($connect, $sql_2);
		while($row_2 = mysqli_fetch_assoc($query_2))
			{
				echo("<table border='1' cellspacing='0.5' cellpading='5'>");
					echo("<tr>");
						echo("<th>STT</th>");
						echo("<th>Mã học viên</th>");
						echo("<th>Mã lớp học</th>");
						echo("<th>Khoa</th>");
						echo("<th>Lớp</th>");
						echo("<th>Tên học viên</th>");
						echo("<th>Giới tính</th>");
						echo("<th>Ngày sinh</th>");
						echo("<th>Quê quán</th>");
						echo("<th>Điểm lý thuyết</th>");
						echo("<th>Điểm thực hành</th>");
					echo("</tr>");
					echo("<tr>");
						echo("<td>".$row_2['STT']."</td>");
						echo("<td>".$row_2['Mahv']."</td>");
						echo("<td>".$row_2['Malophoc']."</td>");
						echo("<td>".$row_2['Khoa']."</td>");
						echo("<td>".$row_2['Lop']."</td>");
						echo("<td>".$row_2['Tenhv']."</td>");
						echo("<td>".$row_2['Gioitinh']."</td>");
						echo("<td>".$row_2['Ngaysinh']."</td>");
						echo("<td>".$row_2['Quequan']."</td>");
						echo("<td>".$row_2['Diemlythuyet']."</td>");
						echo("<td>".$row_2['Diemthuchanh']."</td>");
					echo("</tr>");
				echo("</table>");
			}
		
	}
	?>
	</div>
  <div id="button">
  </div>
  <div id="button2">
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
    <li><a href="nhapdiem.php">Nhập điểm</a></li>
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
