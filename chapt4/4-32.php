<!--�ļ�4-32.php����Ͷ�������˷���-->
<HTML>
	<HEAD>
		<TITLE>��Ͷ�������˷���</TITLE>
	</HEAD>
	<BODY>
       <?php
            class table
            {
                public $x;      //�˷����ά��
                function table()
                {       //���캯����ʾ���˷����ά��
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

