<!--�ļ�4-30.php����ļ̳�-->
<HTML>
	<HEAD>
		<TITLE>��ļ̳�</TITLE>
	</HEAD>
	<BODY>
		<?php
            class point
            {
                public $x;      //��x������
                public $y;      //��x������
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
            class cirle extends point{
                private $radius;
                function setradius($r){
                    $this->radius=$r;
                    }
                function print_radius()
                {
                    echo "�뾶Ϊ��".$this->radius;
                    }
                }
            $cirle1=new cirle;
            $cirle1->setx(6);
            $cirle1->sety(8);
            $cirle1->print_point();
            $cirle1->setradius(9);
            echo "<br>";
            $cirle1->print_radius();
		?>
	</BODY>
</HTML>
