<?php
function logicalAnd(bool $x1 = false, bool $x2 = false) {
  return ($x1 && $x2);
}

function logicalOr(bool $x1 = false, bool $x2 = false) {
    return ($x1 || $x2);
}

function logicalXor(bool $x1 = false, bool $x2 = false) {
    return ($x1 xor $x2);
}

function calculateD(int $a = 0, int $b = 0, int $c = 0) {
    return $b*$b - 4 * $a * $c;
}

assert(0 == calculateD(0, 0, 0));
assert(0 == calculateD(1, 2, 1));
assert(5 == calculateD(-1, 1, 1));
assert(5 == calculateD(1, 1, -1));
assert(5 == calculateD(1, -1, -1));
assert(-12 == calculateD(2, 2, 2));
