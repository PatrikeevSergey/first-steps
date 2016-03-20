<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ассоциативные и многомерные  массивы</title>
</head>

<body>
<?php 
$capital["Russia"] = "Москва";
$capital["USA"] = "Вашингтон";
$capital["Fracne"] = "Париж";
$capital["Ukraine"] = "Киев";
$capital["Italy"] = "Рим";
echo "<br>";
echo $capital["Ukraine"];

$naselenie = array ("Russia"=>"150", "USA" => "250", "France" => "40", "Ukraine" => "30", "Italy" => "35");
echo "<br>"; 
echo "Столица России - ".$capital["Russia"] .". Население России - ".$naselenie["Russia"] ." млн. человек" ;

echo "<br>";
echo "Столица России - $capital[Russia]. Население России - $naselenie[Russia] млн. человек";
 

$auto["bmw"] = array ("color" => "Белый", "year" => "2005", "pr"=>"2000"); 
echo "<br>Год BMW - ".$auto["bmw"]["year"];
 
?>
</body>
</html>