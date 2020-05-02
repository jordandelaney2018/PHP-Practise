<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP Tutorial</title>
  </head>
  <body>
    <form action="Porject.php" method="post">
      <label>Email : </label>
      <input type="text" name="email"/><br>
      <label>Number 1 : </label>
      <!-- Protect by setting the correct types
      w3schools.com/html/html_form_input_types.asp -->
      <input type="text" name="num1"/><br>
      <label>Number 2 : </label>
      <input type="text" name="num2"/><br>
      <label>Website : </label>
      <input type="text" name="website"/><br>
      <input type="submit" value="Submit"/>
    </form>
    <?php
      if(isset($_POST["email"])){ // Checks if an email has been entered
        if(!filter_input(INPUT_POST, "email", // Validates that it is an email
        FILTER_VALIDATE_EMAIL)){
          echo "Email is not valid <b>";
        }else {
            echo "Email is valid <b>";
        }
      }

      if (isset($_POST["num1"]) && !empty($_POST["num2"])){ // validateing numbers and deciamls
        $num1 = filter_input(INPUT_POST, 'num1',
         FILTER_SANITIZE_NUMBER_FLOAT,
         FILTER_FLAG_ALLOW_FRACTION);

         $num2 = filter_input(INPUT_POST, 'num2',
          FILTER_SANITIZE_NUMBER_FLOAT,
          FILTER_FLAG_ALLOW_FRACTION);

          $output = sprintf("%.1f + %.1f = %.1f",
          $num1, $num2, ($num1 + $num2));
          echo htmlspecialchars($output) . '<br />';

    if(isset($_POST["website"])){ // validating URL
      $website = filter_input(INPUT_POST, 'website', FILTER_VALIDATE_URL);
      echo 'Website : ' . htmlspecialchars($website) . '<br>';
      }
}

      # Converting HTML special characters
       # Convert special characters into HTML entities
       $con_html = '<a href="#">Sample</a>';
       echo $con_html . "<br>";
       # Convert special characters to HTML so it can be displayed
       echo htmlspecialchars($con_html) . "<br>";
       # Strip tags except for a
       echo strip_tags($con_html, '<a>') . "<br>";
       # Eliminate all tags
       $con_html = strip_tags($con_html) . "<br>";
       echo $con_html . "<br>";

     ?>
  </body>
</html>
