<html>

<body>
    <?php
    define("FORM_NAME", "form.html");
    define("HOBBIES", array(
        0 => "Watching TV",
        1 => "Reading Book",
        2 => "Fishing"
    ));

    function isCorrectInput($name, $class, $university)
    {
        return $name && $class && $university;
    }

    function showInput($input)
    {
        echo "Hello {$input["name"]}, you are studying at {$input["class"]}, {$input["uni"]}<br>";
        echo "Your hobbies are:<br>";
        $index = 1;
        $id = 0;
        foreach ($input["hobbies"] as $hobby) {
            if ($hobby == "on") {
                $str = HOBBIES[$id];
                echo "{$index} :  {$str}<br>";
                $index += 1;
            }
            $id += 1;
        }
        $formPath = $_SERVER["REQUEST_URI"];
        $formPath = str_replace("2.9.php",FORM_NAME,$formPath);
        echo "<a href=\"{$formPath}\">Back</a>";
    }

    function getInput()
    {
        $fi = [];
        $fi["name"] = $_POST["name"];
        $fi["class"] = $_POST["class"];
        $fi["uni"] = $_POST["uni"];
        $fi["hobbies"] = array(
            0 => $_POST["h0"],
            1 => $_POST["h1"],
            2 => $_POST["h2"]
        );
        return $fi;
    }


    // MAIN
    $fi = getInput();
    if (isCorrectInput($fi["name"], $fi["class"], $fi["uni"])) {
        showInput($fi);
    } else {
        echo '<h3 color="#FF0000">You need enter name, class and university</h3>';
        include "form.html";
    }
    ?>
</body>

</html>