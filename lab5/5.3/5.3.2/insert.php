<html>
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
        } 

        $productID = $_POST["productID"];
        $productDesc = $_POST["productDesc"];
        $weight = $_POST["weight"];
        $cost = $_POST["cost"];
        $num = $_POST["num"];
        $sqlCmd = "INSERT INTO $table_name (ProductID, Product_desc, Cost, Weight, Numb)
        VALUES ($productID, '$productDesc', $weight, $cost, $num);";
        // echo("$sqlCmd");
        $result = mysqli_query($connect,$sqlCmd);
        if ($result){
            echo("<font color='green'> Insert success productID $productID to table $table_name</font><br>");
            include "insert.html";
        } else {
            echo("<font color='red'> Insert Fail</font>");
            include "insert.html";
        }
        ?>
    </body>
</html>