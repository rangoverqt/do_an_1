<?php

$data = array();

function add_diem($diemlt, $diemth)

{

global $data;

$data[]=array('Diemlythuyet'=>$diemlt,'Diemthuchanh'=>$diemth);

}

if( $_FILES['file']['tmp_name'])

{

$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );

$rows = $dom->getElementsByTagName('Row');

$first_row = true;

foreach ($rows as $row)

{

if( !$first_row)

{

$diemlt = "";

$diemth = "";

$index = 1;

$cells = $row->getElementsByTagName( 'Cell' );

foreach( $cells as $cell )

{

$ind = $cell->getAttribute( 'Index' );

if ( $ind != null ) $index = $ind;

if ( $index == 1 ) $diemlt = $cell->nodeValue;

if ( $index == 2 ) $diemth = $cell->nodeValue;

$index += 1;

}

add_diem( $diemlt, $diemth);

}

$first_row = false;

}

}

?>

<?php 

foreach($data as $row)

{

//luu y : du lieu 1 dong trong file xml neu rong o 1 o^ nao do, thi se khong import dong do vao db

require_once('../Conn_DB.php');

//neu tieude trong file excel rỗng thì chèn vào database 1 khoảng trắng(tùy ý),tuong tu voi tacgia

$a1 =$row['Diemlythuyet'];

if($a1=='') $a1=0;

$a2 =$row['Diemthuchanh'];

if($a2=='') $a2=0;


mysql_query("Insert into diem_thcb(Diemlythuyet,Diemthuchanh) values ('$a1','$a2')") or die(mysql_error());

}

echo "Import thành công !";
?>

