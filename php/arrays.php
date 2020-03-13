<?php
$cols = [
    [  "email" => "bossolansousa2000@gmail.com",    "nome" => "Alisson",],
    [  "email" => "teste@gmail.com",    "nome" => "Teste",],
];
echo "<pre>";
var_dump($cols);
echo "</pre>";

echo "<hr>"; 
echo $cols[0]["nome"];
echo "<hr>"; 
echo $cols[1]["nome"];
echo "<hr>"; 
echo "<hr>";

for($i = 0; $i < count($cols); $i ++){
    echo "<hr>"; 
echo $cols[$i]["nome"];
echo "<hr>"; 
}

echo "<hr>"; 
foreach($cols as $col){
    echo "<hr>"; 
echo $col["nome"];
echo "<hr>"; 
}


$i = 0;
while ( $i < count($cols)) {
    echo "<hr>"; 
    echo $cols[$i]["nome"];
    echo "<hr>"; 
    $i = $i + 1;
}

