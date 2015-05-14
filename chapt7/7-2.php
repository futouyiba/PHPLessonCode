<!--文件7-2.php：目录输出-->
<HTML>
	<HEAD>
		<TITLE>目录输出</TITLE>
	</HEAD>
	<BODY>
		<?php
            $dir=getcwd();     //获取当前路径
            echo getcwd(). "<br>";  //输出当前目录
            $files1=scandir($dir);   //列出指定路径中的文件和目录
            $files2=scandir($dir,1);
            print_r($files1);   //输出指定路径中的文件和目录
            print_r($files2);
            $dir=dir($dir);
            echo gettype($dir)."<br>";
			echo "目录句柄:".$dir->handle."<br>";
			echo "目录路径:".$dir->path."<br>";
			while ($entry=$dir->read())
				echo $entry."；<br> ";
			$dir->close();
            if (chdir("c:/windows")){
                echo "当前目录更改成功:c:/windows<br>";
                }else{
                   echo "当前目录更改失败！<br>";
                    }
		?>
	</BODY>
</HTML>

