<html>
<head>
<title>Zadanie 1</title>
</head>
<body>
<?php
    $result = [];
    while(count($result) < 6)
    {
        $r = rand(1, 49);
        if(!in_array($r, $result))
            $result[] = $r;
    }

    foreach($result as $element)
        echo "<img src=\"lotto$element.png\", alt=\"$element\">";
?>
</body>
</html>