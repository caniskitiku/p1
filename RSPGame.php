<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockScissorsPaperGame</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <?php  
    
    $totalDraw=0;
    $currentPlayerA=0;
    $currentPlayerB=0;
    
    function playerAWin(){
        global $currentPlayerA;
        $currentPlayerA++;
    }
    
    function playerBWin(){
        global $currentPlayerB;
        $currentPlayerB++;
    }

    function tie(){
        global $totalDraw;
        $totalDraw++;
    }
    


    function getPlayerBPlay(){
        sleep(0.3);
        return rand(1,3);
        
    }
    function getPlayerAPlay(){
       sleep(0.1);
        return rand(1,3);
        
        
    }
    function getRoundWinner($playerA, $playerB){
        $strings=array("","Rock crushes scissors","Paper covers Rock","Scissors cuts paper");
        $materialA ="";
        if($playerA==1)
            {$materialA="Rock";}
        else if($playerA==2)
            {$materialA="Paper";}
        else{
            $materialA="Scissors";  
        }
        $materialB="";
        if($playerB==1)
            {$materialB="Rock";}
        else if($playerB==2)
            {$materialB="Paper";}
        else{
            $materialB="Scissors";
        }

        if($playerA == $playerB){  
            tie(); 
            return '<td>Player A: <br><img src="./assets/'. $materialA.'.svg" style="width:60%;"></td><td>Same choice<br> It is a draw</td><td>Player B: <br> <img src="./assets/'. $materialB.'.svg" style="width:60%;"> </td>';
        }
        else if ($playerA == 1 && $playerB == 3){
            playerAWin();
            return '<td>Player A: <br><img src="./assets/'. $materialA.'.svg" style="width:60%;"></td><td>Rock crushes scissors <br> Player A wins..</td><td>Player B: <br> <img src="./assets/'. $materialB.'.svg" style="width:60%;"> </td>';
        }
        else if ($playerA == 2 && $playerB == 1){
            playerAWin();
            return '<td>Player A: <br><img src="./assets/'. $materialA.'.svg" style="width:60%;"></td><td>Paper covers Rock <br> Player A wins..</td><td>Player B: <br> <img src="./assets/'. $materialB.'.svg" style="width:60%;"> </td>';
        }
    
        else if ($playerA == 3 && $playerB == 2){
            playerAWin();
            return '<td>Player A: <br><img src="./assets/'. $materialA.'.svg" style="width:60%;"></td><td>Scissors cuts paper <br> Player A wins.. </td><td>Player B: <br> <img src="./assets/'. $materialB.'.svg" style="width:60%;"> </td>';
        }
        else{
            playerBWin();
            return '<td>Player A: <br><img src="./assets/'. $materialA.'.svg" style="width:60%;"></td><td>'. $strings[$playerB] .' <br> Player B wins..</td><td>Player B: <br> <img src="./assets/'. $materialB.'.svg" style="width:60%;"> </td>';
        }
        

    } 
    function playGame()
   {
    
        for ($i=1;$i<11;$i++)
        {
            echo "<th>Round ".$i,":</th><tr>" . getRoundWinner(getPlayerAPlay(), getPlayerBPlay()) . "</tr>";
            

        } 
        
    }  
    ?>
    <div class="container">
   <form class="buton"action="RSPGame.php" method="Post">
       <input type="submit" onClick="window.location.href=window.location.href" value="Play Again">
</form> 
   <table class="gametable">
   
   <?php
   global $totalDraw;
   global $currentPlayerA;
   global $currentPlayerB;
   
   playGame();
   ?>
  
   
   <?php
   echo '<th class="result"> Player A: '.$currentPlayerA." wins. </th><br>";
   
   echo '<th class="result">'.$totalDraw." Games were a draw.</th><br>";
   echo '<th class="result">Player B: '.$currentPlayerB." wins. </th>";

   ?>
   </table>
   
    
    
    </div>
</body>
</html>