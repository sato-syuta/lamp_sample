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

    $sql = "update  user set name=:name,age=:age where id = :id";
    $stat = $dbh->prepare($sql)
    $params =(':id' =>$id, ':name' =>$name, ':age' =>$age)
    $stat->execute($params);

    header('./Location: index.php?fg=1')
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=1')
    exit();
}
?>