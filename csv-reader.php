<?php
#Way 1: open the csv file in read mode
$csvFile = fopen('users.csv','r');
$csvData = [];
while(($row = fgetcsv($csvFile)) !== false) {
    #you can do other operation here like database insertion
    $csvData[] = $row;
}
print_r($csvData);
fclose($csvFile);

#Way 2: Read the file using file function
$csvData = [];
$rows = file('users.csv', FILE_IGNORE_NEW_LINES);
foreach ($rows as $key => $value) {
    #you can do other operation here like database insertion
    $csvData[$key] = str_getcsv($value);
}
print_r($csvData);