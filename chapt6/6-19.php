<HTML>
<HEAD>
 <TITLE>getdate()������ȡ��ϸ��ʱ����Ϣ</TITLE>
</HEAD>
<BDOY>
 <?php
  //���ȼ���һ��ʱ��
  $dt= "2007-07-01 08:30:00";
  echo "ʱ�䣺".$dt."<br>";
  //����ʱ���ʽ��ΪUnixʱ���
  $tm= strtotime($dt);
  echo "��ʱ���Unixʱ�����".$tm."<br>";

  //��ȡ��ʱ�����ϸ��Ϣ
  $arr = getdate($tm);
  //�����ϸ��Ϣ
  echo "�룺".$arr["seconds"]."<br>";
  echo "�֣�".$arr["minutes"]."<br>";
  echo "ʱ��".$arr["hours"]."<br>";
  echo "�գ�".$arr["mday"]."<br>";
  echo "�£�".$arr["mon"]."/".$arr["month"]."<br>";
  echo "�꣺".$arr["year"]."<br>";
  echo "���ڣ�".$arr["wday"]."/".$arr["weekday"]."<br>";
  echo "�������Ǹ����еĵ�".$arr["yday"]."��<br>";
 ?>
</BDOY>
</HTML>
