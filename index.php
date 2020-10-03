<?php

//$employee = array("Papsy","Divine","Philip","Yaw","Papa");
$employee1 = array("name"=>"Papa",
                  "salary"=>15000,
                  "gender"=>"Male",
                  "working_hours"=>"10hrs");
                  
$employee2 = array("name"=>"Papsy",
                  "salary"=>50000,
                  "gender"=>"Male",
                  "working_hours"=>"12hrs");

$company = array($employee1, $employee2);
                  
$json = json_encode($company);
//echo $json;
$decodedjson = json_decode($json);
//print_r($decodedjson);
//print_r($decodedjson->salary);

//print_r($decodedjson[1]->working_hours);

//To prevent printing each key pair one by one you implement loops
echo $decodedjson[0]->name."\n";
echo $decodedjson[0]->salary."\n";
echo $decodedjson[0]->gender . "\n";
echo $decodedjson[0]->working_hours."\n";

$a = 1;
$b = 2;

$add=($a * $b);
print_r($add);


?>