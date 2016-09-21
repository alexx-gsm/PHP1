<?php
include __DIR__ . '/functions.php';
$a = $_GET['varA'] ?? null;
$b = $_GET['varB'] ?? null;
$c = $_GET['varC'] ?? null;

if ( $a !== null &&
     $b !== null &&
     $c !== null ) {
  $D = calculateD($a, $b, $c);
  if ($D >= 0) {
    $x1 = (-$b + sqrt($D)) / (2 * $a);
    $x2 = (-$b - sqrt($D)) / (2 * $a);
  } else {
    $err = 'Дискриминант меньше 0';
  }
} else {
  $err = 'Введены не верные данные';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP-1 урок №2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- LOGICAL AND -->
    <h2>Таблица истинности: конъюнкция</h2>
      <table>
        <thead>
        <tr>
          <td>a</td><td>b</td><td>a and b</td>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < 2; $i++): ?>
          <?php for ($j = 0; $j <2; $j++): ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $j; ?></td>
              <td><?php echo (int)logicalAnd($i, $j); ?></td>
            </tr>
          <?php endfor; ?>
        <?php endfor; ?>
        </tbody>
      </table>

    <!-- LOGICAL OR -->
    <h2>Таблица истинности: дизъюнкция</h2>
    <table>
      <thead>
      <tr>
        <td>a</td><td>b</td><td>a or b</td>
      </tr>
      </thead>
      <tbody>
      <?php for ($i = 0; $i < 2; $i++): ?>
        <?php for ($j = 0; $j <2; $j++): ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $j; ?></td>
            <td><?php echo (int)logicalOr($i, $j); ?></td>
          </tr>
        <?php endfor; ?>
      <?php endfor; ?>
      </tbody>
    </table>

    <!-- LOGICAL OR -->
    <h2>Таблица истинности: сложение по модулю 2</h2>
    <table>
      <thead>
      <tr>
        <td>a</td><td>b</td><td>a or b</td>
      </tr>
      </thead>
      <tbody>
      <?php for ($i = 0; $i < 2; $i++): ?>
        <?php for ($j = 0; $j <2; $j++): ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $j; ?></td>
            <td><?php echo (int)logicalXor($i, $j); ?></td>
          </tr>
        <?php endfor; ?>
      <?php endfor; ?>
      </tbody>
    </table>

<!--  Решаем квадратное уравнение -->
  <fieldset>
    <legend>Решаем квадратное уравнение</legend>
    <h2>ax<sup>2</sup> + bx + c = 0</h2>
    <hr>
    <form action="/" method="get">
      <label for="a">a:</label>
      <input id="a" type="text" name="varA" value="<?=$a; ?>" required>
      <label for="b">b:</label>
      <input id="b" type="text" name="varB" value="<?=$b; ?>" required>
      <label for="c">c:</label>
      <input id="c" type="text" name="varC" value="<?=$c; ?>" required>
      <input type="submit" value="Вычислить">
    </form>
    <?php if (isset($err)) {
      echo $err;
    } else {
      echo $a . 'x<sup>2</sup> + (' . $b . ')x + ('. $c . ')<br>';
      echo 'x1 = ' . $x1 . '<br>';
      echo 'x2 = ' . $x2 . '<br>';
    }
    ?>
  </fieldset>

  </body>
</html>
