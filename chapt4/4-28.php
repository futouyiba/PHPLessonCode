<!--�ļ�4-28.php����Ķ���Ͷ���Ĵ���-->
<HTML>
	<HEAD>
		<TITLE>��Ķ���Ͷ���Ĵ���</TITLE>
	</HEAD>
	<BODY>
		<?php
            class point
            {
                public $x;      //��x������
                //private $x;
                public $y;      //��x������
                //private $y;
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
            if ($point1=new point){
                echo "����\$point1�����ɹ���<br>";
                }
            $point1->setx(6);
            //$point1->x=6;
            $point1->sety(8);
            //$point1->y=6;
            $point1->print_point();
		?>
	</BODY>
</HTML>
