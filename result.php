<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <?php 

        //Assign the output and the calculation into new variables
        $r1 = $_POST['display'];
        $r2 = $_POST['dis_cal']
    
    ?>
    
    <div class="wrapper">
        <form name="resl">
            <h1 style="font-weight: bold">RESULT</h1>
            
            <!--Display the final result-->
            <input type = "text" name = "r2" value = "<?php echo $r2; ?>" class = "text1_styling">
            <br><br>
            <?php echo " = "; ?>
            <input type = "text" name = "r1" value = "<?php echo $r1; ?>" class = "text2_styling">
        </form>
    </div>

</body>
</html>