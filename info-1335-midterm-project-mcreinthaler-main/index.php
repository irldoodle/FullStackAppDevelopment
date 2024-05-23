<?php
if (!isset($g1)){$g1 = 0.0;}
if (!isset($g2)){$g2 = 0.0;}
if (!isset($g3)){$g3 = 0.0;}
if (!isset($g4)){$g4 = 0.0;}
if (!isset($g5)){$g5 = 0.0;}
if (!isset($g6)){$g6 = 0.0;}
if (!isset($gd1)){$gd1 = 100.0;}
if (!isset($gd2)){$gd2 = 100.0;}
if (!isset($gd3)){$gd3 = 100.0;}
if (!isset($gd4)){$gd4 = 100.0;}
if (!isset($gd5)){$gd5 = 100.0;}
if (!isset($gd6)){$gd6 = 100.0;}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Final Grade Calculator</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <main>
    <h1>Final Grade Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php }?>
    <form action="gradeForm.php" method="post">
        <div id="grades">
            <label for="g1">Assignment 1: </label>
            <input type="text" name="g1" value="<?php echo $g1;?>"size="5"/> /
            <input type="text"name="gd1" value="<?php echo $gd1;?>"size="5"/><br>
            <label for="g2">Assignment 2: </label>
            <input type="text" name="g2"value="<?php echo $g2;?>"size="5"/> /
            <input type="text"name="gd2" value="<?php echo $gd2;?>"size="5"/><br>
            <label for="g3">Assignment 3: </label>
            <input type="text" name="g3"value="<?php echo $g3;?>"size="5"/> /
            <input type="text"name="gd3" value="<?php echo $gd3;?>"size="5"/><br>
            <label for="g4">Assignment 4: </label>
            <input type="text" name="g4"value="<?php echo $g4;?>"size="5"/> /
            <input type="text"name="gd4" value="<?php echo $gd4;?>"size="5"/><br>
            <label for="g5">Assignment 5: </label>
            <input type="text" name="g5"value="<?php echo $g5;?>"size="5"/> /
            <input type="text"name="gd5" value="<?php echo $gd5;?>"size="5"/><br>
            <label for="g6">Assignment 6: </label>
            <input type="text" name="g6"value="<?php echo $g6;?>"size="5"/> /
            <input type="text"name="gd6" value="<?php echo $gd6;?>"size="5"/><br>
        </div>
    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Submit Grades"/><br>
    </div>
    </form>
    </main>
    </body>
    </html>