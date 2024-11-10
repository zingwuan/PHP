<?php
	//lây dữ liệu từ client gửi lên
	$code = $_POST['code'];
	$name = $_POST['name'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$folder = "images/";
	$fileName = basename($_FILES['image']['name']);
	$path = $folder.$fileName;
	echo $path;
	//mở file ghi bổ sung
	$fh = fopen("hang.txt","a");
	fputs($fh,$code."\t".$name."\t".$quantity."\t".$price."\t".$fileName."\n");
	fclose($fh);
	//lưu ảnh
	//kiểm tra file ảnh có chưa
	if(!file_exists($path)){//file chưa có
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
	}	
	header("Location:display.php");



?>