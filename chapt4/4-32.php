<!--文件4-32.php：类和对象输出乘法表-->
<HTML>
	<HEAD>
		<TITLE>类和对象输出乘法表</TITLE>
	</HEAD>
	<BODY>
       <?php
            class table
            {
                public $x;      //乘法表的维数
                function table()
                {       //构造函数出示化乘法表的维数
                    $this->x=9;
                    }
                function print_table()
                {
                    for ($i=1;$i<=$this->x;$i++){
                         for ($j=1;$j<=$i;$j++){
                             echo $j."*".$i."&nbsp;";
                             }
                         echo "<br>";
                        }
                    }    //end function print_table()
                } //end class
            $table1=new table;
            $table1->print_table();
            echo "<br>";
            $table2=new table;
            $table2->x=6;
            $table2->print_table();
		?>
	</BODY>
</HTML>

