<!DOCTYPE HTML>

<html>
<body>

<?php

    $player1 = array($_POST["player1"],"Andy");
    $player2 = array($_POST["player2"],"Bart");
    $player3 = array($_POST["player3"],"Ben J.");
    $player4 = array($_POST["player4"],"Somrak");
    $player5 = array($_POST["player5"],"Drew");
    $player6 = array($_POST["player6"],"Evan");
    $player7 = array($_POST["player7"],"Pete");
    $player8 = array($_POST["player8"],"Rhett");
    $player9 = array($_POST["player9"],"Scott");
    $player10 = array($_POST["player10"],"Sean");
    $player11 = array($_POST["player11"],"Tim");
    $player12 = array($_POST["player12"],"Guest");

    $rosterPlaying = array();

    $rosterArray = array($player1, $player2, $player3, $player4, $player5, $player6, $player7, $player8, $player9, $player10, $player11, $player12);


    //echo $rosterArray[0][0];
    //echo "<br>";
?>



<?php

    for($i=0; $i<count($rosterArray); $i++){
      //echo $i;
      // echo "<br>";
      if(($rosterArray[$i][0]) == 1){
        //echo $rosterArray[$i][1];
        //echo "<br>";
        array_push($rosterPlaying, $rosterArray[$i][1]);


      }

    }

?>

<?php

  // Shuffle the array of players that are playing to get a random order
  shuffle($rosterPlaying);

  //array_shift($rosterPlaying);

  for($j=0; $j<count($rosterPlaying);$j++){
    echo "J is:";
    echo $j;
    echo "<br>";
    echo $rosterPlaying[$j];
    echo "<br>";
  }
/*
    $countArray = count($rosterPlaying);
    echo $countArray;
    echo "<br>";

    echo $rosterPlaying[0];
    echo "<br>";
    echo $rosterPlaying[1];
    echo "<br>";
    echo $rosterPlaying[2];
    echo "<br>";
    echo $rosterPlaying[3];
    echo "<br>";
    echo $rosterPlaying[4];
    echo "<br>";
    echo $rosterPlaying[5];
    echo "<br>";

    echo $player1[1];
    echo $player1[0];

    */

 ?>

</body>
</html>
