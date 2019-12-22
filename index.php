<!DOCTYPE html>
<html>
<body>
    <h1>
     My Birthday
    </h1>
    <?php
    $name = "Elham";
    $lastName = "Hosseini";
    $age = 30;
    function birthday(){
        //global $age;
        //$age ++;
        $GLOBALS['age']++;
    }
    birthday();
    echo "HappyBirthday".$name.$lastName.$age;

    ?>
</body>
</html>


