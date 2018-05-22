<?php
session_start();
ob_start();
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
	<?php

	?>
<div id="menu"> <a id="hinh" href="index.php"><img src="../images/webdev_0001s_0003_home.png" alt="home"/></a>
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
    <li><a href="index.php">Xếp lớp học</a></li>
    <li><a href="#">Xếp lớp thi</a></li>
    <li><a href="#">Gửi yêu cầu</a></li>
  </ul>
</div>
<div id="content">
	<button id="back"><a href="chonlop.php">Trở lại trang chọn lớp</a></button>
  <h1>Nhập điểm thi</h1>
	<?php
	require("../Conn_DB.php");
	if ($conn->connect_error) {
    die("Kết nối thất bại:" . $conn->connect_error);
}
?>
		<?php
	//$sql1 = $sql;
	//$query = $result;
	//$row = $khoa;
	//print_r($row);
		?>
  <div id="infor">
    <ul>
      <li>Khóa:<?php 
				$sql="select Khoa from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['Khoa']);
				}
		  ?></li>
      <li>Thời gian mở khóa:<?php 
				$sql="select TGmokhoa from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['TGmokhoa']);
				}?></li>
    </ul>
  </div>
  <div id="infor2">
    <ul>
      <li>Lớp:<?php 
				$sql="select Lop from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['Lop']);
				}
		  ?></li>
      <li>Thời gian học:<?php
				$sql="select TGBD from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['TGBD']);
				}
		  ?></li>
      <li>Kết thúc:<?php
				$sql="select TGKT from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['TGKT']);
				}
		  ?></li>
    </ul>
  </div>
  <div id="infor3">
    <ul>
      <li>Ngày thi dự kiến:<?php 
				$sql="select NTdukien from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['NTdukien']);
				}
		  ?></li>
      <li>Giảng viên:<?php 
				$sql="select Giangvien from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['Giangvien']);
				}
		  ?></li>
      <li>Sỉ số:<?php 
				$sql="select SS from ttlophoc where Malophoc=123457" ;
				$result = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($result))
				{
					echo($row['SS']);
				}
		  ?></li>
    </ul>
  </div>
<div id="diem">
<?php
//if(isset($_POST["nhap_diem_1"]))
//{
//$sql = "SELECT STT,Mahv,Tenhv,Ngaysinh FROM diem_thcb ";
//}
//else
//{
	//$sql = "SELECT STT,Mahv,Tenhv,Ngaysinh FROM diem_thnc ";
