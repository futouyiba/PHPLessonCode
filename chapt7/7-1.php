<!--�ļ�7-1.php���ÿͼ�����-->
<html>
      <head>
           <title>�ÿͼ�����</title>
      </head>
      <body>
          <?php
              if (!@$fp=fopen("num.txt","r")){
                    //ֻ����ʽ��num.txt�ļ�
                    echo "�ļ���ʧ�ܻ��Ҳ���num.txt�ļ���<br>";
                    echo "num.txt�ļ������ɹ���<br>";
                  }
              @$num=fgets($fp,12);   //��ȡ11λ����
              if ($num=="") $num=0;
                 //����ļ�������Ϊ�գ���ʼ��Ϊ0
              $num++;              //���������һ
              @fclose($fp);         //�ر��ļ�
              $fp=fopen("num.txt", "w");//ֻд��ʽ��num.txt�ļ�
              fwrite($fp,$num);    //д���һ����
              fclose($fp);         //�ر��ļ�
              echo "���ǵ�".$num."λ�����!";         //���������������
          ?>
     </body>
</html>

