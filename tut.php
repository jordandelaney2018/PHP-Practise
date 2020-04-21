<?php
$f_name = "jordan"; // varibles declared with $, data type auto identified
$basic_int = 2;
$basic_float =1.5;
$basic_bool = true;

$basic_array = array('one'=>'i am first in the array', 'two'=>'i am second in the array');

$basic_null = null;

define('constant', 22); // Defining a constant

 ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Tutoiral </title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <p>
     Name : <?php echo $f_name . ' ' . $basic_float; ?> </p>  <!-- Basic way of echoing and calling varibles in php -->

  </p>
    <form action="tut.php" method="get"> <!-- action is this form because we wanna do whats in this when we submit, using get method -->
      <label>Your State:</label>
        <input type="text" name="state" /> <br />
      <label>Number 1:</label>
        <input type="text" name="num-1" /> <br />
        <label>Number 2:</label>
          <input type="text" name="num-2" /> <br />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if(isset($_GET) && array_key_exists('state', $_GET)){ // if get has been set and we have an array key
      $state = $_GET['state'];  // put the infomation from the input labeld 'state' into a varible called state
        if(isset($state) && !empty($state)){ // check that the varible has somthing in
          echo 'You live in ' . $state . '<br />'; // basic way to echo
          echo "$f_name lives in $state<br />"; // using "" instead of '' lets you imbed varibles directly

        }
        if(count($_GET) >= 3){ // if we have 3 things in the array
          $num_1 = $_GET['num-1']; // set two varibles with the numbers from the forms
          $num_2 = $_GET['num-2'];

          echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br />"; // different ways to do calculations
          echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br />";
          echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br />";
          echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br />";
          echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br />";

          echo "Increment $num_1 = " . ($num_1++) . "$num_1 <br />"; // Basic Incrementation, first time we print the number it has not incremented yet
          echo "Decrement $num_1 = " . ($num_1--) . "<br />"; // Basic Incrementation

        }
    }
    ?>
</body>
</html>