//}
//$result = mysqli_query($conn, $sql);
?>
	<?php
	ob_start();
			  if(isset($_POST['update']))
			  {
				  $diemlt = $_POST['diemlythuyet'];
				  $diemth = $_POST['diemthuchanh'];
				  $diemlt1 = $_POST['diemlythuyet1'];
				  $diemth1 = $_POST['diemthuchanh1'];
				  $diemlt2 = $_POST['diemlythuyet2'];
				  $diemth2 = $_POST['diemthuchanh2'];
				  $diemlt3 = $_POST['diemlythuyet3'];
				  $diemth3 = $_POST['diemthuchanh3'];
				  $diemlt4 = $_POST['diemlythuyet4'];
				  $diemth4 = $_POST['diemthuchanh4'];
				  $sql1 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt, Diemthuchanh = $diemth WHERE STT=1 AND Lop='THNC012017'";
				  $sql2 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt1, Diemthuchanh = $diemth1 WHERE STT=2 AND Lop='THNC012017'";
				  $sql3 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt2, Diemthuchanh = $diemth2 WHERE STT=3 AND Lop='THNC012017'";
				  $sql4 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt3, Diemthuchanh = $diemth3 WHERE STT=4 AND Lop='THNC012017'";
				  $sql5 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt4, Diemthuchanh = $diemth4 WHERE STT=5 AND Lop='THNC012017'";
				  $query = mysqli_query($conn,$sql1);
				  $query1 = mysqli_query($conn,$sql2);
				  $query2 = mysqli_query($conn,$sql3);
				  $query3 = mysqli_query($conn,$sql4);
				  $query4 = mysqli_query($conn,$sql5);
				  if(!$query)
					{
					  	die('không thể cập nhật: ' . mysqli_error());
					}
						echo("<script language='javascript'>alert('Nhập điểm thành công');");
				  		echo("location.href='';</script>");
						mysqli_close($conn);
	}
	else
	{
	?>
	<form method="post" action="<?php $_PHP_SELF ?>">
	<meta charset = "utf8_unicode_ci">
	<table border="1" cellpadding="5" cellspacing="0.5">
		<thead>
		<tr>
			<td id="stt">STT</td>
			<td id="mahv">Mã học viên</td>
			<td id="ten">Tên học viên</td>
			<td id="gt">Giới tính</td>
			<td id="ns">Ngày sinh</td>
			<td id="qq">Quê quán</td>
			<td id="dlt">Điểm lý thuyết</td>
			<td id="dth">Điểm thực hành</td>
		</tr>
		</thead>
		<tbody>		
			<tr>
				<td><?php
					$sql = "select STT from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['STT']);
					}
					?></td>
				<td><?php
					$sql = "select Mahv from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Mahv']);
					}
					?></td>
				<td><?php
					$sql = "select Tenhv from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Tenhv']);
					}
					?></td>
				<td><?php
					$sql = "select Gioitinh from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Gioitinh']);
					}
					?></td>
				<td><?php
					$sql = "select Ngaysinh from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Ngaysinh']);
					}
					?></td>
				<td><?php
					$sql = "select Quequan from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Quequan']);
					}
					?></td>
				<td><input type="number" name="diemlythuyet" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemlythuyet from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemlythuyet']);
					}
					?>" id="diemlythuyet"></td>
				<td><input type="number" name="diemthuchanh" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemthuchanh from ds_hocvien where Mahv='NC012345'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemthuchanh']);
					}
					?>" id="diemthuchanh"></td>
	</tr>
							<tr>
				<td><?php
					$sql = "select STT from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['STT']);
					}
					?></td>
				<td><?php
					$sql = "select Mahv from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Mahv']);
					}
					?></td>
				<td><?php
					$sql = "select Tenhv from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Tenhv']);
					}
					?></td>
				<td><?php
					$sql = "select Gioitinh from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Gioitinh']);
					}
					?></td>
				<td><?php
					$sql = "select Ngaysinh from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Ngaysinh']);
					}
					?></td>
				<td><?php
					$sql = "select Quequan from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Quequan']);
					}
					?></td>
				<td><input type="number" name="diemlythuyet1" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemlythuyet from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemlythuyet']);
					}
					?>" id="diemlythuyet"></td>
				<td><input type="number" name="diemthuchanh1" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemthuchanh from ds_hocvien where Mahv='NC012346'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemthuchanh']);
					}
					?>" id="diemthuchanh"></td>
	</tr>
							<tr>
				<td><?php
					$sql = "select STT from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['STT']);
					}
					?></td>
				<td><?php
					$sql = "select Mahv from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Mahv']);
					}
					?></td>
				<td><?php
					$sql = "select Tenhv from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Tenhv']);
					}
					?></td>
				<td><?php
					$sql = "select Gioitinh from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Gioitinh']);
					}
					?></td>
				<td><?php
					$sql = "select Ngaysinh from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Ngaysinh']);
					}
					?></td>
				<td><?php
					$sql = "select Quequan from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Quequan']);
					}
					?></td>
				<td><input type="number" name="diemlythuyet2" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemlythuyet from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemlythuyet']);
					}
					?>" id="diemlythuyet"></td>
				<td><input type="number" name="diemthuchanh2" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemthuchanh from ds_hocvien where Mahv='NC012347'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemthuchanh']);
					}
					?>" id="diemthuchanh"></td>
	</tr>
						<tr>
				<td><?php
					$sql = "select STT from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['STT']);
					}
					?></td>
				<td><?php
					$sql = "select Mahv from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Mahv']);
					}
					?></td>
				<td><?php
					$sql = "select Tenhv from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Tenhv']);
					}
					?></td>
				<td><?php
					$sql = "select Gioitinh from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Gioitinh']);
					}
					?></td>
				<td><?php
					$sql = "select Ngaysinh from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Ngaysinh']);
					}
					?></td>
				<td><?php
					$sql = "select Quequan from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Quequan']);
					}
					?></td>
				<td><input type="number" name="diemlythuyet3" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemlythuyet from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemlythuyet']);
					}
					?>" id="diemlythuyet"></td>
				<td><input type="number" name="diemthuchanh3" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemthuchanh from ds_hocvien where Mahv='NC012348'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemthuchanh']);
					}
					?>" id="diemthuchanh"></td>
	</tr>
						<tr>
				<td><?php
					$sql = "select STT from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['STT']);
					}
					?></td>
				<td><?php
					$sql = "select Mahv from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Mahv']);
					}
					?></td>
				<td><?php
					$sql = "select Tenhv from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Tenhv']);
					}
					?></td>
				<td><?php
					$sql = "select Gioitinh from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Gioitinh']);
					}
					?></td>
				<td><?php
					$sql = "select Ngaysinh from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Ngaysinh']);
					}
					?></td>
				<td><?php
					$sql = "select Quequan from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Quequan']);
					}
					?></td>
				<td><input type="number" name="diemlythuyet4" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemlythuyet from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemlythuyet']);
					}
					?>" id="diemlythuyet"></td>
				<td><input type="number" name="diemthuchanh4" max="10" min="0" maxlength="1" value="<?php
					$sql = "select Diemthuchanh from ds_hocvien where Mahv='NC012349'";
					$query = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($query))
					{
						echo($row['Diemthuchanh']);
					}
					?>" id="diemthuchanh"></td>
	</tr>	
		</tbody>
	</table>
 	<input name="update" type="submit" id="update" value="Lưu điểm">
	</form>
	<?php
	}
	?>
