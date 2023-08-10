<?php
// استلام النص من الطلب
$text = $_POST['text'];

// الاتصال بقاعدة البيانات وحفظ النص (استخدم التعليمات اللازمة لاتصال قاعدة البيانات الخاصة بك)
// فمثلا:
$servername = "localhost";
$username = "rooot";
$password = "root";
$dbname = "voice";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "rooot", "root", "voice");

// التحقق من وجود أي أخطاء في الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// تنفيذ استعلام لحفظ النص في قاعدة البيانات
$sql = "INSERT INTO texts (text) VALUES ('$text')";

if ($conn->query($sql) === TRUE) {
    echo "تم حفظ النص في قاعدة البيانات بنجاح!";
} else {
    echo "حدث خطأ أثناء حفظ النص في قاعدة البيانات: " . $conn->error;
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
