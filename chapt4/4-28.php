<!--文件4-28.php：类的定义和对象的创建-->
<HTML>
	<HEAD>
		<TITLE>类的定义和对象的创建</TITLE>
	</HEAD>
	<BODY>
		<?php
            class point
            {
                public $x;      //点x的坐标
                //private $x;
                public $y;      //点x的坐标
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
                    echo "坐标为：（".$this->x.",".$this->y."）";
                    }
                }
            if ($point1=new point){
                echo "对象\$point1创建成功！<br>";
                }
            $point1->setx(6);
            //$point1->x=6;
            $point1->sety(8);
            //$point1->y=6;
            $point1->print_point();
		?>
	</BODY>
</HTML>
