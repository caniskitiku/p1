<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="raffle-2.php" method="POST">

<input type="text" placeholder="Enter a name" name="contestant1">
</br>
<input type="text" placeholder="Enter a name" name="contestant2">
</br>
<input type="text" placeholder="Enter a name" name="contestant3">
</br>
<input type="text" placeholder="Enter a name" name="contestant4">
</br>
<input type="text" placeholder="Enter a name" name="contestant5">

<input type= "submit" value="Submit">

</form>
</body>
</html>
<?php 
        $contestants=[];
        foreach ($_POST as $contestant=>$raffle){
            $i=1;
            $contestant=$_POST[$contestant];
            $contestants[$contestant]=getRaffle();
            $i+=1;
        }
        foreach ($contestants as $contestant =>$raffle){
            echo $contestant . " is " . $raffle;
            echo "<br>";
            }
        function getRaffle(){
        $raffle=rand(0,1);
        if($raffle==0)
        return "Loser";
        else
        return "Winner";
    }