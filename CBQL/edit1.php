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
<div id="menu"> <a id="hinh" href="#"><img src="../images/webdev_0001s_0003_home.png" alt="home"/></a>
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
  <h2>Tìm kiếm thông tin:</h2>
	<input type="text" name="timkiem" id="timkiem"/>
  <ul>
    <li><a href="#">Xếp lớp học</a></li>
    <li><a href="#">Xếp lớp thi</a></li>
    <li><a href="#">Gửi yêu cầu</a></li>
  </ul>
</div>
<div id="content">
  <h1>Chỉnh sửa thông tin học viên</h1>
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
	<div id="chinhsua">
	<form name="form1" method="post" action="edit.php?ID=<?= $_REQUEST['ID'] ?>" >
    <h2>Mã học viên:</h2> <input id="nhap" name="txtMahocvien" type="text" readonly="true" value="<?= $_REQUEST['ID'] ?>" > <hr>
    <h2>Tên học viên:</h2> <input id="nhap" name="txtTenhocvien" type="text" value="<?= $tenhocvien ?>" ><hr>
    <h2>Giới tính:</h2> <input id="nhap" name="txtGioitinh" type="text" value="<?= $gioitinh ?>" ><hr>
    <h2>Ngày sinh:</h2> <input id="nhap" name="txtNgaysinh" type="text" value="<?= $ngaysinh ?>" ><hr>
    <h2>Quê quán:</h2> <input id="nhap" name="txtQuequan" type="text" value="<?= $quequan ?>" ><hr>
	<h2>Điểm lý thuyết:</h2> <input id="nhap" name="txtDiemlt" type="number" min="0" max="10" value="<?= $diemlt ?>" ><hr>
	<h2>Điểm thực hành:</h2> <input id="nhap" name="txtDiemth" type="number" min="0" max="10" value="<?= $diemth ?>" ><hr>
    <input id="capnhat" type="submit" name="Submit" value="Cập nhật">   
</form>
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
