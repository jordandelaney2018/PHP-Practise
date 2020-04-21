<?php
$num_oranges =4; // Set varibles at top of page
$num_bananas =36;

$request = "Coke";

$age = 12;

 ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <?php
  //If statment
    if(($num_oranges > 25) && ($num_bananas > 30)){ // Basic if statment
        echo "25% discount<br />";
    }elseif (($num_oranges > 30) || ($num_bananas > 35)) { // elseif continues if statement, using or operator
      echo "15% discount<br />";
    }elseif ((!($num_oranges < 5)) || (!($num_bananas < 5))) {
      echo "5% discount<br />";
    } else{                                             // else is final condition if rest are not met
      echo "no discount<br />";
    }
   ?>

   <?php
    // Switch Statment
    switch($request){ // working off the varible at the top of page
      case "Coke": // if it is this do the code below
       echo "Here is a coke <br />";
       break; // stop checking and end the statment
      case "Pepsi":
        echo "Here is a Pepsi <br />";
       break;
      default: // if none of the requiermtns are met run default option
        echo "Here is a water <br />";
       break;
    }

    switch(true){ // working off a condtion, so will check each option till it finds one that is true
      case ($age < 5): // if age is less then 5
       echo "Stay Home <br />";
       break; // stop checking and end the statment
      case ($age == 5):
        echo "nursery school <br />";
       break;
      case in_array($age, range(6,17)): // we want to check a few different numbers, so checking in an array between 6-17
        $grade = $age - 5; // new variable
         echo "Go to grade $grade<br />";
       break;
      default: // if none of the requiermtns are met run default option
        echo "Go to College  <br />";
       break;
    }
   ?>
   <?php
   //turturary? statments
   $can_vote = ($age >= 18) ? "Can Vote" : "Cant Vote"; // setting a varible based on another varible, in this example if age is greater than or equal too 18 set true (left option) otherwise its false (right option)
    echo "Vote? : $can_vote<br />";
    ?>

</body>
</html>
