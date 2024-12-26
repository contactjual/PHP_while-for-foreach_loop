<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday</title>
</head>
<body>
    
    <main>

    <!-- while loop ............................. -->

        <h3>Select Your Birthday Year</h3>
        <span>Year: </span>
        <select name="birthday" id="">

            <!-- ------------php start------------------------ -->
            <?php

            $year = 2000;
            while ($year <= 2050) {

            ?>
            <!-- ------------php end------------------------ -->

            <option value="<?php echo $year?>"><?php echo $year?></option>
            
            <!-- ------------php start------------------------ -->
            <?php

            $year++;

            }

            ?>
            <!-- ------------php end------------------------ -->

        </select>



    <!-- for loop ........................................ -->

        <ul>

            <!-- --------------php start---------------------------- -->
            <?php
            for ($count2 = 0; $count2 < 50; $count2++){
            ?>
            
            <!-- ----------------------php end---------------------------- -->

            <li>The number is: <?php echo $count2?></li>

            <!-- -------------------------php start---------------------- -->
            <?php
            }
            ?>
            <!-- ---------------------php end------------------------ -->


        </ul>
    </main>



    
    <!-- foreach loop........................... -->

    <?php
    
    $my_array = array("first", "second", "third", "fourth", "fift");
    $my_array2 = array("first"=> 1, "second"=> 2, "third"=> 3, "fourth"=> 4, "fift"=> 5);

    // only value return 
    foreach ($my_array as $x) {
        echo $x."<br>";
    }

    // key and value return
    foreach ($my_array2 as $x => $y) {
        echo $x .": ". $y."<br>";
    }
    
    
    
    ?>



</body>
</html>