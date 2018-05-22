<?php
require('../Conn_DB.php');
require('../PHPExcel-1.8/PHPExcel-1.8/Classes/PHPExcel.php');
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
		
		$sql = "UPDATE diem_thnc SET Diemlythuyet = $diemlt, Diemthuchanh = $diemth WHERE STT =1";
		$conn->query($sql);
	}
	if($row = 3)
	{
		$diemlt1 = $sheetData[$row]['E'];
		$diemth1 = $sheetData[$row]['F'];
		
		$sql1 = "UPDATE diem_thnc SET Diemlythuyet = $diemlt1, Diemthuchanh = $diemth1 WHERE STT=2";
		$conn->query($sql1);
	}
	if($row = 4)
	{
		$diemlt2 = $sheetData[$row]['E'];
		$diemth2 = $sheetData[$row]['F'];
		
		$sql2 = "UPDATE diem_thnc SET Diemlythuyet = $diemlt2, Diemthuchanh = $diemth2 WHERE STT=3";
		$conn->query($sql2);
	}
	echo("Nhập file thành công");
}
else
{
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Nhập file</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<input type = "file" name="file">
			<button type="submit" name="guiexcel">Nhập file</button>
		</form>
	</body>
</html>
<?php
}
?>