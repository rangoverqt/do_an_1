<?php
require('Conn_DB.php');
session_start();
?>
<form action="" method="post">
	  <h3>Chọn khóa</h3>	
	  <select name="chonkhoa">
		  <option <?php if(isset($_POST['chonkhoa']) && $_POST['chonkhoa'] == 'Ứng dụng tin học căn bản') echo "selected=\"selected)\""; ?> value="Ứng dụng tin học căn bản">Ứng dụng tin học căn bản</option>
		  <option <?php if(isset($_POST['chonkhoa']) && $_POST['chonkhoa'] == 'Ứng dụng tin học nâng cao') echo "selected=\"selected)\""; ?> value="Ứng dụng tin học nâng cao">Ứng dụng tin học nâng cao</option>
	  </select>
	<input type=submit name="hienlop" value="Chọn lớp"></input>
	  <h3>Chọn lớp</h3>
	  <select name="chonlop" >
		  		  <?php
		  if(isset($_POST['chonkhoa']) && $_POST['chonkhoa']== 'Ứng dụng tin học căn bản')
		  {
			  ?>
		  <option <?php if(isset($_POST['chonlop']) && $_POST['chonlop'] == 'THCB012017') echo "selected=\"selected)\""; ?> value="THCB012017">THCB012017</option>
		  <option <?php if(isset($_POST['chonlop']) && $_POST['chonlop'] == 'THCB022017') echo "selected=\"selected)\""; ?> value="THCB022017">THCB022017</option>
	<?php
		  }
		  ?>
		  		  		  <?php
		  if(isset($_POST['chonkhoa']) && $_POST['chonkhoa']== 'Ứng dụng tin học nâng cao')
		  {
			  ?>
		  <option <?php if(isset($_POST['chonlop']) && $_POST['chonlop'] == 'THNC012017') echo "selected=\"selected)\""; ?> value="THNC012017">THNC012017</option>
		  <option <?php if(isset($_POST['chonlop']) && $_POST['chonlop'] == 'THNC022017') echo "selected=\"selected)\""; ?> value="THNC022017">THNC022017</option>
		  <?php
		  }
		  ?>
	  </select>
		  <input name="hienthi" type="submit" value="Hiển thị"></input>
