<?php
include("connect.php");

//เช็คจากตาราง User
$sql = "SELECT * FROM stwUser WHERE stwUserName='".$_POST['UserName']."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	echo "true,<span style='color:green'>คนหล่อ</span>";
}
else{ 
	echo "false,<span style='color:red'>ไอ้เด็กเหี้ย</span>";
}
?>


