<html>
<head>
<title>Zadanie 2</title>
</head>
<body>
<?php
    
    $x1 = $_GET['x1'];
    $y1 = $_GET['y1'];
    $x2 = $_GET['x2'];
    $y2 = $_GET['y2'];

    $jeden = $x1 * $x2;
    $dwa = $y1 * $y2;

    echo $jeden + $dwa;

    
?>
</body>
</html>