<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="" method="post">
		<meta charset="utf-8">
		<h1>Lớp tìm kiếm</h1>
		<select name="chon">
			<option value="ma_hoc_vien">Mã học viên</option>
			<option value="ten_hoc_vien">Tên học viên</option>
			<option value="lop">Lớp</option>
		</select>
		<h2>Nhập thông tin tìm kiếm: </h2>
		<input type="text" name="gia_tri" placeholder="nhập giá trị" />
		<input type="submit" name="search" value="tìm kiếm" />
	</form>
	<?php
	$connect = mysqli_connect("localhost", "root", "", "diemhv");
	mysqli_set_charset($connect,'utf8');
	if(isset($_POST['search']) && $_POST['chon'] == "ma_hoc_vien")
	{
		$sql = "select * from ds_hocvien where Mahv='".$_POST['gia_tri']."'";
		$query = mysqli_query($connect, $sql);
		while($row = mysqli_fetch_assoc($query))
			{
			?>
	<meta charset=utf-8>
	<?php
				echo("<table border='1' cellspacing='0.5' cellpading='5'>");
						echo("<tr><th>STT</th></tr>");
			echo("<tr><td>'".$row['STT']."'</td></tr>");
						echo("<tr><th>Mã học viên</th></tr>");
			echo("<tr><td>'".$row['Mahv']."'</td></tr>");
						echo("<tr><th>Mã lớp học</th></tr>");
			echo("<tr><td>'".$row['Malophoc']."'</td></tr>");
						echo("<tr><th>Khoa</th></tr>");
			echo("<tr><td>'".$row['Khoa']."'</td></tr>");
						echo("<tr><th>Lớp</th></tr>");
			echo("<tr><td>'".$row['Lop']."'</td></tr>");
						echo("<tr><th>Tên học viên</th></tr>");
			echo("<tr><td>'".$row['Tenhv']."'</td></tr>");
						echo("<tr><th>Giới tính</th></tr>");
			echo("<tr><td>'".$row['Gioitinh']."'</td></tr>");
						echo("<tr><th>Ngày sinh</th></tr>");
			echo("<tr><td>'".$row['Ngaysinh']."'</td></tr>");
						echo("<tr><th>Quê quán</th></tr>");
			echo("<tr><td>'".$row['Quequan']."'</td></tr>");
						echo("<tr><th>Điểm lý thuyết</th></tr>");
			echo("<tr><td>'".$row['Diemlythuyet']."'</td></tr>");
						echo("<tr><th>Điểm thực hành</th></tr>");			
						echo("<tr><td>'".$row['Diemthuchanh']."'</td></tr>");
				echo("</table>");
			}
	}
	if(isset($_POST['search']) && $_POST['chon'] == "ten_hoc_vien")
	{
		$sql_1 = "select * from ds_hocvien where Tenhv='".$_POST['gia_tri']."'";
		$query_1 = mysqli_query($connect, $sql_1);
		while($row_1 = mysqli_fetch_assoc($query_1))
			{
				echo("<table border='1' cellspacing='0.5' cellpading='5'>");
						echo("<tr><th>STT</th></tr>");
			echo("<tr><td>'".$row['STT']."'</td></tr>");
						echo("<tr><th>Mã học viên</th></tr>");
			echo("<tr><td>'".$row['Mahv']."'</td></tr>");
						echo("<tr><th>Mã lớp học</th></tr>");
			echo("<tr><td>'".$row['Malophoc']."'</td></tr>");
						echo("<tr><th>Khoa</th></tr>");
			echo("<tr><td>'".$row['Khoa']."'</td></tr>");
						echo("<tr><th>Lớp</th></tr>");
			echo("<tr><td>'".$row['Lop']."'</td></tr>");
						echo("<tr><th>Tên học viên</th></tr>");
			echo("<tr><td>'".$row['Tenhv']."'</td></tr>");
						echo("<tr><th>Giới tính</th></tr>");
			echo("<tr><td>'".$row['Gioitinh']."'</td></tr>");
						echo("<tr><th>Ngày sinh</th></tr>");
			echo("<tr><td>'".$row['Ngaysinh']."'</td></tr>");
						echo("<tr><th>Quê quán</th></tr>");
			echo("<tr><td>'".$row['Quequan']."'</td></tr>");
						echo("<tr><th>Điểm lý thuyết</th></tr>");
			echo("<tr><td>'".$row['Diemlythuyet']."'</td></tr>");
						echo("<tr><th>Điểm thực hành</th></tr>");			
						echo("<tr><td>'".$row['Diemthuchanh']."'</td></tr>");
				echo("</table>");
			}
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
						echo("<td>'".$row_2['STT']."'</td>");
						echo("<td>'".$row_2['Mahv']."'</td>");
						echo("<td>'".$row_2['Malophoc']."'</td>");
						echo("<td>'".$row_2['Khoa']."'</td>");
						echo("<td>'".$row_2['Lop']."'</td>");
						echo("<td>'".$row_2['Tenhv']."'</td>");
						echo("<td>'".$row_2['Gioitinh']."'</td>");
						echo("<td>'".$row_2['Ngaysinh']."'</td>");
						echo("<td>'".$row_2['Quequan']."'</td>");
						echo("<td>'".$row_2['Diemlythuyet']."'</td>");
						echo("<td>'".$row_2['Diemthuchanh']."'</td>");
					echo("</tr>");
				echo("</table>");
			}
		
	}
	?>
</body>
</html>