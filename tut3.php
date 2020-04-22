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
      $friends = array('joy' , 'willow' , 'ivy'); //basic array
      echo 'Wife : '  .$friends[0] . '<br />'; //printing from an array
      $friends[3] = 'steve'; //adding to an array
      foreach($friends as $f){ // for each entry in the array temp store in varible $f and do whats in the loop
        printf("Friend : %s<br />", $f);
      }
      $me_info = array('Name'=> 'Derek', 'Street'=> '123 Main'); //array with keys
      foreach($me_info as $k=> $v){ // printing an array with keys
        printf("%s : %s<br />", $k, $v);
      }

      $friends2 = array('Doung');
      $friends = $friends + $friends2; // Combinding two array together

      sort($friends); // Sort array
        foreach($friends as $f){
          printf("Friend : %s<br />", $f);
        }
      rsort($friends); // reverse sort array
        foreach($friends as $f){
          printf("Friend : %s<br />", $f);
        }

        $customers = array(array('Derek', '123 Main'), // array inside an array
                           array('Sally', '123 Main'));
        for($row = 0; $row < 2; $row++){ // pringin out with a multi tier array
          for($col = 0; $col < 2; $col++){
            echo $customers [$row] [$col] . ', ';
          }
          echo '<br />';
        }

        $let_str = "A B C D"; // trun string into array
          $let_arr = explode(' ', $let_str);
          foreach($let_arr as $l){
            printf("Letter : %s<br>", $l);
          }

        $let_str_2 = implode(' ', $let_arr); // turn array into string 
        echo "String : $let_str_2<br>";

   ?>
</body>
</html>
