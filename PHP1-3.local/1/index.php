<?php
include __DIR__ . '/functions.php';

$var1 = isset($_GET['var1']) ? (int)$_GET['var1'] : null;
$var2 = isset($_GET['var2']) ? (int)$_GET['var2'] : null;
$operator = $_GET['operator'] ?? null;

if (null !== $var1 && null !== $var2) {
  $result = calculate($var1, $var2, $operator);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP-1 | урок №3-1</title>
  </head>
  <body>
    <fieldset>
      <legend>Калькулятор</legend>
      <form class="" action="/" method="get">
        <label for="var1">Первое число:</label>
        <input id="var1" type="text" name="var1" value="<?=$var1; ?>" required>
        <label for="op">Операция:</label>
        <select id="op" class="" name="operator">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        </select>
        <label for="var2">Второе число:</label>
        <input id="var2" type="text" name="var2" value="<?=$var2; ?>" required>
        <input type="submit" value="равно">
        <?php if (isset($result)): ?>
          <span><?php echo $result; ?></span>
        <?php endif; ?>
      </form>
    </fieldset>
  </body>
</html>
