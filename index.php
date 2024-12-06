<?php
if(isset($_REQUEST["start"]))
{
$gridno=$_POST["gridno"];

echo $winning_position=$gridno*$gridno;



function rolldice()
{
    return rand(1,6);
}

$dice_history_player1=array();
$player1_position_history=array();
$dice_history_player2=array();
$player2_position_history=array();
$dice_history_player3=array();
$player3_position_history=array();
$dice_player1=rolldice();
$dice_player2=rolldice();
$dice_player3=rolldice();
$player1_position=$dice_player1;
$player2_position=$dice_player2;
$player3_position=$dice_player3;

while($player1_position<$winning_position)
{
    $dice_player1=rolldice();
    array_push($dice_history_player1,$dice_player1);

    $player1_position=$player1_position+$dice_player1;
    array_push($player1_position_history,$player1_position);

}
$dice_history_player1_show=implode(",",$dice_history_player1);

$player1_position_history_show=implode(",",$player1_position_history);


$dice_player2=rolldice();

$player2_position=$dice_player2;

while($player2_position<$winning_position)
{
    $dice_player2=rolldice();
    array_push($dice_history_player2,$dice_player2);

    $player2_position=$player2_position+$dice_player2;
    array_push($player2_position_history,$player2_position);

}
$dice_history_player2_show=implode(",",$dice_history_player2);

$player2_position_history_show=implode(",",$player2_position_history);


$dice_player3=rolldice();

$player3_position=$dice_player3;

while($player3_position<$winning_position)
{
    $dice_player3=rolldice();
    array_push($dice_history_player3,$dice_player3);

    $player3_position=$player3_position+$dice_player3;
    array_push($player3_position_history,$player3_position);

}
$dice_history_player3_show=implode(",",$dice_history_player3);

$player3_position_history_show=implode(",",$player3_position_history);

if($player1_position==$winning_position)
{
$player1_winner="WINNER";
}
else
{
    $player1_winner="";
}
if($player2_position==$winning_position)
{
    $player2_winner="WINNER";

}
else
{
    $player2_winner="";
}
if($player3_position==$winning_position)
{
    $player3_winner="WINNER";
}
else
{
    $player3_winner="";
}
}

?>


<html>
<head>Game On!</head>
<body>
<form action="" method="POST">
Grid:    
<input type="number" name="gridno"><br><br>
<input type="submit" name="start" value="start">
</form>

<?php if(isset($_REQUEST["start"])) { ?>
<table border="1">
<tr><th>Player No</th><th>Dice Roll History</th><th>Position History</th><th>Coordinate History</th><th>Winner Status</th></tr>
<tr><td>1</td><td><?php echo $dice_history_player1_show; ?></td><td><?php echo $player1_position_history_show; ?></td><td></td><td><?php echo $player1_winner ?></td></tr>
<tr><td>2</td><td><?php echo $dice_history_player2_show; ?></td><td><?php echo $player2_position_history_show; ?></td><td></td><td><?php echo $player2_winner ?></td></tr>
<tr><td>3</td><td><?php echo $dice_history_player3_show; ?></td><td><?php echo $player3_position_history_show; ?></td><td></td><td><?php echo $player3_winner ?></td></tr>


<tr></tr>

</table>
<?php } ?> 

</body>


</html>