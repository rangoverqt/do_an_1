<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <?php       
 
        $connect = mysqli_connect('localhost', 'root','','diemhv'); //Ket noi den MySQL
//Hien thi unicode
 
        if($connect)
        {
			$sql = "SELECT * FROM ds_hocvien";
            $query = mysqli_query($connect,$sql);
        }
        else
        {      
            die("Khong ket noi duoc database: ". mysqli_error());
        }
    ?>  
    <table border="1">
        <tr>           
            <th>Ma nha vien</th>
            <th>Ten nhan vien</th>
            <th>Dien thoai</th>
            <th>Email</th>
            <th>Dia chi</th>
            <th>Action</th>
        </tr>
        <?php           
            while($row = mysqli_fetch_array($query))
            {
                $chuoi = "<tr>";
                $chuoi .= "<td>".$row['Mahv']."</td>";
                $chuoi .= "<td>".$row['Tenhv']."</td>";
                $chuoi .= "<td>".$row['Gioitinh']."</td>";
                $chuoi .= "<td>".$row['Ngaysinh']."</td>";
                $chuoi .= "<td>".$row['Quequan']."</td>";
                $chuoi .= "<td><a href='edit.php?ID=". $row["Mahv"] . "'> Edit </a></td>";
                $chuoi .= "</tr>";
                echo $chuoi;
            }
        ?>
         
    </table>
</body>
</html>
<?php
    mysqli_close($connect);
?>