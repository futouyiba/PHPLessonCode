<!--文件4-13.php：算术运算符的应用-->
<HTML>
	<HEAD>
		<TITLE>算术运算符的应用</TITLE>
	</HEAD>
	<BODY>
		<?php
           $a=10;
           $b=3;
           echo $a."+".$b."=";
           echo $a+$b."<br>";
           echo $a."-".$b."=";
           echo $a-$b."<br>";
           echo $a."*".$b."=";
           echo $a*$b."<br>";
           echo $a."/".$b."=";
           echo $a/$b."<br>";
           echo $a."%".$b."=";
           echo $a%$b."<br>";
           echo $a."++=";
           echo $a++."<br>";
           $a=10;
           echo "++".$a."=";
           echo ++$a."<br>";
           $a=10;
           echo $a."--=";
           echo $a--."<br>";
           $a=10;
           echo "--".$a."=";
           echo --$a."<br>";
           $c="b";
           echo "\"b\"++=";
           $c++;
           echo "\"".$c."\"<br>";
		?>
	</BODY>
</HTML>

