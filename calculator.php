<html>
  <head>
    <title>Calculator</title>
  </head>
  <body>
    <h2>Calculator</h2>
    <form method='post' action='calculator.php'>
      <input type='text' name='number1' />
      <select name='operator'>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
      </select>
      <input type='text' name='number2'>
      <input type='submit' name='submit' value='Calculate'>
    </form>

    <?php
    if (isset($_POST['submit']) && !empty($_POST['number1']) && !empty($_POST['number2'])) {
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $operator = $_POST['operator'];
      if ($operator == '+') {
        $res = $number1 + $number2;
        echo '<b>' . $number1 . ' + ' . $number2 . ' = ' . $res . '</b>';
      }

      if ($operator == '-') {
        $res = $number1 - $number2;
        echo '<b>' . $number1 . ' - ' . $number2 . ' = ' . $res . '</b>';
      }

      if ($operator == '*') {
        $res = $number1 * $number2;
        echo '<b>' . $number1 . ' * ' . $number2 . ' = ' . $res . '</b>';
      }

      if ($operator == '/') {
        $res = $number1 / $number2;
        echo '<b>' . $number1 . ' / ' . $number2 . ' = ' . $res . '</b>';
      }
    }
    else echo 'Please insert some values!';
    ?>

  </body>
</html>