</form>
<?php
 if(isset($_POST['hienthi']))
	  {
		  $chonkhoa = $_POST['chonkhoa'];
		  $chonlop = $_POST['chonlop'];
		  $sql = "SELECT * FROM ttlophoc WHERE Khoa='$chonkhoa' AND Lop ='$chonlop'";
		  $query = mysqli_query($conn,$sql);
			  while($row = mysqli_fetch_assoc($query))
			  {
				  ?>
<label>Khóa:<?php echo($row['Khoa']); ?></label>
<label>Thời gian mở khóa:<?php echo($row['TGmokhoa']); ?></label>
<br></br>
<label>Lớp:<?php echo($row['Lop']); ?></label>
<label>Thời gian bắt đầu:<?php echo($row['TGBD']); ?></label>
<label>Thời gian kết thúc:<?php echo($row['TGKT']); ?></label>
<br></br>
<label>Ngày thi dự kiến:<?php echo($row['NTdukien']); ?></label>
<br></br>
<label>Giảng viên:<?php echo($row['Giangvien']); ?></label>
<label>Sỉ số:<?php echo($row['SS']); ?></label>
<?php
}
	 ?>
<form method="post" action="<?php $_PHP_SELF ?>">
	<meta charset = "utf8_unicode_ci">
<table border="1" cellpadding="5" cellspacing="0.5">
	<thead>
	<tr>
		<td>STT</td>
		<td>Mã học viên</td>
		<td>Tên học viên</td>
		<td>Lớp</td>
		<td>Giới tính</td>
		<td>Ngày sinh</td>
		<td>Quê quán</td>
		<td>Điểm lý thuyết</td>
		<td>Điểm thực hành</td>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['STT']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Mahv']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Tenhv']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Lop']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Gioitinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Ngaysinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Quequan']);
			  }?></td>
			<td><input type="number" name="diemthuchanh" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemlythuyet']);
			  } ?>"></td>
			<td><input type="number" name="diemthuchanh" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 1 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemthuchanh']);
			  } ?>"></td>
		</tr>
				<tr>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['STT']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Mahv']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Tenhv']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Lop']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Gioitinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Ngaysinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Quequan']);
			  }?></td>
			<td><input type="number" name="diemthuchanh1" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemlythuyet']);
			  } ?>"></td>
			<td><input type="number" name="diemthuchanh1" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 2 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemthuchanh']);
			  } ?>"></td>
		</tr>
				<tr>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['STT']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Mahv']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop' AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Tenhv']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Lop']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Gioitinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Ngaysinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Quequan']);
			  }?></td>
			<td><input type="number" name="diemthuchanh2" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemlythuyet']);
			  } ?>"></td>
			<td><input type="number" name="diemthuchanh2" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 3 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemthuchanh']);
			  } ?>"></td>
		</tr>
				<tr>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['STT']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Mahv']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Tenhv']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Lop']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Gioitinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Ngaysinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Quequan']);
			  }?></td>
			<td><input type="number" name="diemthuchanh3" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemlythuyet']);
			  } ?>"></td>
			<td><input type="number" name="diemthuchanh3" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 4 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemthuchanh']);
			  } ?>"></td>
		</tr>
				<tr>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['STT']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Mahv']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Tenhv']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Lop']);
			  }?></td>
						<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Gioitinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Ngaysinh']);
			  }?></td>
			<td><?php 
			  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Quequan']);
			  }?></td>
			<td><input type="number" name="diemthuchanh4" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemlythuyet']);
			  } ?>"></td>
			<td><input type="number" name="diemthuchanh4" max="10" min="0" maxlength="1" formmethod="post" value="<?php  $sql2 = "SELECT * FROM ds_hocvien WHERE STT = 5 AND Lop ='$chonlop'AND Khoa = '$chonkhoa'";
			  $query = mysqli_query($conn,$sql2);
			  while($row=mysqli_fetch_assoc($query))
			  {
			  echo($row['Diemthuchanh']);
			  } ?>"></td>
		</tr>
	</tbody>
</table>
<input name="nhapdiem" type="submit" value="Lưu điểm">
<input name="xuatfile" type="submit" value="Xuất file">
<input name="nhapfile" type="submit" value="Nhập file">
</form>
<?php			  
			  ob_start();
			  if(isset($_POST['nhapdiem']))
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
				  $sql1 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt, Diemthuchanh = $diemth WHERE STT=1 AND Lop = $chonlop AND Khoa = '$chonkhoa'";
				  $sql2 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt1, Diemthuchanh = $diemth1 WHERE STT=2 AND Lop = $chonlop AND Khoa = '$chonkhoa'";
				  $sql3 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt2, Diemthuchanh = $diemth2 WHERE STT=3 AND Lop = $chonlop AND Khoa = '$chonkhoa'";
				  $sql4 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt3, Diemthuchanh = $diemth3 WHERE STT=4 AND Lop = $chonlop AND Khoa = '$chonkhoa'";
				  $sql5 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt4, Diemthuchanh = $diemth4 WHERE STT=5 AND Lop = $chonlop AND Khoa = '$chonkhoa'";
				  $query = mysqli_query($conn,$sql1);
				  $query1 = mysqli_query($conn,$sql2);
				  $query2 = mysqli_query($conn,$sql3);
				  $query3 = mysqli_query($conn,$sql4);
				  $query4 = mysqli_query($conn,$sql5);
				  if(!$query)
					{
					  	die('không thể cập nhật: ' . mysqli_error());
					}
						echo("Nhập điểm thành công\n");
						mysqli_close($conn);
					}
				  ?>
