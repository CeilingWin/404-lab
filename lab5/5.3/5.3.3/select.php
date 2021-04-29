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
        } else{
            $sqlCmd = "Select * from $table_name";

            $result = mysqli_query($connect,$sqlCmd);
            // mysqli_result
            if (!$result){
                die("Query fail");
            } else {
        ?>
            <table border="1">
                <tr>
                    <td>Product ID</td>
                    <td>Product desc</td>
                    <td>Weight</td>
                    <td>Cost</td>
                    <td>Num</td>
                </tr>
        <?php
                
                while($row = mysqli_fetch_array($result)){
                    echo("<tr>");
                    echo("<td>".$row['ProductID']."</td>");
                    echo("<td>".$row['Product_desc']."</td>");
                    echo("<td>".$row['Weight']."</td>");
                    echo("<td>".$row['Cost']."</td>");
                    echo("<td>".$row['Numb']."</td>");
                    echo("</tr>");
                }
                echo("</table>");
            }
        }
        ?>
    </body>
</html>