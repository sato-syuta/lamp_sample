<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'sato';
$password = 'tktk0622';
try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from user";
    $result = $dbh->query($sql);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>lamp sample page</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="containar-fluir"></div>
           <div class="navbar-header">
                <a href="" class="navbar-brand">LAMP SAMPLE PAGE</a>
           </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="displey-4">DB Maneger</h1>
            <p class="lead">LAMP環境を構築し、DBを操作するアプリケーションです。<br>
                デザインはBootstrapを使用してます。
            </p>
        </div>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a href="#tab1" class="nav-link" data-toggle="tab" >Select</a></li>
            <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Insert</a></li>
            <li class="nav-item"><a href="#tab3" class="nav-link" data-toggle="tab">Update</a></li>
            <li class="nav-item"><a href="#tab4" class="nav-link" data-toggle="tab">Delete</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div id="tab1" class="tab_panel active">
            <table class="table table-hover mt-2">
                <thead class="bg-primary">
                    <caption>Show User Table</caption>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $value) { 
                    echo"<tr>
                        echo "<th> $value [id] </th>"
                        echo "<td>echo $value [name] </td>"
                        echo "<td>echo $value []</td>"
                    </tr>"
                    ?>
                </tbody>
            </table>
        </div>
        <div id="tab2" class="tap_panel active"><h1>sample2</h1></div>
        <div id="tab3" class="tap_panel active"><h1>sample3</h1></div>
        <div id="tab4" class="tap_panel active"><h1>sample4</h1></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>