<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Display After Delete</title>
</head>

<body>
<?php
$db = mysql_connect("localhost", "root", "reyd");
mysql_select_db("bulilit",$db);

$result = mysql_query("SELECT * FROM Athlete order by Surname",$db);
?>
</body>
</html>
