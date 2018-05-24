<?php
  $gender = filter_input(INPUT_POST, 'gender');
  $submit = filter_input(INPUT_POST, 'submit');
  var_dump($gender);
  var_dump($submit);
  if (($gender == NULL) && ($submit != NULL)) {
  echo "Musíte zadat pohlaví. " ;
  echo "Formulář byl odeslán, jsi : $gender"  ;
  }

 ?>

<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<?php
  if ($submit == NULL) {
?>
     <form action="index.php" method="post">
       <input type="radio" name="gender" value="Male"> Muž <br>
       <input type="radio" name="gender" value="Female"> Žena <br>
       <input type="submit" name="submit" value="Odeslat"> Potvrdit <br>
    </form>
<?php } ?>

  </body>
</html>
