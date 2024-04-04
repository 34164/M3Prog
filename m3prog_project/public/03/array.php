<?php
$games = ["RDR2", "GTAV", "Spiderman2", "Fortnite", "Cyberpunk2077"];
print_r($games);
echo $games[3]; 
echo $games[4]; 
echo "<br>";
?>

<?php
$games = ["RDR2", "GTAV", "Spiderman2", "Fortnite", "Cyberpunk2077"];
echo  count($games)  
"<br>";


array_push($games, "Assassin's Creed");
echo ;
print_r($games);
echo "<br>";

sort($games);
echo "Gesorteerde array: " implode(", ", $games);
?>
