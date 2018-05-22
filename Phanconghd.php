<?php
require("Conn_DB.php");
session_start();
ob_start();
$conn = mysqli_connect('localhost','root','','tthoidong') or die ('Không thể kết nối');
mysqli_set_charset($conn,'utf8');
if (isset($_POST["luupc"]))
{
	if (empty($_POST['chutich']) == FALSE && empty($_POST['thuky']) == FALSE && empty($_POST['uyvien1']) == FALSE && empty($_POST['uyvien2']) == FALSE && empty($_POST['uyvien3']) == FALSE)
	{
	$chutich = $_POST['chutich'];
	$thuky = $_POST['thuky'];
	$uyvien1 = $_POST['uyvien1'];
	$uyvien2 = $_POST['uyvien2'];
	$uyvien3 = $_POST['uyvien3'];
	$nk = $_POST['nhiemky'];
$sql1 = "INSERT INTO hoidong (nhiemky,chutich,thuky,uyvien1,uyvien2,uyvien3) VALUES ('$chutich','$thuky','$uyvien1','$uyvien2','$uyvien3','$nk') WHERE nhiemky=$nk";
$query=mysqli_query($conn,$sql1);
if(!$query)
	{
		die('không thể cập nhật: ' . mysqli_error());
	}
		echo("Lưu dữ liệu thành công\n");
		mysqli_close($conn);
}
	else
	{
		//echo ("<script language='javascript'>alert('Thông tin không được để trống');");
		//echo("location.href='';</script>");
		echo("Thông tin không được để trống");
	}
}
else
{
?>
<html>
	<meta charset="utf-8">
	<h1>Phân công ban đề thi</h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
    <table>
		<tr>
			<th>Nhiệm kỳ</th>
			<td><select name="nk">
		<option <?php if(isset($_POST['nk']) == '2017') echo "selected=\"selected)\"";?> value=2017>2017</option>
		<option <?php if(isset($_POST['nk']) == '2018') echo "selected=\"selected)\"";?> value=2018>2018</option>
		<option <?php if(isset($_POST['nk']) == '2019') echo "selected=\"selected)\"";?> value=2019>2019</option>
	</select></td>
		</tr>
		<tr>
			<td><button name="nhapmoi" id="nhapmoi">Nhập mới</button></td>
			<td><button name="chonlai" id="chonlai">Chọn lại</button></td>
		</tr>
        <tr>
            <th>Chủ tịch:</th>
			<?php
	if(isset($_POST['nhapmoi']))
	{
		?>
			<td><input name="chutich" formmethod="post" lang="vi"></td>
			<?php
	}
 	elseif(isset($_POST['chonlai']))
	{
		?>
			<td><select name="chutich">
				<option value="Iosif Vissarionovich Stalin"><?php $sql="select chutich from hoidong where nhiemky = 2017";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
					echo($row['chutich']);
					}?></option>
				</select></td>
			<?php
	}
	?>
        </tr>

        <tr>
			<th>Thư ký:</th>
			<?php
	if(isset($_POST['nhapmoi']))
	{
		?>
			<td><input name="thuky" formmethod="post" lang="vi"></td>
			<?php
	}
 	elseif(isset($_POST['chonlai']))
	{
		?>
			<td><select name="thuky">
				<option value="Alex Mason"><?php $sql="select thuky from hoidong where nhiemky = 2017";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
					echo($row['thuky']);
					}?></option>
				</select></td>
			<?php
	}
	?>
        </tr>

        <tr>
            <th>Ủy viên:</th>
			<?php
 if(isset($_POST['nhapmoi']))
 {
 ?>
            <td><input type="text" lang="vi" name="uyvien1" value=""></td>
			<?php
 }
 elseif(isset($_POST['chonlai']))
 {
 ?>
	<td><select>
		<option value="Nguyễn Văn C">Nguyễn Văn C</option>
		<option value="Nguyễn Văn D">Nguyễn Văn D</option>
		<option value="Nguyễn Văn F">Nguyễn Văn F</option>
		</select></td>
			<?php
 }
 ?>
						<td><button name="themuv" id="themuv" formmethod="post">Thêm</button></td>
        </tr>
    </table>
    <button type="submit" name="luupc">Lưu dữ liệu</button>
</form>
	<form action="xembangpchd.php" method="post">
		<button type="submit">Xem danh sách ban</button>
	</form>
</html>
<?php
}
if(isset($_POST['themuv']))
{
	$nk1=$_POST['nhiemky'];
	$sql2 = "insert into uyvien1 where nhiemky = $nk";
	$result1 = mysqli_query($conn,$sql2);
	echo('Thêm ủy viên thành công');
}
?>
