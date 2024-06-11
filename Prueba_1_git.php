<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
    
$lado= 10;
$BLANCO="&nbsp";
$a=1;
if($lado>2 && $lado<=24){
for( $i=0 ; $i<$lado; $i++){
    for($x=0;$x<$lado-$i;$x++){
        echo ($BLANCO);
    }

    for($y=0;$y<$a;$y++){
     echo("*");  
    }
    $a+=2;
    echo("<br>");
}
}
?>
</body>
</html>