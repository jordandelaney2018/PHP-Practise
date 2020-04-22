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
    function addNumbers($num_1=0,$num_2=0){ //basic function, two paramaters with deafult values of 0
      return $num_1 + $num_2;
    }
    printf("5 + 4 = %d<br />", addNumbers(5,4)); // calling fucntion

    function changeMe(&$change){ // Function where we are trying to chnage a vlaue outside the function
      $change =10; // putting & before the paramater abvoe lets us chnage it, take that away and it will be 5
    }

    $change = 5;
    changeMe($change);
    echo " Change  : $change<br />";

    function getSum(...$nums){
      $sum = 0;
      foreach($nums as $num){
        $sum += $num;
      }
      return $sum;
    }

    printf("Sum = %d<br />", getSum(1,2,3,4));

    function doMath($x, $y){ // takes two values
      return array( // creates an array with these two values
        $x + $y, // frist place in the array is this Sum
        $x - $y // Second palce is this
      );
    }

    list($sum, $difference) = doMath(6,5);// List things as if they were an array
    // doMath function is returning an array whch us the answer to thw two equations
    // List is assgning thise two answers to varibles so that we can display them
    //i THINK you have to do this because the do math array is undefined? there fro we couldnt just call it anyway
    echo "Sum = $sum<br />"; // So this is the answer to $x + $y
    echo "Difference = $difference<br />"; // This is the answer to $x - $y

    function double($x){ // function which will times any value past into by itself
      return $x * $x;
    }
    $list = [1,2,3,4]; // create an array? list?
    $dbl_list = array_map('double' , $list); //use array map to map the values from list into an array whislt applying the double fucntion to each value
    print_r($dbl_list); // print_r to print ou the array

    function mult($x, $y){ // Multiplies each value by the other value in the array
            $x *= $y;
            return $x;
          }
          $prod = array_reduce($list, 'mult', 1);
          print_r($prod);
          echo '<br>';

          function badDivide($num){
              if($num == 0){
                throw new Exception("You can't divide by zero");
              }
              return $calc = 100 / $num;
            }
            try{
              badDivide(0);
            } catch(Exception $e){
              echo "Exception : " . $e->getMessage();
            }
       
   ?>


</body>
</html>
