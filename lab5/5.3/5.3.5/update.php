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

        function showStartForm($productID){
            global $connect, $table_name;
            $allProduct = mysqli_query($connect,"SELECT * FROM $table_name");
            if (mysqli_num_rows($allProduct) == 0){
                echo ("Products table is empty");
            } else {
                echo("Select product we just sold:<br>");
                echo("<form action='update.php' method='post'>");
                while($row = mysqli_fetch_array($allProduct)){
                    if ($row["ProductID"] == $productID || $productID == -1) {
                        echo("<input name='product' checked='checked' type='radio' value='".$row['ProductID']."' />".$row['Product_desc']."   ");
                        $productID = -2;
                    }
                    else 
                        echo("<input name='product' type='radio' value='".$row['ProductID']."' />".$row['Product_desc']."   ");
                }
            ?>
                <br>
                <input type="submit" name="submit" value="submit">
                </form>
                <table border="1">
                    <tr>
                        <td>Product ID</td>
                        <td>Product desc</td>
                        <td>Weight</td>
                        <td>Cost</td>
                        <td>Num</td>
                    </tr>
            <?php
                $allProduct = mysqli_query($connect,"SELECT * FROM $table_name");   
                while($row = mysqli_fetch_array($allProduct)){
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

        function sold($productId){
            global $connect, $table_name;
            $product = mysqli_query($connect,"SELECT Numb From $table_name WHERE ProductID = $productId");
            $product = mysqli_fetch_array($product);
            $quantity = $product["Numb"];
            if ($quantity>0){
                echo("sold $productId<br>");
                mysqli_query($connect,"UPDATE $table_name SET Numb = Numb - 1 WHERE ProductID = $productId");
            } else {
                echo("sell out!<br>");
            }
            showStartForm($productId);
        }

        // main
        if (!$connect) {
            die("Cannot connect to $server using $user");
        } else if (!$_POST['submit']){
            showStartForm(-1);
        } else {
            sold($_POST["product"]);
        }
    ?>
    </body>
</html>