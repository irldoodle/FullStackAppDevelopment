<?php
    $g1 = filter_input(INPUT_POST, 'g1', FILTER_VALIDATE_FLOAT);
    $g2 = filter_input(INPUT_POST, 'g2', FILTER_VALIDATE_FLOAT);
    $g3 = filter_input(INPUT_POST, 'g3', FILTER_VALIDATE_FLOAT);
    $g4 = filter_input(INPUT_POST, 'g4', FILTER_VALIDATE_FLOAT);
    $g5 = filter_input(INPUT_POST, 'g5', FILTER_VALIDATE_FLOAT);
    $g6 = filter_input(INPUT_POST, 'g6', FILTER_VALIDATE_FLOAT);
    $gd1 = filter_input(INPUT_POST, 'gd1', FILTER_VALIDATE_FLOAT);
    $gd2 = filter_input(INPUT_POST, 'gd2', FILTER_VALIDATE_FLOAT);
    $gd3 = filter_input(INPUT_POST, 'gd3', FILTER_VALIDATE_FLOAT);
    $gd4 = filter_input(INPUT_POST, 'gd4', FILTER_VALIDATE_FLOAT);
    $gd5 = filter_input(INPUT_POST, 'gd5', FILTER_VALIDATE_FLOAT);
    $gd6 = filter_input(INPUT_POST, 'gd6', FILTER_VALIDATE_FLOAT);

    if ($gd1 <= 0 || $gd2 <= 0 || $gd3 <= 0 || $gd4 <= 0 || $gd5 <= 0 || $gd6 <= 0){
      $error_message = "Divisor cannot be zero or negative. 
                        Please correct grades, then resubmit.";
      include('index.php');
      exit();
     }
   $GPA = 100*((($g1/$gd1) + ($g2/$gd2) + ($g3/$gd3) + 
               ($g4/$gd4) + ($g5/$gd5) + ($g6/$gd6)) / 6.0);
   $GPA = number_format($GPA, 2);
   if ( $g1 < 0.0 || $g2 < 0.0 || $g3 < 0.0 ||
         $g4 < 0.0 || $g5 < 0.0 || $g6 < 0.0){
        $error_message = "Values cannot be negative. Please correct grades, then resubmit.";
     }
   else {
        $error_message = 'Final Grade: '.$GPA;
     }
   if ($error_message != 'GPA: '.$GPA){
        include('index.php');
        exit();
     }//save space babyyyyyy using the error message as the output  
?>