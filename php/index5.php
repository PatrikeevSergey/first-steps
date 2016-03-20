<html>
<head>
<body>

<center>
<?php
	function sum()
	{
		$s=0;
		foreach(func_get_args() as $val)
		{
			$s+=$val;
		}
		return $s;
	}
	
	function mathOperation($arg1,$arg2,$operation)
	{
		switch ($operation)
		{
			case "+":
				return $arg1+$arg2;
				break;
			case "-":
				return $arg1-$arg2;
				break;
			case "*":
				return $arg1*$arg2;
				break;
			case "/":
				return $arg1/$arg2;
				break;
			default:
				echo "Error!";
		}
	}
	
	function getTable($cols=10, $rows=10)
	{
		echo "<table border=2><tr>";
		for ($i = 1; $i <= $rows; $i++) {
			if ($i == 1) {
				for ($j = 1; $j <= $cols; $j++)
				{
					echo "<td align=center><b>".$j."</b></td>";
				}
			}
		$n=$i+1;
		if ($n<=$rows)
			{
				echo "</tr><tr><td align=center ><b>".$n."</b></td>";
				for ($j = 2; $j <= $cols; $j++) 
				{ 
					echo "<td align=center bgcolor=yellow>" . $n*$j . "</td>";
				}
			}
		}	     
		echo "</tr></table>";
	}
	
	function getMenu($arr,$vertical)
	{
		if ($vertical)
			{
				echo "<Font size=5>";
				echo "Вертикальное меню<br>";				
				foreach ($arr as $link => $href)
				{
					echo '<a href="'.$href.'">'.$link.'</a><br>';
				}
				echo "</Font>";
			}
		else
			{
				echo "<center>";
				echo "<Font size=5>";
				echo "Горизонтальное меню<br>";								
				foreach ($arr as $link => $href)
				{
					echo '<a href="'.$href.'">'.$link.'</a>'.' ';
				}
				echo "</Font>";
				echo "</center>";
			}
	}



            function create_form($type=text, $kol=10)
		{
			echo "<form>";
				switch($type)
				{
					case "text":
						for($i=0;$i<$kol;$i++)
						{
							echo"<input type='".$type."' /></br>";
						}
						break;
					case "button":
						for($i=0;$i<$kol;$i++)
						{
							echo"<input type='".$type."' value='БУТЕН"."' /></br>";
						}
						break;
					case "checkbox":
						for($i=0;$i<$kol;$i++)
						{
							echo"<input type='".$type."'>"."Чекбухс"."</br>";
						}
						break;
				}
			echo"</form>";
		}

?>
</center>
</body>
</HEAD>
</html>