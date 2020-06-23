<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'sato';
$password = 'tktk0622';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];

    $sql = "insert into user values(id,name,age)";
    $stat = $dbh->prepare($sql)
    $params =(':id' =>$id, ':name' =>$name, ':age' =>$age)
    $result = $dbh->query($sql);

    header('./Location: index.php?fg=1')
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    
    exit();
}
?>