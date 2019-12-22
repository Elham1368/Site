<!DOCTYPE html>
<html>
<body>
    <h1>
     My first php page
    </h1>
    <?php
        $name = "khahani";
        echo "Hello world!".$name;
        echo "<br>";
        echo "Hello world! $name";
        echo "<br>";
        echo $name;
        $second = 4;
        echo "<br>";
        $first = 15;
        echo "<br>";
        echo $first + $second;
        function write(){
            $localvariable = 5;
            echo $localvariable;
        }
        write();

    ?>
</body>
</html>


