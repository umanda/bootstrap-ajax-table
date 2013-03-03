<?php

$csv = array();
foreach (explode("\n", file_get_contents(__DIR__ . '/data.csv')) as $line) {
    $csv[] = str_getcsv($line, '|');
}
$header = array_shift($csv);

$output = array(
    'count' => count($csv),
    'users' => $csv,
);

echo json_encode($output);