<?php
include 'database.php';

$obj = new Database();
$obj->insert('user',["name" => "hoorams shah","email"=>"hooram@gmail.com"]);
echo "Inserted Result is : ";
print_r($obj->getResult());
?>