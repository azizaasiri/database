<?php
// تأسيس اتصال قاعدة البيانات
$servername = "localhost";
$username = "rooot" ;
$password = "root";
$dbname = "saave";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli(localhost,rooot, root, saave);

// التحقق من اتصال قاعدة البيانات
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استعلام SQL لاسترداد القيمة المخزنة
$sql = "SELECT GET FROM saave";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // استخراج القيمة من النتائج وعرضها
    $row = $result->fetch_assoc();
    echo "<h1>القيمة المخزنة هي: " . $row['GET'] . "</h1>";
} else {
    echo "<h1>لا توجد قيم مخزنة في قاعدة البيانات</h1>";
}

// إغلاق اتصال قاعدة البيانات
$conn->close();
?>
