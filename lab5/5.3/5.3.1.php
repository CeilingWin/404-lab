<html>

<head>
    <title>Create Table</title>
</head>

<body>

    <?php
    $server = 'localhost:8889';
    $user = 'root';
    $pass = 'root';
    $db_port = 8889;
    $my_db = 'my_database';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass, $my_db);
    if (!$connect) {
        die("Cannot connect to $server using $user");
    } else {
        $sql_cmd = "CREATE TABLE $table_name(ProductID INT UNSIGNED NOT NULL
                        AUTO_INCREMENT PRIMARY KEY,
                        Product_desc VARCHAR(50),
                        Cost INT,
                        Weight INT,
                        Numb INT)";

        if (mysqli_query($connect, $sql_cmd)) {
            print '<font size="4" color="blue" >Created Table';
            print "<i>$table_name</i> in database<i>$my_db</i><br></font>";
            print "<br>SQLcmd=$sql_cmd";
        } else {
            die("Table Create Creation Failed SQLcmd=$SQLcmd");
        }
        mysqli_close($connect);
    }
    ?></body>

</html>