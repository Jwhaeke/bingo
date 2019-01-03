<?php
session_start();

$b = range(1, 15);
$i = range(16, 30);
$n = range(31, 45);
$g = range(46, 60);
$o = range(61, 75);

if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}

if($_SERVER["REQUST_METHOD"] == "POST"){
    echo "mooh";
    // for ($x=0; $x < 5; $x++) {
            
    // } 
    // if($randVar == $guessed){
    //     $_SESSION["score"] ++;
    // }      
}

#numbers reload on page load. maybe _session array?
function drawNumber($n) {
    echo $n[rand(0, count($n)-1)]; 
}

// for ($i=0; $i < 5; $i++) { 
//     echo $b[rand(0, count($b)-1)]."<br>"; #gives duplicates - maybe build new array with unique numbers
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bingo</title>
</head>
<body>
<!-- <div class="container">
    <div class="head">
        Numbers drawn:
    </div>
</div>     -->
<div class="container">
    <div class="wrapper">
        <div class="row">
            <div class="col m-3">B</div>
            <div class="col m-3">I</div>
            <div class="col m-3">N</div>
            <div class="col m-3">G</div>
            <div class="col m-3">O</div>
        </div>

        <div class="row">
            <div class="col m-3"><?php drawNumber($b); ?> </div>
            <div class="col m-3"><?php drawNumber($i); ?> </div>
            <div class="col m-3"><?php drawNumber($n); ?> </div>
            <div class="col m-3"><?php drawNumber($g); ?> </div>
            <div class="col m-3"><?php drawNumber($o); ?> </div>
        </div>

        <div class="row">
            <div class="col m-3"><?php drawNumber($b); ?> </div>
            <div class="col m-3"><?php drawNumber($i); ?> </div>
            <div class="col m-3"><?php drawNumber($n); ?> </div>
            <div class="col m-3"><?php drawNumber($g); ?> </div>
            <div class="col m-3"><?php drawNumber($o); ?> </div>
        </div>

        <div class="row">
            <div class="col m-3"><?php drawNumber($b); ?> </div>
            <div class="col m-3"><?php drawNumber($i); ?> </div>
            <div class="col m-3">X</div>
            <div class="col m-3"><?php drawNumber($g); ?> </div>
            <div class="col m-3"><?php drawNumber($o); ?> </div>
        </div>

        <div class="row">
            <div class="col m-3"><?php drawNumber($b); ?> </div>
            <div class="col m-3"><?php drawNumber($i); ?> </div>
            <div class="col m-3"><?php drawNumber($n); ?> </div>
            <div class="col m-3"><?php drawNumber($g); ?> </div>
            <div class="col m-3"><?php drawNumber($o); ?> </div>
        </div>
        <div class="row">
            <div class="col m-3"><?php drawNumber($b); ?> </div>
            <div class="col m-3"><?php drawNumber($i); ?> </div>
            <div class="col m-3"><?php drawNumber($n); ?> </div>
            <div class="col m-3"><?php drawNumber($g); ?> </div>
            <div class="col m-3"><?php drawNumber($o); ?> </div>
        </div>
    </div>
    <!-- <form action="" method="post">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>    
    </form>
    <br>
    <?php echo "Je score is: ".$_SESSION["score"]; ?> -->
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>