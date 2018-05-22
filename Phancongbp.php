<?php
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
$sql = "INSERT INTO banphach (chutich,thuky,uyvien1,uyvien2,uyvien3) VALUES ('$chutich','$thuky','$uyvien1','$uyvien2','$uyvien3')";
$query=mysqli_query($conn,$sql);
if(!$query)
	{
		die('không thể cập nhật: ' . mysqli_error());
	}
		echo("Lưu dữ liệu thành công\n");
		mysqli_close($conn);
}
	else
	{
		echo("Thông tin không được để trống");
	}
}
else
{
?>
<html>
	<meta charset="utf-8">
	<h1>Phân công ban làm phách</h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
    <table>
		<tr>
			<th>Chọn nhiệm kỳ:</th>
			<td><select name="nhiemky">
				<option>Chọn</option>
				<option value="1718">2017-2018</option>
				<option value="1819">2018-2019</option>
				</select></td>
		</tr>
        <tr>
            <th>Chủ tịch:</th>
            <td><input type="text" lang="vi" name="chutich" value=""></td>
        </tr>

        <tr>
            <th>Thư ký:</th>
            <td><input type="text" lang="vi" name="thuky" value=""></td>
        </tr>

        <tr>
            <th>Ủy viên:</th>
            <td><input type="text" lang="vi" name="uyvien1" value=""></td>
			<td><input type="text" lang="vi" name="uyvien2" value=""></td>
			<td><input type="text" lang="vi" name="uyvien3" value=""></td>
        </tr>
    </table>
    <button type="submit" name="luupc">Lưu dữ liệu</button>
</form>
	<form action="xembangpchd.php" method="post">
		<button type="button">Xem danh sách ban</button>
	</form>
</html>
<?php
}
?>