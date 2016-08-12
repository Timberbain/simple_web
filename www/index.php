<html>
    <head>
    </head>
    <body>
        Hello world!
        <br/>
        <?php 
            phpinfo();
            $connection = mysqli_connect("mysql", "admin", "password", "mybase");
            if(!$connection){
                echo "Unable to connect to database.";
            }
        ?>
    </body>
</html>