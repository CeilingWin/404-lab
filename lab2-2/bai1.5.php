<!DOCTYPE html>
<html>
    <head>
        <title>Date Time Processsing Excercise</title>
    </head>
    
    <body>
        <font size="5" color="blue"> Date Time Processing</font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "GET">
            <table>
                <tr>
                    <td>Your name: </td>
                    <td><input type="text" size="10" maxlength="15" name="name"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td><select name="date">
                        <option value="">select</option>
                            <?php 
                                for ($i=1; $i<=31; $i++) {
                                    print ("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="month">
                                <option value="">select</option>
                            <?php 
                                for ($i=1; $i<=12; $i++) {
                                  print ("<option>$i</option>");
                                }
                            
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="year">
                                <option value="">select</option>
                            <?php 
                                $currentYear = date("Y");
                                for ($i=2000; $i<=$currentYear; $i++) {
                                    print ("<option>$i</option>");
                                }
                            
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td>
                        <select name="hour">
                            <option value = "">select</option>
                        <?php
                            for($i=1;$i<=24;$i++) {
                                print("<option>$i</option>");
                            }
                        ?>
                        </select>
                    </td>
                    <td>
                        <select name="minute">
                            <option value = "">select</option>
                        <?php
                            for($i=1;$i<=60;$i++) {
                                print("<option>$i</option>");
                            }
                        ?>
                        </select>
                    </td>
                    <td>
                        <select name="second">
                            <option value = "">select</option>
                        <?php
                            for($i=1;$i<=60;$i++) {
                                print("<option>$i</option>");
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><INPUT TYPE="SUBMIT" VALUE="Submit"></td>
                    <td align="left"> <INPUT TYPE="RESET" VALUE="Reset"></td>
                </tr>
            </table>

            <?php
                if(array_key_exists("name", $_GET)) {
                    $name = $_GET["name"];
                    $day = $_GET["date"];
                    $month = $_GET["month"];
                    $year = $_GET["year"];
                    $hour = $_GET["hour"];
                    $minute = $_GET["minute"];
                    $seconds = $_GET["second"];
                    print("Hi $name!</br>");
                    print("You have choose to have an appointment on $hour:$minute:$seconds, $day/$month/$year</br>");
                    print("More information</br>");
                    if($hour >12) 
                        print ("In 12 hours, the time and date is $hour12:$minute:$seconds PM, $day/$month/$year</br>");
                    else 
                        print ("In 12 hours, the time and date is $hour:$minute:$seconds AM, $day/$month/$year</br>");
                    
                        $check = NULL;
                        if($year%100==0) {
                            if($year%400==0)
                                $check=TRUE;
                            else
                                $check=FALSE;
                        }
                        else if($year%4==0)
                            $check=TRUE;
                        else
                            $check=FALSE;
                        
                        $thirtyone = array(1,3,5,7,8,10,12);
                        $thirty = array(4,6,9,11);
                        if (in_array($month, $thirtyone))
                            print("This month has 31 days!</br");
                        elseif (in_array($month, $thirty))
                            print("This month has 30 days!</br");
                        elseif ($check==TRUE)
                            print ("This month has 29 days!</br");
                        else
                            print ("This month has 28 days!</br");
                }
            ?>
        </form>
    </body>
</html>