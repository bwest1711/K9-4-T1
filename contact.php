<!DOCTYPE html>
<html>
    <head>
        <title>K94T1</title>
        <?php 
            include('includes/head.php');
            $connect = mysql_connect('localhost', 'root', 'root');
            mysql_select_db('k9_4_t1');
        ?>
    </head>
    <body>
        <div id ="container">
        <?php include('includes/header.php') ?>
        <form action="process.php" method="post">
            First Name: <input type="text" name="first_name"> <br> <br>
            Last Name: <input type="text" name="last_name"> <br> <br>
            Email Address: <input type="email" name="email"> <br> <br>
            Town: <input type="text" name="town"> <br> <br>
            State: <input type="text" name="state"> <br> <br>
            <input type="submit" name="submit" value="Submit!">
        </form>
            </div>
    </body>
</html>