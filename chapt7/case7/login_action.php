<!--�ļ�login_action.php���û�ע��-->
<html>
<head>
<title>�û�ע��</title>
</head>
<body>
	<?php
    //���ձ굥����
	$user_name=$_POST["user_name"];
	$user_pw1=$_POST["user_pw1"];
	$user_pw2=$_POST["user_pw2"];
    //�굥���ݻ�������֤��ʡ���û���������֤
	if ($user_name=="" or $user_pw1=="" or $user_pw2=="" or $_FILES['pic_name']['name']==""){
	echo "�û�������������ĵ�½�����ͷ��ȫ����Ϊ�գ���<a href=login.html>����</a>������д";	
	exit;
	}
	if ($user_pw1!=$user_pw2){
	echo "����������ĵ�½���ƥ�䣬��<a href=login.html>����</a>������д";
	}
       //�����Զ��ļ���
       $rand1=rand(0,9);
       $rand2=rand(0,9);
       $rand3=rand(0,9);
       $filename=date("Ymdhms").$rand1.$rand2.$rand3;
       //ͷ���ϴ�
       $oldfilename=$_FILES['pic_name']['name'];
       $filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
       if(($filetype!='.gif')&&($filetype!='.GIF')&&($filetype!='.jpg')&&($filetype!='.JPG')){
          echo "<script>alert('�ļ����ͻ��ַ����');</script>";
          echo "<script>location.href='login.html';</script>";
          exit;
          }
       if ($_FILES['pic_name']['size']>1000000) {
           echo "<script>alert('�ļ�̫�󣬲����ϴ�');</script>";
          echo "<script>location.href='login.html';</script>";
          exit;
           }
					//ȡ�ñ����ļ�����ʱ�ļ�������·����
       $filename=$filename.$filetype; 
       $savedir=$filename;
       if(move_uploaded_file($_FILES['pic_name']['tmp_name'],$savedir)){
            $file_name=basename($savedir);       //ȡ�ñ����ļ����ļ���������·����
           }else{
             echo "<script language=javascript>";
             echo "alert('�����޷�������д�������!\n���η���ʧ�ܣ�');";
             echo "location.href='login.html';";
             echo "</script>";
             exit;
         }     
	//��¼ע����Ϣ��user_info.txt�ļ���
	$file=fopen("user_info.txt","a");   
	flock($file,LOCK_EX);
    $string=$user_name."\n";
	fputs($file,$string);
	$string=$user_pw1."\n";
	fputs($file,$string);
	$string=$filename."\n";
	fputs($file,$string);
    fputs($file,"\n");
    echo "��ϲ����ע��ɹ���<br>";
	echo "�û�����".$user_name."<br>";
	echo "��½���".$user_pw1."<br>";
	echo "ͷ��<img src=".$filename." align=middle><br>"; 
	echo "��<a href=land.html>��½</a>";
	?>
</body>
</html>
