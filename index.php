<?php

$b = range(1, 15);
$i = range(16, 30);
$n = range(31, 45);
$g = range(46, 60);
$o = range(61, 75);

for ($i=0; $i < 5; $i++) { 
    echo $b[rand(0, count($b)-1)]."<br>"; #gives duplicates
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


</body>
</html>