<?php
//require ('CBQL\Classes\PHPExcel.php');
if(isset($_POST['xuatfile']))
{
	echo("<script>alert('co loi');</script>");
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('Bangdiem');
	
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'STT');
	$sheet->setCellValue('B'.$rowCount,'Mã học viên');
	$sheet->setCellValue('C'.$rowCount,'Tên học viên');
	$sheet->setCellValue('D'.$rowCount,'Ngày sinh');
	$sheet->setCellValue('E'.$rowCount,'Ðiểm lý thuyết');
	$sheet->setCellValue('F'.$rowCount,'Điểm thực hành');
	$conn=mysqli_connect('localhost','root','','diemhv') or die ('Không thể kết nối');
		mysqli_set_charset($conn,'utf8'); 
	$sql = "select * from ds_hocvien where Lop=$chonlop AND Khoa = '$chonkhoa'";
	$query = mysqli_query($conn,$sql);
	if (mysqli_num_rows($query)>0){
		while ($row = mysqli_fetch_array($query)){
			$rowCount++;
			$sheet->setCellValue('A'.$rowCount,$row['STT']);
			$sheet->setCellValue('B'.$rowCount,$row['Mahv']);
			$sheet->setCellValue('C'.$rowCount,$row['Tenhv']);
			$sheet->setCellValue('D'.$rowCount,$row['Ngaysinh']);
			$sheet->setCellValue('E'.$rowCount,$row['Diemlythuyet']);
			$sheet->setCellValue('F'.$rowCount,$row['Diemthuchanh']);
		}
		//$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
		$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
		$filename = 'Bangdiem.xlsx';
		ob_end_clean();
		$objWriter->save($filename);

		header('Content-Disposition: attachment; filename="' . $filename . '"');  
		header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');  
		header('Content-Length: ' . filesize($filename));  
		header('Content-Transfer-Encoding: binary');  
		header('Cache-Control: must-revalidate');  
		header('Pragma: no-cache');  
		readfile($filename);  
		return;

	}
	else
	{
		
	}
	?>
<?php
}
			  if(isset($_POST['nhapfile']))
			  {
require('PHPExcel-1.8\PHPExcel-1.8\Classes\PHPExcel.php');
if(isset($_POST['guiexcel']))
{
	$file = $_FILES['file']['tmp_name'];
	$objReader = PHPExcel_IOFactory::createReaderForFile($file);
	$objReader -> setLoadSheetsOnly('Bangdiem');
	$objExcel = $objReader -> load($file);
	$sheetData = $objExcel -> getActiveSheet()->toArray('null',true,true,true);
	$highestRow = $objExcel -> setActiveSheetIndex()-> getHighestRow();
	print_r($sheetData);
	if($row = 2)
	{
		$diemlt = $sheetData[$row]['E'];
		$diemth = $sheetData[$row]['F'];
		
		$sql = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt, Diemthuchanh = $diemth WHERE STT =1 AND Lop=$chonlop AND Khoa = '$chonkhoa'";
		$conn->query($sql);
	}
	if($row = 3)
	{
		$diemlt1 = $sheetData[$row]['E'];
		$diemth1 = $sheetData[$row]['F'];
		
		$sql1 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt1, Diemthuchanh = $diemth1 WHERE STT=2 AND Lop=$chonlop AND Khoa = '$chonkhoa'";
		$conn->query($sql1);
	}
	if($row = 4)
	{
		$diemlt2 = $sheetData[$row]['E'];
		$diemth2 = $sheetData[$row]['F'];
		
		$sql2 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt2, Diemthuchanh = $diemth2 WHERE STT=3 AND Lop=$chonlop AND Khoa = '$chonkhoa'";
		$conn->query($sql2);
	}
	if($row = 5)
	{
		$diemlt3 = $sheetData[$row]['E'];
		$diemth3 = $sheetData[$row]['F'];
		
		$sql3 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt3, Diemthuchanh = $diemth3 WHERE STT=4 AND Lop=$chonlop AND Khoa = '$chonkhoa'";
		$conn->query($sql3);
	}
	if($row = 6)
	{
		$diemlt4 = $sheetData[$row]['E'];
		$diemth4 = $sheetData[$row]['F'];
		
		$sql4 = "UPDATE ds_hocvien SET Diemlythuyet = $diemlt4, Diemthuchanh = $diemth4 WHERE STT=5 AND Lop=$chonlop AND Khoa = '$chonkhoa'";
		$conn->query($sql4);
	}
	echo("Nhập file thành công");
}
else
{
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Nhập file</title>
<link rel="stylesheet" href="">
		<form method="post" enctype="multipart/form-data">
			<input type = "file" name="file">
			<button type="submit" name="guiexcel">Nhập file</button>
		</form>
<?php
}
			  }
 }
?>
