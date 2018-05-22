<?php
ob_start();
$conn = mysqli_connect('localhost','root','','tthoidong') or die ('Không thể kết nối');
mysqli_set_charset($conn,'utf8');
$sql="select * from hoidong";
$query=mysqli_query($conn,$sql);
?>
<html>
	<meta charset="utf-8">
	<form>
		<table border="1" cellpadding="5" cellspacing="0.5">
			<tr>
				<th>Chủ tịch</th>
				<th>Thư ký</th>
				<th>Ủy viên</th>
			</tr>
			<tr>
				<?php
				if (mysqli_num_rows($query)>0)
				{
					while($row=mysqli_fetch_array($query))
					{
				?>
				<td><?php echo($row["chutich"]) ?></td>
				<td><?php echo($row["thuky"]) ?></td>
				<td><?php echo($row["uyvien1"]);
						  echo($row["uyvien2"]);
						  echo($row["uyvien3"]);
					?></td>
				<?php
					}
				}
				?>
			</tr>
		</table>
	</form>
	<form></form>
</html>