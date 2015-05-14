<!--文件4-30.php：类的继承-->
<HTML>
	<HEAD>
		<TITLE>类的继承</TITLE>
	</HEAD>
	<BODY>
		<?php
            class point
            {
                public $x;      //点x的坐标
                public $y;      //点x的坐标
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
                    echo "坐标为：（".$this->x.",".$this->y."）";
                    }
                }
            class cirle extends point{
                private $radius;
                function setradius($r){
                    $this->radius=$r;
                    }
                function print_radius()
                {
                    echo "半径为：".$this->radius;
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
