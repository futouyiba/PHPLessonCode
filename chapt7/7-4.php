<!--�ļ�7-4.php���ļ��ϴ�ʵ��-->
<!--Ϊ������ȷ���У����ڱ��ļ���ͬĿ¼���½�һ�ļ��У���Ϊ��upfile��-->
<?php
if ($_POST[add]=="�ϴ�"){
       //�������ڵ�ʱ�����һ�������
       $rand1=rand(0,9);
       $rand2=rand(0,9);
       $rand3=rand(0,9);
       $filename=date("Ymdhms").$rand1.$rand2.$rand3;       
       if(empty($_FILES['file_name']['name'])){  
	   			 //$_FILES['file_name']['name']Ϊ��ȡ�ͻ��˻����ļ���ԭ����
           echo "�ļ�������Ϊ��";
           exit;
           }
       $oldfilename=$_FILES['file_name']['name'];
       echo "<br>ԭ�ļ���Ϊ��".$oldfilename;       
       $filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
       echo "<br>ԭ�ļ�������Ϊ��".$filetype;
       if(($filetype!='.doc')&&($filetype!='.xls')&&($filetype!='.DOC')&&($filetype!='.XLS')){
          echo "<script>alert('�ļ����ͻ��ַ����');</script>";
          echo "<script>location.href='7-4.php';</script>";
          exit;
          }
       echo "<br>�ϴ��ļ��Ĵ�СΪ���ֽڣ���".$_FILES['file_name']['size'];
	   			//$_FILES['file_name']['size']Ϊ��ȡ�ͻ��˻����ļ��Ĵ�С����λΪB
       if ($_FILES['file_name']['size']>1000000) {
           echo "<script>alert('�ļ�̫�󣬲����ϴ�');</script>";
          echo "<script>location.href='7-4.php';</script>";
          exit;
           }
       echo "<br>�ļ��ϴ������������ʱ�ļ���Ϊ��".$_FILES['file_name']['tmp_name'];
					//ȡ�ñ����ļ�����ʱ�ļ�������·����
       $filename=$filename.$filetype;
       echo "<br>���ļ���Ϊ��".$filename;       
       $savedir="upfile/".$filename;
       if(move_uploaded_file($_FILES['file_name']['tmp_name'],$savedir)){
            $file_name=basename($savedir);       //ȡ�ñ����ļ����ļ���������·����
            echo "<br>�ļ��ϴ��ɹ�������Ϊ��".$savedir;
           }else{
             echo "<script language=javascript>";
             echo "alert('�����޷�������д�������!\n���η���ʧ�ܣ�');";
             echo "location.href='7-4.php';";
             echo "</script>";
             exit;
         }       
    }
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>==�ļ��ϴ�ʵ��==</title>
<style>
body{font-size:10pt};
td{font-size:10pt};
.style1 {color: #FF0000}
.style2 {
	color: #000000;
	font-weight: bold;
}
</style>
</head>
<body>
<div align="center">
</div>
  <form  enctype="multipart/form-data" action="7-5.php" method="post">
  <!--�˴�һ��Ҫ��enctype="multipart/form-data"//-->
  <table width="486" height="103" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#008080" id="AutoNumber1" style="border-collapse: collapse">
    <tr bgcolor="#CCCCCC">
      <td height="30" colspan="2" align="right"><div align="center" class="style2">�ļ��ϴ�ʵ��</div>      </td>
    </tr>
    <tr>
      <td width="103" height="45" align="right"><div align="center"><span class="style1">*</span>�ļ��ϴ���ַ��</div></td>
      <td width="377" height="45"><input type="file" name="file_name">
      ����С��2M Ϊ�ˣ�</td>
    </tr>
    <tr>
      <td height="33" align="right" colspan="2">
      <p align="center"><input type="submit" value="�ϴ�" name="add">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="����" name="B2"></td>
    </tr>
  </table>
</form>
</body>
</html>
