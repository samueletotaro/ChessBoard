<html>
<head>
<style>
td{
	height: 50px;
	text-align: center;
	min-width:50px;
	spacing: 0px;
	border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<?php
	$i=0;
	echo "<table width='500' cellspacing='0' cellpadding='0' border-collapse: collapse";
	for($j=0;$j<10;$j=$j+1)
	{
		echo "<tr text-align='center'>";
		for($k=0;$k<10;$k=$k+1)
		{
			if($j==0)
			{
				switch($k){
				case 0:
					echo "<td> ";
					break;
				case 1:
					echo "<td> ∀ ";
					break;
				case 2:
					echo "<td> ꓭ ";
					break;
				case 3:
					echo "<td> Ͻ ";
					break;
				case 4:
					echo "<td> ᗡ ";
					break;
				case 5:
					echo "<td> Ǝ ";
					break;
				case 6:
					echo "<td> ᖵ";
					break;
				case 7:
					echo "<td> ⅁ ";
					break;
				case 8:
					echo "<td> H ";
					break;
				case 9:
					echo "<td>  ";
					break;
				}
				
			}
			else if($j==9)
			{
				switch($k){
				case 0:
					echo "<td>  ";
					break;
				case 1:
					echo "<td> A ";
					break;
				case 2:
					echo "<td> B ";
					break;
				case 3:
					echo "<td> C";
					break;
				case 4:
					echo "<td> D ";
					break;
				case 5:
					echo "<td> E ";
					break;
				case 6:
					echo "<td> F ";
					break;
				case 7:
					echo "<td> G ";
					break;
				case 8:
					echo "<td> H ";
					break;
				case 9:
					echo "<td> ";
					break;
				}
			}
			else if($k==0)
			{
				switch($j){
				case 0:
					echo "<td>  ";
					break;
				case 1:
					echo "<td> 1 ";
					break;
				case 2:
					echo "<td> 2 ";
					break;
				case 3:
					echo "<td> 3 ";
					break;
				case 4:
					echo "<td> 4 ";
					break;
				case 5:
					echo "<td> 5 ";
					break;
				case 6:
					echo "<td> 6 ";
					break;
				case 7:
					echo "<td> 7 ";
					break;
				case 8:
					echo "<td> 8 ";
					break;
				case 9:
					echo "<td>  ";
					break;
				}
			}
			else if($k==9)
			{
				switch($j){
				case 0:
					echo "<td>  ";
					break;
				case 1:
					echo "<td> ⇂ ";
					break;
				case 2:
					echo "<td> ↊ ";
					break;
				case 3:
					echo "<td> ↋ ";
					break;
				case 4:
					echo "<td> ߤ ";
					break;
				case 5:
					echo "<td> ϛ ";
					break;
				case 6:
					echo "<td> 9 ";
					break;
				case 7:
					echo "<td> 𝘓 ";
					break;
				case 8:
					echo "<td> 8 ";
					break;
				case 9:
					echo "<td>  ";
					break;
				}
				$i++;
			}
			else
			{
				if($i%2==0)
				{
					echo "<td style='background-color:#ffffe6'>";				
				}
				else
				{
					echo "<td style='background-color:#663300'>";	
				}
				$i=$i+1;
			}
		}
		echo "<tr>";
	}
echo "</table>";
?>
</html>