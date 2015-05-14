<!--文件7-1.php：访客计数器-->
<html>
      <head>
           <title>访客计数器</title>
      </head>
      <body>
          <?php
              if (!@$fp=fopen("num.txt","r")){
                    //只读方式打开num.txt文件
                    echo "文件打开失败或找不到num.txt文件！<br>";
                    echo "num.txt文件创建成功！<br>";
                  }
              @$num=fgets($fp,12);   //读取11位数字
              if ($num=="") $num=0;
                 //如果文件的内容为空，初始化为0
              $num++;              //浏览次数加一
              @fclose($fp);         //关闭文件
              $fp=fopen("num.txt", "w");//只写方式打开num.txt文件
              fwrite($fp,$num);    //写入加一后结果
              fclose($fp);         //关闭文件
              echo "您是第".$num."位浏览者!";         //浏览器输出浏览次数
          ?>
     </body>
</html>

