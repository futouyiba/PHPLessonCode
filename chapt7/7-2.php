<!--�ļ�7-2.php��Ŀ¼���-->
<HTML>
	<HEAD>
		<TITLE>Ŀ¼���</TITLE>
	</HEAD>
	<BODY>
		<?php
            $dir=getcwd();     //��ȡ��ǰ·��
            echo getcwd(). "<br>";  //�����ǰĿ¼
            $files1=scandir($dir);   //�г�ָ��·���е��ļ���Ŀ¼
            $files2=scandir($dir,1);
            print_r($files1);   //���ָ��·���е��ļ���Ŀ¼
            print_r($files2);
            $dir=dir($dir);
            echo gettype($dir)."<br>";
			echo "Ŀ¼���:".$dir->handle."<br>";
			echo "Ŀ¼·��:".$dir->path."<br>";
			while ($entry=$dir->read())
				echo $entry."��<br> ";
			$dir->close();
            if (chdir("c:/windows")){
                echo "��ǰĿ¼���ĳɹ�:c:/windows<br>";
                }else{
                   echo "��ǰĿ¼����ʧ�ܣ�<br>";
                    }
		?>
	</BODY>
</HTML>

