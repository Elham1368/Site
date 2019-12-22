<!DOCTYPE html>
<html>
<body>
    <h1>
     My first php page
    </h1>
    <?php
      function mytest(){
          static $x = 0;
          echo $x;
          $x++;
      }
      mytest();
      mytest();
      mytest();
    ?>
</body>
</html>


