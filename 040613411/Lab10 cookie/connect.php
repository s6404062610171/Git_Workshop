<?php
try {
	$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
	echo "สำเร็จ";
} catch (PDOException $e) {
	echo "เกิดข้อผิดพลาด : ".$e->getMessage();
}
?>