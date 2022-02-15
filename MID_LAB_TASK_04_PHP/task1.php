<html>
     <head>
            <title>task 1</title>
      </head>
     <body>
         
    <?php
    $length = 16;
    $width = 16;
    $area = $length*$width;
    $parameter = 2*($length+$width);
    
	if ($length == $width)
     {
        echo "<p> shape is Rectangle </p>";
     }
      ?>

      <?php
     echo "<p> Area of a Rectangle: $area</p>";
	 echo "<p> Parameter of Pectangle:  $parameter</p>";
     ?>
</body>
</html>