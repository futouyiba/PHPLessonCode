<!--程序4-2.php：PHP四种不同的嵌入方式-->
<HTML>
	<HEAD>
		<TITLE>PHP不同风格的分界符</TITLE>
	</HEAD>
	<BODY>
		<?php
			echo "用\"&lt?php\" 和 \"?&gt\" 做分界符";
		?>
		<p>
		<?
			echo "用\"&lt?\" 和 \"?&gt\" 做分界符";
		?>
		<p>
		<script language="php">
			echo "用\"&ltscript language=\"php\"&gt\" 和 \"&lt/script&gt\" 做分界符";
		</script>
		<p>
		<%
			echo "用\"&lt%\" 和 \"%&gt\" 做分界符";
		%>
	</BODY>
</HTML>
