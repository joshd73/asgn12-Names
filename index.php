<?php
include 'functions/utility-functions.php';
include 'functions/names-functions.php';

$fileName = 'names-short-list.txt';
$fullNames = load_full_names($fileName);

$firstNames = load_first_names($fullNames);

$lastNames = load_last_names($fullNames);

for($i = 0; $i < sizeof($fullNames); $i++) {
    if(ctype_alpha($lastNames[$i].$firstNames[$i])) {
        $validFirstNames[$i] = $firstNames[$i];
        $validLastNames[$i] = $lastNames[$i];
        $validFullNames[$i] = $validLastNames[$i] . ", " . $validFirstNames[$i];
    }
}

echo '<h1>Names - Results</h1>';

echo '<h2>Unique Full Names</h2>';
$uniqueValidNames = (array_unique($validFullNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique full names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }

echo '<h2>Unique First Names</h2>';
$uniqueValidNames = (array_unique($validFirstNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique first names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }

echo '<h2>Unique Last Names</h2>';
$uniqueValidNames = (array_unique($validLastNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique last names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }

echo '<h2>Top 10 First Names</h2>';
$uniqueValidNames = (array_count_values($validFirstNames));
arsort($uniqueValidNames);
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique last names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }

echo '<h2>Top 10 Last Names</h2>';
$uniqueValidNames = (array_count_values($validLastNames));
arsort($uniqueValidNames);
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique last names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }


?>








