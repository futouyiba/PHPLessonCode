<HTML>
<HEAD>
 <TITLE>��ѧ����ʹ�þ���</TITLE>
</HEAD>
<BDOY>
 <?php
  $s = rand(100,200);   
  $pi=pi();
  $r=sqrt($s/$pi);
  $qz1=round($r);   //��������ȡ��
  $qz2=ceil($r);    //��һ��ȡ��
  $qz3=floor($r);   //��ȥ��ȡ�� 
  
  echo "���������Բ�����Ϊ��".$s."<br>";
  echo "ͨ�������Ϳ����������Բ�İ뾶Ϊ��".$r."<br>";
  echo "��������ȡ����".$qz1."<br>";
  echo "��һ��ȡ����".$qz2."<br>";
  echo "��ȥ��ȡ����".$qz3."<br>";
 ?>
</BDOY>
</HTML>
