<?php

$cities = file(__DIR__ . '/Cities/db_cities.txt', FILE_IGNORE_NEW_LINES);

$new_cities[] = '<?php' . PHP_EOL . 'return [';
foreach ($cities as $city) {
    $arr = explode(' ', $city, 2);
    $new_cities[] = PHP_EOL . '    [\'' . $arr[0] . '\' => \'' . $arr[1] . '\'],';
}
$new_cities[] = PHP_EOL . '];';

file_put_contents(__DIR__ . '/Cities/db_cities.php', $new_cities);