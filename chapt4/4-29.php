<!--文件4-29.php：构造函数实现类的初始化-->
<HTML>
	<HEAD>
		<TITLE>构造函数实现类的初始化</TITLE>
	</HEAD>
	<BODY>
  <?php
            class point
            {
                public $x;      //点x的坐标
                public $y;      //点x的坐标
                function point()  //类的同名函数做构造函数
                {
                    $this->x=6;   //初始化点x的值
                    $this->y=6;   //初始化点y的值
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
                    echo "坐标为：（".$this->x.",".$this->y."）";
                    }
                }
            $point1=new point;
            //$point1->setx(6);
            //$point1->sety(8);
            $point1->print_point();
		?>
	</BODY>
</HTML>

