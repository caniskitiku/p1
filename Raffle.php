<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $contestants=["Mike"=>"","Phill"=>"","Jack"=>"","Mary"=>""];
    function getList(){
        global $contestants;
        foreach ($contestants as $contestant=>$raffle){
            $contestants[$contestant]=getRaffle();
        }}
    function getRaffle(){
        $raffle=rand(0,1);
        if($raffle==0)
        return "Loser";
        else
        return "Winner";
    }
    getList();   
    foreach ($contestants as $contestant =>$raffle){
        echo $contestant . " is " . $raffle;
        echo "<br>";
        }
    ?>
</body>
</html>