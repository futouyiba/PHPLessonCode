<HTML>
<HEAD>
 <TITLE>��ȡָ��ʱ���Unixʱ���</TITLE>
</HEAD>
<BDOY>
 <?php
//��mktime()����ʱ���
  $tm= mktime(23,56,59,12,20,1999);
  echo "1999��12��20��23��56��59���Unixʱ���Ϊ��".$tm;
  //��strtotime()����ʱ���
  $tm2= strtotime("1999-12-20 23:56:59");
  echo "<br>��strtotime��õ�ͬһʱ���ʱ�����".$tm2;
 ?>
</BDOY>
</HTML>
