<!--�ļ�4-29.php�����캯��ʵ����ĳ�ʼ��-->
<HTML>
	<HEAD>
		<TITLE>���캯��ʵ����ĳ�ʼ��</TITLE>
	</HEAD>
	<BODY>
  <?php
            class point
            {
                public $x;      //��x������
                public $y;      //��x������
                function point()  //���ͬ�����������캯��
                {
                    $this->x=6;   //��ʼ����x��ֵ
                    $this->y=6;   //��ʼ����y��ֵ
                    }
                function setx($set_x)
                {
                    $this->x=$set_x;
                    }
                function sety($set_y)
                {
                    $this->y=$set_y;
                    }
                function print_point()
                {
                    echo "����Ϊ����".$this->x.",".$this->y."��";
                    }
                }
            $point1=new point;
            //$point1->setx(6);
            //$point1->sety(8);
            $point1->print_point();
		?>
	</BODY>
</HTML>