</div>
  <div id="button2">
	  <form action="exportdiem2.php">
	  <button id="export" name="xuatfile" type="submit" formmethod="post">
		  <?php
		  //echo("<script>location.href='download.php';</script>");	
		  ?>
		  Xuất dữ liệu</button>
	  </form>
	  <?php
require('../PHPExcel-1.8/PHPExcel-1.8/Classes/PHPExcel.php');
if(isset($_POST['guiexcel']))
{
	$file = $_FILES['file']['tmp_name'];
	$objReader = PHPExcel_IOFactory::createReaderForFile($file);
	$objReader -> setLoadSheetsOnly('BangdiemNC01');
	$objExcel = $objReader -> load($file);
	$sheetData = $objExcel -> getActiveSheet()->toArray('null',true,true,true);
	$highestRow = $objExcel -> setActiveSheetIndex()-> getHighestRow();
	//print_r($sheetData);
	if($row = 2)
	{
		$diemlt = $sheetData[$row]['I'];
		$diemth = $sheetData[$row]['J'];
		
		$sql = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt, Diemthuchanh = $diemth WHERE STT =1 AND Malophoc = 123457";
		$conn->query($sql);
	}
	if($row = 3)
	{
		$diemlt1 = $sheetData[$row]['I'];
		$diemth1 = $sheetData[$row]['J'];
		
		$sql1 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt1, Diemthuchanh = $diemth1 WHERE STT=2 AND Malophoc = 123457";
		$conn->query($sql1);
	}
	if($row = 4)
	{
		$diemlt2 = $sheetData[$row]['I'];
		$diemth2 = $sheetData[$row]['J'];
		
		$sql2 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt2, Diemthuchanh = $diemth2 WHERE STT=3 AND Malophoc = 123457";
		$conn->query($sql2);
	}
		if($row = 5)
	{
		$diemlt3 = $sheetData[$row]['I'];
		$diemth3 = $sheetData[$row]['J'];
		
		$sql3 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt3, Diemthuchanh = $diemth3 WHERE STT=4 AND Malophoc = 123457";
		$conn->query($sql3);
	}
		if($row = 6)
	{
		$diemlt4 = $sheetData[$row]['I'];
		$diemth4 = $sheetData[$row]['J'];
		
		$sql4 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt4, Diemthuchanh = $diemth4 WHERE STT=5 AND Malophoc = 123457";
		$conn->query($sql4);
	}
	echo("<script language='javascript'>alert('Nhập file thành công');");
				  		echo("location.href='';</script>");
}
else
{
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form id="import" method="post" enctype="multipart/form-data">
			<input type = "file" name="file">
			<button type="submit" name="guiexcel">Nhập file</button>
		</form>
	</body>
</html>
<?php
}
?>
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