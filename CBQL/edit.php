<?php ob_start() ?>
<?php           
        //Neu co ton tai ID
        if(isset($_REQUEST["ID"]))
        {
            $connect = mysqli_connect('localhost', 'root', '','diemhv'); //Ket noi den MySQL
            mysqli_set_charset($connect,'utf8'); //Hien thi unicode
 
            if($connect)
            {
                if (isset($_POST['Submit']))  //Neu nhan nut cap nhat
                {
                    $query ="UPDATE ds_hocvien SET Tenhv='" . $_POST["txtTenhocvien"] . "',
                    Gioitinh = '". $_POST["txtGioitinh"]."',
                    Ngaysinh = '". $_POST["txtNgaysinh"]."',
                    Quequan = '". $_POST["txtQuequan"] ."',
					Diemlythuyet = '". $_POST["txtDiemlt"] ."',
					Diemthuchanh = '". $_POST["txtDiemth"] ."'
                    WHERE Mahv='". $_REQUEST["ID"] . "'";
                     
                    $result = mysqli_query($connect,$query); //Thuc thi cau lenh
                    if($result)
                    {
						
                        echo("<script language='javascript'>alert('Chỉnh sửa thành công');");
				  		echo("location.href='timkiem.php';</script>");
                        exit();
                    }
                }
                else
                {                  
                    if(isset($_REQUEST['ID']))
                    {
                        $query = "SELECT * FROM ds_hocvien WHERE Mahv= '".$_REQUEST['ID']. "'" ;                        
                        $rowCollection = mysqli_query($connect,$query);
                        while($row = mysqli_fetch_array($rowCollection))
                        {
                            $tenhocvien = $row["Tenhv"];
                            $gioitinh = $row["Gioitinh"];
                            $ngaysinh = $row["Ngaysinh"];
                            $quequan = $row["Quequan"];
							$diemlt = $row["Diemlythuyet"];
							$diemth = $row["Diemthuchanh"];
							
                        }
                    }                  
                }
            }
            else
            {      
                die("Khong ket noi duoc database: ". mysqli_error());
            }
 
            mysqli_close($connect);
        }      
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
</head>
<body>
<form name="form1" method="post" action="edit.php?ID=<?= $_REQUEST['ID'] ?>" >
    Mã học viên: <input name="txtMahocvien" type="text" readonly="true" value="<?= $_REQUEST['ID'] ?>" > <hr>
    Tên học viên: <input name="txtTenhocvien" type="text" value="<?= $tenhocvien ?>" ><hr>
    Giới tính: <input name="txtGioitinh" type="text" value="<?= $gioitinh ?>" ><hr>
    Ngày sinh: <input name="txtNgaysinh" type="text" value="<?= $ngaysinh ?>" ><hr>
    Quê quán: <input name="txtQuequan" type="text" value="<?= $quequan ?>" ><hr>
	Điểm lý thuyết: <input name="txtDiemlt" type="number" min="0" max="10" value="<?= $diemlt ?>" ><hr>
	Điểm thực hành: <input name="txtDiemth" type="number" min="0" max="10" value="<?= $diemth ?>" ><hr>
    <input type="submit" name="Submit" value="Cập nhật">   
</form>
</body>
</html>