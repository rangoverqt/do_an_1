<?php
require ('Classes/PHPExcel.php');
if(isset($_POST['xuatfile']))
{
	$objExcel = new PHPExcel;
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('BangdiemNC02');
	
	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'STT');
	$sheet->setCellValue('B'.$rowCount,'Mã học viên');
	$sheet->setCellValue('C'.$rowCount,'Khóa');
	$sheet->setCellValue('D'.$rowCount,'Lớp');
	$sheet->setCellValue('E'.$rowCount,'Tên học viên');
	$sheet->setCellValue('F'.$rowCount,'Giới tính');
	$sheet->setCellValue('G'.$rowCount,'Ngày sinh');
	$sheet->setCellValue('H'.$rowCount,'Quê quán');
	$sheet->setCellValue('I'.$rowCount,'Ðiểm lý thuyết');
	$sheet->setCellValue('J'.$rowCount,'Điểm thực hành');
	$conn=mysqli_connect('localhost','root','','diemhv') or die ('Không thể kết nối');
		mysqli_set_charset($conn,'utf8'); 
	$sql = "select * from ds_hocvien where Malophoc = 123459  ";
	$query = mysqli_query($conn,$sql);
	if (mysqli_num_rows($query)>0){
		while ($row = mysqli_fetch_array($query)){
			$rowCount++;
	$sheet->setCellValue('A'.$rowCount,$row['STT']);
	$sheet->setCellValue('B'.$rowCount,$row['Mahv']);
	$sheet->setCellValue('C'.$rowCount,$row['Khoa']);
	$sheet->setCellValue('D'.$rowCount,$row['Lop']);
	$sheet->setCellValue('E'.$rowCount,$row['Tenhv']);
	$sheet->setCellValue('F'.$rowCount,$row['Gioitinh']);
	$sheet->setCellValue('G'.$rowCount,$row['Ngaysinh']);
	$sheet->setCellValue('H'.$rowCount,$row['Quequan']);
	$sheet->setCellValue('I'.$rowCount,$row['Diemlythuyet']);
	$sheet->setCellValue('J'.$rowCount,$row['Diemthuchanh']);
		}
		//$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
		$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
		$filename = 'BangdiemNC02.xlsx';
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
}
?>