<!DOCTYPE html>
<html>
<head>
	<title>Exercise4</title>
</head>
<body>
    <?php
        $name = "Max and Anja";
        echo "<h3>FOR LOOP</h3>";
        for ($i=1; $i<51; $i++) {
            echo "$i $name";
            echo "<br>";
        };

        echo "<h3>WHILE LOOP</h3>";
        $i = 0;
        while($i < 50)
        {   
            $i++;
            echo "$i $name";
            echo "<br>";
        };
      ?>

    <?php
         $name = "Max and Anja";
         $i = 0;
         echo "<h3>DO...WHILE LOOP</h3>";
         do
         {$i++;
         echo "$i $name";
         echo "<br>";} 
         while ($i < 50);
        
    ?>

</body>
</html>
