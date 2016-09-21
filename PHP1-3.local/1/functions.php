<?php
function calculate(int $x1 = 0, int $x2 = 0, string $operator = '+') {
  switch ($operator) {
    case '+':
      return $x1 + $x2;
    case '-':
      return $x1 - $x2;
    case '*':
      return $x1 * $x2;
    case '/':
      return $x1 / $x2;
    default:
      return null;
  }
}
