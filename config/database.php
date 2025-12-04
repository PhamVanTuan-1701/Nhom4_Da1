<?php
class Database {
private static $instance = null;

public static function connect(){
if(self::$instance === null){
try {
$dsn = "mysql:host=localhost;dbname=tourdulich;charset=utf8";
self::$instance = new PDO($dsn, "root", "");
self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Lỗi kết nối database: " . $e->getMessage() . "\n\nVui lòng kiểm tra:\n- MySQL server đã chạy chưa?\n- Database 'tourdulich' đã tạo chưa?");
}
}
return self::$instance;
}
}
?>