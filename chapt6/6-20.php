<HTML>
<HEAD>
 <TITLE>�ø�ʽ���ַ������ʱ����Ϣ</TITLE>
</HEAD>
<BDOY>
 <?php
  //����һ��ʱ�䣨����õ�ǰʱ�����time()��
  $tm = strtotime("2006-09-09 10:30:40");
  echo "��ʼ�����õ�ʱ��Ϊ��2006-09-09 10:30:40<br>";
  //ʹ�ò�ͬ�ĸ�ʽ���ַ����������Ч��
  echo date("Y-M-D H:I:S A",$tm)."<br>";
  echo date("y-m-d h:i:s a",$tm)."<br>";
  echo date("Y��m��d��[l] H��i��s��",$tm)."<br>";
  echo date("F,d,Y l",$tm)."<br>";
  echo date("Y-M-D H:I:S",$tm)."<br>";
  echo date("Y-M-D H:I:S",$tm)."<br>";
  echo date("����ʱ����T�����������ʱ����OСʱ",$tm)."<br>";
  //�����ϸ��Ϣ
 ?>
</BDOY>
</HTML>
