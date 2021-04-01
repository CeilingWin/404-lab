<!DOCTYPE html>
<html>
    <head><title>Conditonal Test</title></head>
    <body>
        <?php
        $first = $_GET["firstName"]; $middle = $_GET["middleName"]; $last = $_GET("lastName");
        print ("Hi $first! Your full name is $last $middle $first. <br></br>");
        if ($first == $last) {
            print ("$first and $last are equal");
        }
        if ($first < $last) {
            print ("$first is less than $last");
        }
        if ($first > $last) {
            print ("$first is greater than $last");
        }
        print("<br></br>");

        $gradel = $_GET ["gradel1"]; $grade2 = $_GET["grade2"];
        $final = (2 * $gradel + 3 *$grade2)/5;
        if($final > 89) {
            printf ("Your final grade is %.lf. You got an A. Congaratulation", $final);
            $rate = "A";
        } elseif ($final > 79) {
            printf ("Your final grade is %.lf. You got a B.", $final);
            $rate = "B";
        } elseif ($final > 69) {
            printf ("Your final grade is %.lf. Yout got a C.", $final);
            $rate = "C";
        } elseif ($final > 59) {
            printf ("Your final grade is %.lf. You got a D.", $final);
            $rate = "D";
        } elseif ($final > 39) {
            printf ("Your final grade is %.lf. You got a E." $final);
            $rate = "E";
        } elseif ($final >= 0) {
            printf ("Your final grade is %.lf. You got a F.", $final);
            $rate = "F";
        } else {
            printf ("Illegal grade less than 0. Final grade = %.lf", $final);
            $rate = "Illegal";
        }

        print("<br></br>");
        switch($rate) {
            case "A": print("Excellent!"); break;
            case "B": print("Good!"); break;
            case "C": print("Not bad"); break;
            case "D": print("Normal"); break;
            case "E": print("Not good"); break;
            case "F": print("You have to try again!"); break;
            default: print("Illegal grade!");
        }
        ?>
    </body>
</html>