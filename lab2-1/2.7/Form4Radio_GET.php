<html>
    <head>
        <title>Receiving Input</title>
    </head>
    <body>
        <font size="5">Thanh you: Got Your Input.</font><!-- comment -->
        <?php
        $email =$_GET["email"];
        $contact =$_GET["contact"];
        print("<br>Your email address is $email");
        print("<br>Contact preference is $contact");
        ?>
    </body>
</html>