<html>
    <head>
        <title>การกำหนดค่าตัวแปร</title></head>
    <body>
    <?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $x;
$multiple = $y * $z;
$Division = $multiple / $z ;
$message = "Hello World";
/*echo $x; echo "<br />";
echo $y; echo "<br />";
echo $z; echo "<br />";*/
echo ("ผลบวก $x + $y = "); echo $add; echo "<br />";
echo ("ผลลบ $z - $x = "); echo $sub; echo "<br />";
echo ("ผลคูณ $y x $z = "); echo $multiple; echo "<br />";
echo ("ผลหาร $multiple "."/"." $z = "); echo $Division; echo "<br />";
#echo $message; echo "<br />";
    ?>
    </body>
</html>