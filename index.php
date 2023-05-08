<?php
$servername = "sh-cynosdbmysql-grp-3aetzuam.sql.tencentcdb.com:26313";
$username = "xrmt";
$password = "Xrmt0417";
$dbname = "Dic";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT * FROM `bate1` LIMIT 50 OFFSET 0";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "ip" . $row["ip"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
